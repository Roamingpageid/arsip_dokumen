<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Jangan lupa import
use App\Models\Document;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function index(Request $request)
{
    $query = auth()->user()->documents();

    if ($request->has('search') && $request->search != '') {
        $query->where('title', 'like', '%' . $request->search . '%')
              ->orWhere('original_filename', 'like', '%' . $request->search . '%');
    }

    $documents = $query->latest()->paginate(10)->withQueryString(); // withQueryString() agar paginasi tetap membawa parameter search
    return view('documents.index', compact('documents'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // 1. Validasi
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'document_file' => [
            'required',
            'file',
            'mimes:doc,docx,xls,xlsx,ppt,pptx,pdf', // Validasi tipe file
            'max:20480', // Maksimal 20MB (sesuaikan kebutuhan)
        ],
    ]);

    // 2. Ambil file & simpan
    $file = $request->file('document_file');
    $originalName = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $fileSize = $file->getSize();

    // Simpan file ke storage/app/public/documents
    // Nama filenya akan di-hash agar unik
    $path = $file->store('documents', 'public');

    // 3. Simpan data ke database
    auth()->user()->documents()->create([
        'title' => $request->title,
        'description' => $request->description,
        'original_filename' => $originalName,
        'storage_path' => $path,
        'file_type' => $extension,
        'file_size' => $fileSize,
    ]);

    return redirect()->route('documents.index')->with('success', 'Dokumen berhasil diunggah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Document $document)
    {
        // Baris ini sekarang akan berfungsi
        $this->authorize('delete', $document); 

        Storage::disk('public')->delete($document->storage_path);
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil dihapus.');
    }
    

public function download(Document $document)
{
    // Otorisasi: Pastikan hanya pemilik yang bisa download
    if ($document->user_id !== auth()->id()) {
        abort(403);
    }

    // Gunakan Storage::download()
    // Parameter pertama adalah path file (misal: "documents/asdhG34aEa.xlsx")
    // Parameter kedua adalah nama file yang akan diterima user (misal: "laporan_bulanan.xlsx")
    return Storage::disk('public')->download($document->storage_path, $document->original_filename);
}
}
