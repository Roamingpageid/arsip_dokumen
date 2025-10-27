<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Unggah Dokumen Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Judul Dokumen</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('title') }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi (Opsional)</label>
                            <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="document_file" class="block text-sm font-medium text-gray-700">Pilih File (PPT, Word, Excel, PDF)</label>
                            <input type="file" name="document_file" id="document_file" class="mt-1 block w-full" required>
                            <p class="mt-1 text-sm text-gray-500">Maks. 20MB.</p>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('documents.index') }}" class="text-gray-600 mr-4">Batal</a>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                                Simpan Dokumen
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>