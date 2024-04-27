@extends('layouts.app')
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
        background: linear-gradient(90deg, #017717 0%, #daae51 100%);
      }
    </style>
</head>
<body>
    <div class="bg-black h-screen">
        <div class="flex flex-col items-center justify-center h-full relative bg-black">
            <img class="absolute inset-0 w-full h-full object-cover opacity-50" src="images/kebun-binatang-surabaya_169.jpeg" alt="Image">
        </div>
    </div>

    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full"> Lets Start your journey</p>
                <h1 class="my-4 text-5xl font-bold leading-tight bg-clip-text text-transparent bg-gradient-to-r from-lime-800 via-green-500 to-yellow-500">
                    EduLiving
                </h1>
                <p class="leading-normal text-2xl mb-8">
                   A place to find your way through the zoo
                </p>
            </div>

        </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
    </div>
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Main Thing's
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <br />
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Why?
                    </h3>
                    <p class="text-gray-600 mb-8">
                       To ensure the visitor don't get lost and obtain the maximum ammount of enjoyment to the zoo. In order to do that we, the zookeepers team, are here to help you in doing so, by providing an amusement, to help you along the ride
                    </p>
                </div>
                <div class="w-6/12 sm:w-1/2 p-4">
                    <img src="/images/Lovepik_com-401434436-question-mark-character.png" alt="GUmum">
                </div>
            </div>
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <img src="/images/Lovepik_com-401495259-man-communication-icon-free-vector-illustration-material.png" alt="map">
                </div>
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <div class="align-middle">
                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                            How?
                        </h3>
                        <p class="text-gray-600 mb-8">
                            Using this website, the customer could explore the zoo more, by conducting quizzes that are aimed to make, you explore more about the zoo, You can collect fun new animals. All in one website
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@endsection
