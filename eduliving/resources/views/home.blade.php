@extends('layouts.app')
@section('content')
    <div class="container-fluid p-0 ">
        <div class="image-container"></div>
    </div>

    <div class="circle-button1">
        <a href="/Find/2">Avies</a>
    </div>

    <div class="circle-button2">
        <a href="/Find/4">Reptil</a>
    </div>

    <div class="circle-button3">
        <a href="/Find/3">Pieces</a>
    </div>

    <div class="circle-button4">
        <a href="/Find/1">Mamal</a>
    </div>

    <div class="pt-24">
        <div class="container-fluid px-5 mx-auto my-5">
            <div class="card bg-light text-black">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 align-items-center">
                            <div class="flex flex-col justify-center items-start text-center md:text-left">
                                <table>
                                    <tr>
                                        <p class="uppercase tracking-loose"> Let's Start your journey</p>
                                    </tr>
                                    <tr>
                                        <h1 class="my-4 text-5xl font-bold leading-tight bg-clip-text text-transparent bg-gradient-to-r from-lime-800 via-green-500 to-yellow-500">
                                            EduLiving
                                        </h1>
                                    </tr>
                                    <tr>
                                        <p class="leading-normal text-2xl">
                                            A place to find your way through the zoo
                                        </p>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <table class="my-5 mx-5">
                                <tr>
                                    <h2 class="my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                                        Main Thing's
                                    </h2>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell p-1">
                                        <img src="https://th.bing.com/th/id/OIG2.dbxAi_LIhR0fzAOFO3N1?pid=ImgGn"
                                            class="img-fluid rounded" alt="..."style="width: 2000px;">
                                    </td>
                                    <td class=" p-1">
                                        <img src="https://th.bing.com/th/id/OIG4.U7ezvegrZMU81JmuFrXp?pid=ImgGn"
                                            class="img-fluid rounded" alt="..."style="width: 2000px;">
                                    </td>
                                    <td class=" p-1">
                                        <img src="https://th.bing.com/th/id/OIG2.BM5OxrCdnjwZ7umn4y0O?pid=ImgGn"
                                            class="img-fluid rounded" alt="..."style="width: 2000px;">
                                    </td>
                                    <td class=" p-1">
                                        <img src="https://th.bing.com/th/id/OIG4.vY9YnLy1NgLBjvk5TdWv?pid=ImgGn"
                                            class="img-fluid rounded" alt="..."style="width: 2000px;">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="relative -mt-12 lg:-mt-24"> --}}
    </div>

    <section class="bg-white border-b py-8">
        <hr class="my-5 mx-5">
        <table class="my-5 mx-5">
            <tr>
                <td>
                    <h1 class="text-black p-5 text-center">Why?</h1>
                    <p class="text-black p-5 h5" style="font-weight: normal;">
                        To ensure the visitor don't get lost and obtain the maximum ammount of enjoyment to the zoo. In
                        order to do that we, the zookeepers team, are here to help you in doing so, by providing an
                        amusement, to help you along the ride
                    </p>
                </td>
                <td class="d-none d-sm-table-cell">
                    <img src="/images/kebunbinatang.jpg" alt="GUmum" class="img-fluid"
                        style="max-width: 95%; height: auto;">
                </td>
            </tr>
        </table>
        <hr class="my-5 mx-5">
        <table class="my-5 mx-5">
            <tr>
                <td class="d-none d-sm-table-cell">
                    <img src="/images/Lovepik_com-401495259-man-communication-icon-free-vector-illustration-material.png"
                        alt="GUmum" class="img-fluid" style="max-width: 100%; height: auto;">
                </td>
                <td>
                    <h1 class="text-black p-5 text-center">How?</h1>
                    <p class="text-black p-5 h5" style="font-weight: normal;">
                        Using this website, the customer could explore the zoo more, by conducting quizzes that are
                        aimed to make, you explore more about the zoo, You can collect fun new animals. All in one
                        website
                    </p>
                </td>
            </tr>
        </table>
        <hr class="my-5 mx-5">
        <table class="my-5 mx-5">
            <tr>
                <td class="d-none d-sm-table-cell p-2">
                    <img src="https://th.bing.com/th/id/OIG2.dbxAi_LIhR0fzAOFO3N1?pid=ImgGn"
                        class="img-fluid rounded" alt="..."style="width: 2000px;">
                </td>
                <td class=" p-1">
                    <img src="https://th.bing.com/th/id/OIG4.U7ezvegrZMU81JmuFrXp?pid=ImgGn"
                        class="img-fluid rounded" alt="..."style="width: 2000px;">
                </td>
                <td class=" p-2">
                    <img src="https://th.bing.com/th/id/OIG2.BM5OxrCdnjwZ7umn4y0O?pid=ImgGn"
                        class="img-fluid rounded" alt="..."style="width: 2000px;">
                </td>
                <td class=" p-2">
                    <img src="https://th.bing.com/th/id/OIG4.vY9YnLy1NgLBjvk5TdWv?pid=ImgGn"
                        class="img-fluid rounded" alt="..."style="width: 2000px;">
                </td>
            </tr>
        </table>
        <hr class="my-5 mx-5">
    </section>
@endsection
