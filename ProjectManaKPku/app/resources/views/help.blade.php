@extends('layouts.template')
@section('layout_content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Help Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css"
            integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ=="
            crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">
    </head>

    <style>
        * {
            font-family: 'Quicksand', sans-serif;
        }
    </style>

    <body>
        <div class ="bg-white">
            <div
                class="d-flex flex-column align-items-center justify-content-center vh-100 position-relative m-0 p-0 bg-light">
                <div class="position-relative display-1 text-white mb-0 p-4"
                    style="z-index: 2; text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5); width: 100%; text-align: center;">
                    Loading
                </div>
            </div>
        </div>
        <article id="the-article">

            <div>
                <div class="mx-auto max-w-6xl">
                    <div class="p-2 rounded">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/3 p-4 text-sm">
                                <div class="sticky inset-x-0 top-10 left-0 py-12">
                                    <div class="text-3xl mb-8">
                                        <span
                                            class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">Frequently
                                            Asked Questions</span>
                                    </div>
                                    <div class="mb-2">Any Questions ?</div>
                                    <div class="text-xs text-gray-600">See our FAQ for more details</div>
                                </div>
                            </div>
                            <div class="md:w-2/3 py-12 ">
                                <div class="p-4">

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-green-400 font-medium': isOpen == true }">Apa itu
                                                Marketplace Guru ?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>Marketplace Guru adalah sebuah platform online yang menghubungkan guru dan
                                                sekolah di Indonesia. Marketplace Guru menyediakan basis data yang berisi
                                                profil guru yang berkualitas dan berkompeten di seluruh Indonesia.
                                                Sekolah-sekolah dapat mencari dan merekrut guru sesuai dengan kebutuhan dan
                                                formasi mereka melalui sistem online yang mudah, cepat, dan aman.
                                                Marketplace Guru juga memberikan insentif dan penghargaan bagi guru yang
                                                berprestasi dan berdedikasi tinggi. Marketplace Guru adalah solusi inovatif
                                                yang ditawarkan oleh Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi
                                                (Kemendikbud Ristek) yang bertujuan untuk memenuhi kebutuhan guru dan
                                                meningkatkan mutu pendidikan di Indonesia.</p>
                                        </div>
                                    </div>

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-green-400 font-medium': isOpen == true }">Siapa saja yang
                                                bisa masuk ke dalam basis data Marketplace Guru ?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>Ada dua golongan yang bisa masuk ke dalam basis data Marketplace Guru, yaitu
                                                guru honorer yang lulus seleksi dan lulusan pendidikan profesi guru (PPG)
                                                prajabatan. Guru honorer yang lulus seleksi adalah guru honorer yang telah
                                                mengikuti dan dinyatakan lulus seleksi untuk menjadi calon guru ASN.
                                                Nantinya, frekuensi seleksi guru ini bisa ditingkatkan lebih dari dari satu
                                                kali dalam setahun. Lulusan PPG prajabatan adalah mereka yang lulus dari
                                                pendidikan profesi guru dan dinyatakan memenuhi syarat sebagai calon guru
                                                ASN. Program PPG dan mahasiswa PPG pun akan ditingkatkan.</p>
                                        </div>
                                    </div>

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-green-400 font-medium': isOpen == true }">Bagaimana cara
                                                sekolah mencari dan merekrut guru melalui website Marketplace Guru?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>Sekolah yang ingin mencari dan merekrut guru melalui Marketplace Guru harus
                                                mendaftar terlebih dahulu di website Marketplace Guru. Setelah mendaftar,
                                                sekolah dapat mengakses basis data yang berisi profil guru yang boleh
                                                mengajar di Indonesia. Sekolah dapat mencari guru berdasarkan kriteria yang
                                                diinginkan, seperti nama, lokasi, bidang studi, kualifikasi, pengalaman,
                                                prestasi, dll. Sekolah juga dapat berkomunikasi langsung dengan guru yang
                                                diminati melalui fitur chat. Sekolah dapat mengangkat guru yang dipilih
                                                untuk menjadi guru tetap atau kontrak sesuai dengan kesepakatan.</p>
                                        </div>
                                    </div>

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-green-400 font-medium': isOpen == true }">Apa keuntungan
                                                yang didapat oleh sekolah yang bergabung dengan Marketplace Guru?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>1. Dapat mencari dan merekrut guru yang berkualitas, berkompeten, dan sesuai
                                                dengan kebutuhan dan formasi sekolah dengan mudah, cepat, dan aman.</p>
                                            <p>2. Dapat melihat profil, riwayat, dan prestasi guru-guru yang tersedia di
                                                basis data secara lengkap dan akurat.</p>
                                            <p>3. Dapat berkomunikasi langsung dengan guru-guru yang diminati melalui fitur
                                                chat.</p>
                                            <p>4. Dapat mengangkat guru yang dipilih untuk menjadi guru tetap atau kontrak
                                                sesuai dengan kesepakatan.</p>
                                            <p>5. Dapat meningkatkan mutu pendidikan dan kesejahteraan guru di sekolah.</p>

                                        </div>
                                    </div>

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-green-400 font-medium': isOpen == true }">Apa keuntungan
                                                yang didapat oleh guru yang bergabung dengan Marketplace Guru?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>1. Dapat menawarkan diri sebagai guru yang siap mengajar di sekolah-sekolah
                                                yang membutuhkan guru dengan mudah, cepat, dan aman. </p>
                                            <p>2. Dapat melihat lokasi dan jenis sekolah yang diinginkan sesuai dengan
                                                preferensi.</p>
                                            <p>3. Dapat mengecheck langsung dengan sekolah-sekolah yang tertarik dengan
                                                profil guru.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </article>

        <div x-data="scrollHandler(document.getElementById('the-article'))" x-cloak aria-hidden="true" @scroll.window="calculateHeight(window.scrollY)"
            class="fixed h-screen w-1 hover:bg-gray-200 top-0 left-0 bg-gray-300">
            <div :style="`max-height:${height}%`" class="h-full bg-green-400"></div>
        </div>

    </body>
