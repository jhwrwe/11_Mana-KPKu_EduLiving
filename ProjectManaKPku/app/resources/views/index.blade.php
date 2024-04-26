@extends('layouts.template')
@section('layout_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
</head>
<body>
    <div class="bg-black">
        <div class="d-flex flex-column align-items-center justify-content-center vh-75 position-relative m-0 p-0 bg-light">
            <div class="position-relative display-1 text-white mb-0 p-4" style="z-index: 2; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); width: 100%; text-align: center;">Loading</div>
            <img class="position-absolute w-75 h-75 rounded" style="object-fit: cover; z-index: 1; opacity: 0.5; max-width: 100%; max-height: 100%;" src="images\shutterstock_2183363749-scaled.jpg" alt="Image">
        </div>
    </div>

    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full"> Lets Start your journey</p>
                <h1 class="my-4 text-5xl font-bold leading-tight bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
                    Marketplace Guru
                </h1>
                <p class="leading-normal text-2xl mb-8">
                    Platform Online yang Menghubungkan Guru dan Sekolah di Indonesia
                </p>
                <a href="\tentangkita">
                    <button class="gradient mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        START
                    </button>
                </a>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50" src="/images/Opening.png" />
            </div>
        </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
    </div>
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Gambaran Umum
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <br />
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Pengertian
                    </h3>
                    <p class="text-gray-600 mb-8">
                        Marketplace Guru adalah sebuah pangkalan data yang berisi profil guru yang boleh mengajar di Indonesia. Guru-guru ini adalah peserta seleksi pegawai pemerintah dengan perjanjian kerja (PPPK) yang lolos passing grade tetapi belum dapat formasi atau lulusan pendidikan profesi guru (PPG) yang punya sertifikat pendidik.
                        <br />
                    </p>
                </div>
                <div class="w-full sm:w-1/2 p-6">
                    <img src="/images/EA.png" alt="GUmum">
                </div>
            </div>
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <img src="/images/map.png" alt="map">
                </div>
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <div class="align-middle">
                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                            Fungsi
                        </h3>
                        <p class="text-gray-600 mb-8">
                            Marketplace Guru memfasilitasi sekolah-sekolah untuk mencari dan merekrut guru yang sesuai dengan kriteria mereka melalui sistem online yang mudah, cepat, dan aman. Marketplace Guru juga memberikan insentif dan penghargaan bagi guru yang berprestasi dan berdedikasi tinggi. Marketplace Guru adalah solusi inovatif yang ditawarkan oleh Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbud Ristek) yang bertujuan untuk memenuhi kebutuhan guru dan meningkatkan mutu pendidikan di Indonesia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection
