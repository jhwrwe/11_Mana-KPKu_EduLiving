@extends('layouts.template')

@section('layout_content')
<style>
    .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
    }
</style>

<br />
<br />
<br />
<br />

<div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
    <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Guru
    </h2>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
        @foreach($projects as $user)
        <a href="/Teachers_info/{{$user['id']}}">
            <div class="lg:flex items-center justify-center w-full">
                <div tabindex="0" aria-label="card" class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow-lg rounded text-black border border-gray-400">
                    <!-- Added the border class for the outline -->
                    <div class="flex items-center border-b border-gray-200 pb-6">
                        <img src="\images\{{ $user->image }}" alt="user avatar" class="w-12 h-12 rounded-full" />
                        <div class="flex items-start justify-between w-full">
                            <div class="pl-3 w-full">
                                <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-black">
                                    {{ $user->name }}
                                </p>
                                <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">
                                    {{ $user->about }}
                                </p>
                            </div>
                            <div role="img" aria-label="bookmark">
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">
                            {{ $user['phone'] }}
                        </p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">
                            {{ $user->email }}
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <br />
        @endforeach
    </div>
</div>
@endsection
