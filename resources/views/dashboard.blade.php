<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 text-gray-900 dark:text-gray-100">
                    <div id="quote-slider" class="relative h-96 overflow-hidden rounded-lg"> 
                        
                        {{-- SLIDE 1 --}}
                        <div class="quote-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-100 flex items-center justify-center p-6"
                             style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1549692520-cb9e44659b82?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                            <div class="text-center text-white z-10">
                                <p class="text-3xl md:text-4xl italic font-serif">"Satu-satunya cara untuk melakukan pekerjaan hebat adalah dengan mencintai apa yang Anda lakukan."</p>
                                <p class="mt-4 text-lg md:text-xl font-light">- Steve Jobs</p>
                            </div>
                        </div>

                        {{-- SLIDE 2 --}}
                        <div class="quote-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0 flex items-center justify-center p-6"
                             style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1594951478546-e1378f8864b2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                            <div class="text-center text-white z-10">
                                <p class="text-3xl md:text-4xl italic font-serif">"Pendidikan adalah senjata paling ampuh yang bisa Anda gunakan untuk mengubah dunia."</p>
                                <p class="mt-4 text-lg md:text-xl font-light">- Nelson Mandela</p>
                            </div>
                        </div>

                        {{-- SLIDE 3 --}}
                        <div class="quote-slide absolute inset-0 bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0 flex items-center justify-center p-6"
                             style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1497997181057-0a256a73c38b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                            <div class="text-center text-white z-10">
                                <p class="text-3xl md:text-4xl italic font-serif">"Mulai dari mana Anda berada. Gunakan apa yang Anda miliki. Lakukan apa yang Anda bisa."</p>
                                <p class="mt-4 text-lg md:text-xl font-light">- Arthur Ashe</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-semibold mb-4 text-center">Cara Menggunakan Aplikasi Arsip</h3>
                    
                    <div id="tutorial-slider" class="relative h-52 overflow-hidden">
                        
                        {{-- SLIDE TUTORIAL 1 --}}
                        <div class="tutorial-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100 flex flex-col items-center justify-center text-center p-4">
                            <svg class="w-16 h-16 text-blue-500 dark:text-blue-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                            <h4 class="text-xl font-semibold">Langkah 1: Buka Arsip</h4>
                            <p class="text-gray-600 dark:text-gray-400 mt-1">Klik menu "Arsip Dokumen" di navigasi atas untuk melihat semua dokumen Anda.</p>
                        </div>
                        
                        {{-- SLIDE TUTORIAL 2 --}}
                        <div class="tutorial-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0 flex flex-col items-center justify-center text-center p-4">
                            <svg class="w-16 h-16 text-blue-500 dark:text-blue-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>
                            <h4 class="text-xl font-semibold">Langkah 2: Unggah File</h4>
                            <p class="text-gray-600 dark:text-gray-400 mt-1">Klik tombol "+ Unggah Dokumen Baru" untuk membuka halaman form upload.</p>
                        </div>

                        {{-- SLIDE TUTORIAL 3 --}}
                        <div class="tutorial-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0 flex flex-col items-center justify-center text-center p-4">
                            <svg class="w-16 h-16 text-blue-500 dark:text-blue-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                            <h4 class="text-xl font-semibold">Langkah 3: Isi Form</h4>
                            <p class="text-gray-600 dark:text-gray-400 mt-1">Isi Judul, Deskripsi (opsional), dan pilih file (Word, Excel, PPT) lalu klik "Simpan".</p>
                        </div>

                        {{-- SLIDE TUTORIAL 4 --}}
                        <div class="tutorial-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0 flex flex-col items-center justify-center text-center p-4">
                            <svg class="w-16 h-16 text-green-500 dark:text-green-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h4 class="text-xl font-semibold">Selesai!</h4>
                            <p class="text-gray-600 dark:text-gray-400 mt-1">Dokumen Anda kini tersimpan. Anda bisa mengunduh atau menghapusnya kapan saja.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            /**
             * Fungsi generik untuk inisialisasi slider.
             * @param {string} sliderId - ID dari kontainer slider (misal: 'quote-slider')
             * @param {string} slideSelector - Kelas CSS dari setiap slide (misal: '.quote-slide')
             * @param {number} interval - Waktu pergantian slide dalam milidetik
             */
            function initSlider(sliderId, slideSelector, interval) {
                const slider = document.getElementById(sliderId);
                // Cek jika slider tidak ada di halaman ini, hentikan fungsi
                if (!slider) {
                    return;
                }

                const slides = slider.querySelectorAll(slideSelector);
                let currentSlide = 0;

                if (slides.length === 0) {
                    return;
                }

                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        if (i === index) {
                            slide.classList.remove('opacity-0');
                            slide.classList.add('opacity-100');
                        } else {
                            slide.classList.remove('opacity-100');
                            slide.classList.add('opacity-0');
                        }
                    });
                }

                function nextSlide() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }

                // Tampilkan slide pertama saat dimuat
                showSlide(currentSlide);
                // Atur interval pergantian
                setInterval(nextSlide, interval);
            }

            // Inisialisasi Slider Motivasi
            // (Berganti setiap 6 detik)
            initSlider('quote-slider', '.quote-slide', 6000); 
            
            // Inisialisasi Slider Tutorial
            // (Berganti setiap 4 detik agar lebih cepat)
            initSlider('tutorial-slider', '.tutorial-slide', 4000);

        });
    </script>
</x-app-layout>