@extends('layouts.template')
@section('layout_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .gradient {
          background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>
<body>

    <br />
    <br />
    <br />
    <br />
    <br />
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
          <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            About Us
          </h2>
          <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
          <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
            <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
              <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                <div class="p-8 text-3xl font-bold text-center border-b-4">
                  Visi
                </div>
                <ul class="w-full text-center text-sm">
                  <li class="border-b py-4">Menjadi platform online terdepan yang menghubungkan guru dan sekolah di Indonesia.</li>
                  <li class="border-b py-4">Menjadi solusi inovatif yang memecahkan masalah kekurangan dan ketimpangan guru di Indonesia.</li>
                  <li class="border-b py-4">Menjadi mitra strategis bagi pemerintah dalam mengembangkan sumber daya manusia yang unggul melalui pendidikan.</li>
                </ul>
              </div>
              <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">


              </div>
            </div>
            <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
              <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <div class="w-full p-8 text-3xl font-bold text-center">
                    Tujuan
                </div>
                <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                <ul class="w-full text-center text-base font-bold">
                  <li class="border-b py-4">Membangun basis data yang berisi profil guru yang berkualitas dan berkompeten di seluruh Indonesia.</li>
                  <li class="border-b py-4">Memfasilitasi sekolah-sekolah untuk merekrut guru sesuai dengan kebutuhan dan formasi mereka.</li>
                  <li class="border-b py-4">Meningkatkan kesejahteraan dan profesionalisme guru melalui sistem pengangkatan yang transparan dan adil.</li>
                  <li class="border-b py-4">Mendorong kerjasama dan kolaborasi antara guru, sekolah, dan pemerintah dalam meningkatkan mutu pendidikan.</li>
                </ul>
              </div>
              <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">


              </div>
            </div>
            <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
              <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                <div class="p-8 text-3xl font-bold text-center border-b-4">
                  Misi
                </div>
                <ul class="w-full text-center text-sm">
                  <li class="border-b py-4">Menyediakan basis data yang lengkap, akurat, dan terpercaya tentang guru yang boleh mengajar di Indonesia.</li>
                  <li class="border-b py-4">Menyediakan layanan yang mudah, cepat, dan aman bagi sekolah untuk mencari dan merekrut guru yang sesuai dengan kriteria mereka.</li>
                  <li class="border-b py-4">Menyediakan insentif dan penghargaan bagi guru yang berprestasi dan berdedikasi tinggi.</li>
                </ul>
              </div>
              <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">


              </div>
            </div>
          </div>
        </div>
      </section>
        <div class="row mt-5 bg-light p-4">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
    <br />
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Meet the Team
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="flex flex-wrap justify-center p-10">
                @foreach ($projects as $project)
                <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                            <div class="flex items-center justify-center">
                                <img src="/images/{{ $project['image'] }}" class="w-64 h-64  rounded-full">
                            </div>
                        </div>
                        <div class="w-full p-8 text-3xl font-bold text-center">
                            {{ $project->name }}
                        </div>
                        <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                        <div class="w-full text-center text-base" style="margin-bottom: 20px;">
                            <p class="py-4 font-semibold">{{ $project->title }}</p>
                            <p class="py-4">{{ $project->date }}</p>
                            <p class="py-4">{{ $project->major }}</p>
                            <p class="py-4">{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
