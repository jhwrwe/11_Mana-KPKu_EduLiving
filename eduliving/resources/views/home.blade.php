@extends('layouts.app')
@section('content')


<div class="container-fluid p-0 ">
    <div class="image-container"></div>
</div>

<div class="circle-button1">
    <a href="/Find/2">Avies</a>
</div>

<div class="circle-button2">
    <a href="/Find/3">Pisces</a>
</div>

<div class="circle-button3">
    <a href="/Find/4">Reptil</a>
</div>

<div class="circle-button4">
    <a href="/Find/1">Mamal</a>
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
            <div class="row">
            <div class="w-5/6 sm:w-1/2 p-6">
                <br />
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    Why?
                </h3>
                <p class="text-gray-600 mb-8">
                   To ensure the visitor don't get lost and obtain the maximum ammount of enjoyment to the zoo. In order to do that we, the zookeepers team, are here to help you in doing so, by providing an amusement, to help you along the ride
                </p>
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-4 col-sm-6 p-4">
                        <img src="/images/kebunbinatang.jpg" alt="GUmum" class="img-fluid float-end">
                    </div>
                </div>
            </div>
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


@endsection


