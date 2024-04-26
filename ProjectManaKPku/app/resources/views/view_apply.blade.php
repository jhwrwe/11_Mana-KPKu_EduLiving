@extends('layouts.template')

@section('layout_content')
<style>
    .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
    }

    .status-circle {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 4px; /* Adjust the margin as needed */
    }

    .approved-circle {
        background-color: #3CB043; /* Green color */
    }

    .pending-circle {
        background-color: #FFD700; /* Yellow color */
    }

    .denied-circle {
        background-color: #FF0000; /* Red color */
    }

    /* Add an outline to the card elements */
    .apply-card {
        border: 1px solid #e5e5e5; /* You can adjust the border color and thickness */
    }
</style>

<br />
<br />
<br />
<br />

<div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
    <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Applying
    </h2>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
        @foreach($applies as $user)
        <div class="lg:flex sm:flex md:flex flex w-full justify-between">
            <div tabindex="0" aria-label="card" class="focus:outline-none w-1/2 lg:w-1/2 bg-white p-6 shadow-md rounded mb-7 apply-card">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <div class="flex items-start w-full">
                        <div class="w-full">
                            ID Teacher:
                            <a href="/Teachers_info/{{$user['id_teacher_apply']}}">
                                <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                                    {{ $user['id_teacher_apply'] }}

                                </p>
                            </a>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add some distance -->
            <div class="w-4"></div> <!-- You can adjust the width to control the distance -->

            <!-- Right side (School) -->
            <div tabindex="0" aria-label="card" class="focus:outline-none w-1/2 lg:w-1/2 bg-white p-6 shadow-md rounded mb-7 apply-card">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <div class="flex items-start w-full">
                        <div class="w-full">
                            ID School:
                            <a href="/Schools_info/{{$user['id_school_apply']}}">
                                <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                                    {{ $user['id_school_apply'] }}
                                </p>
                            </a>
                            <span class="status-circle
                                    @if($user['status'] == 'Approved') approved-circle
                                    @elseif($user['status'] == 'Pending') pending-circle
                                    @elseif($user['status'] == 'Denied') denied-circle
                                    @endif"></span>
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                                {{ $user['status'] }}
                            </p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
