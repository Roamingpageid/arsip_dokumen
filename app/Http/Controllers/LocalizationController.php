<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    /**
     * Mengganti bahasa aplikasi yang disimpan di session.
     *
     * @param  string  $locale (misal: 'id' atau 'en')
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switch($locale)
    {
        // 1. Validasi bahasa yang didukung
        if (in_array($locale, ['id', 'en'])) {
            
            // 2. Simpan pilihan bahasa ke Session
            Session::put('locale', $locale);
        }

        // 3. Redirect pengguna kembali ke halaman sebelumnya
        return redirect()->back();
    }
}