
@extends('layouts.template')
@section('layout_content')
<br>
<br>
<br>
<br>
<br>

<div class="mx-auto max-w-3xl p-6 bg-white rounded-md shadow-lg">
    <div class="space-y-6">
        <div class="border-b border-gray-900/10 pb-6">
            <div class="flex justify-center mb-4">
                <div class="rounded-full border-4 border-white">
                    <img class="h-24 w-24 rounded-full" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" src="\images\{{ $project['image'] }}">
                </div>
            </div>
                <h2 class="text-lg font-semibold leading-7 text-gray-900 text-center mb-3">Personal Information</h2>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                    <div>

                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                            <div class="border border-gray-300 p-3 rounded-md">
                            <p class="text-sm text-gray-900">{{ $project['name'] }}</p>
                        </div>
                    </div>

                    <div>

                            <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                            <div class="border border-gray-300 p-3 rounded-md">
                            <p class="text-sm text-gray-900">{{ $project['age'] }}</p>
                        </div>
                    </div>

                    <div>

                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                            <div class="border border-gray-300 p-3 rounded-md">
                            <p class="text-sm text-gray-900">{{ $project['email'] }}</p>
                        </div>
                    </div>

                    <div>

                            <label for="majors" class="block text-sm font-medium leading-6 text-gray-900">Majors</label>
                             <div class="border border-gray-300 p-3 rounded-md">
                            <p class="text-sm text-gray-900">{{ $project['majors'] }}</p>
                        </div>
                    </div>

                    <div>

                            <label for="nationality" class="block text-sm font-medium leading-6 text-gray-900">Nationality</label>
                            <div class="border border-gray-300 p-3 rounded-md">
                            <p class="text-sm text-gray-900">{{ $project['nationality'] }}</p>
                        </div>
                    </div>

                    <div>

                            <label for="Hobbys" class="block text-sm font-medium leading-6 text-gray-900">Hobbies</label>
                            <div class="border border-gray-300 p-3 rounded-md">
                            <p class="text-sm text-gray-900">{{ $project['Hobbys'] }}</p>
                        </div>
                    </div>

                    <div>

                            <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                             <div class="border border-gray-300 p-3 rounded-md">
                            <p class="text-sm text-gray-900">{{ $project['phone'] }}</p>
                        </div>
                    </div>

                    <div class="col-span-full">

                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                            <div class="border border-gray-300 p-3 rounded-md">
                            <p class="text-sm text-gray-900">{{ $project['about'] }}</p>
                        </div>
                    </div>



                </div>
            </div>

            <div class="flex justify-end gap-x-4">
                <a href ="/teachers_info/CV/{{$project['id']}}">
                    <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">See CV</button>
                <a>

            </div>
        </div>
    </div>



@endsection
