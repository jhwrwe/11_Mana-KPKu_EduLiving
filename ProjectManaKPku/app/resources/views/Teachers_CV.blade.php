@extends('layouts.template')
@section('layout_content')

<style>
    .outline-container {
        border: 2px solid black;
        border-radius: 0.5rem;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-top: 1rem;
    }

    .info-label {
        font-weight: bold;
    }

    .info-value {
        margin-left: 0.5rem;
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .info-block {
        padding: 0.5rem;
        border: 1px solid #ddd;
        border-radius: 0.25rem;
    }
</style>

<br>
<br>
<br>
<br>

<div class="bg-white p-6 mx-auto max-w-3xl rounded-md shadow-lg outline-container">
    <h1 class="text-3xl font-bold text-center mb-6">{{ $project['name'] }}</h1>

    <div class="info-block">
        <h2 class="section-title">Personal Information</h2>
        <div class="grid-container">
            <div class="info-label">Age:</div>
            <div class="info-value">{{ $project['age'] }}</div>
            <div class="info-label">Email:</div>
            <div class="info-value">{{ $project['email'] }}</div>
            <div class="info-label">Username:</div>
            <div class="info-value">{{ $project['username'] }}</div>
            <div class="info-label">Nationality:</div>
            <div class="info-value">{{ $project['nationality'] }}</div>
            <div class="info-label">Gender:</div>
            <div class="info-value">{{ $project['gender'] }}</div>
            <div class="info-label">Phone:</div>
            <div class="info-value">{{ $project['phone'] }}</div>
        </div>
    </div>

    <div class="info-block">
        <h2 class="section-title">Education</h2>
        <div class="grid-container">
            <div class="info-label">Majors:</div>
            <div class="info-value">{{ $project['majors'] }}</div>
            <div class="info-label">Attended:</div>
            <div class="info-value">{{ $project['attended'] }}</div>
        </div>
    </div>

    <div class="info-block">
        <h2 class="section-title">Work Experience</h2>
        <p>{{ $project['work_experience'] }}</p>
    </div>

    <div class="info-block">
        <h2 class="section-title">Skills</h2>
        <p>{{ $project['skills'] }}</p>
    </div>

    <div class="info-block">
        <h2 class="section-title">Additional Information</h2>
        <div class="grid-container">
            <div class="info-label">Description:</div>
            <div class="info-value">{{ $project['description'] }}</div>
            <div class="info-label">Hobbies:</div>
            <div class="info-value">{{ $project['Hobbys'] }}</div>
            <div class="info-label">About:</div>
            <div class="info-value">{{ $project['about'] }}</div>
        </div>
    </div>
</div>

<br>
<br>
@endsection
