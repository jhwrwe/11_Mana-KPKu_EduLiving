@extends('layouts.app')
@section('content')
    <style>
        /* Your existing styles here */

        /* Additional styles for animal-specific form */
        .animal-form {
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
    <div>
        <div class="mb-3 menu-title-container">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800 menu-title">
                Tambah Animal
            </h1>
        </div>
        <div class="container mt-5 animal-form">
            <form action="{{ route('animal_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="animal_name" class="form-label">Nama Hewan</label>
                    <input type="text" class="form-control" id="animal_name" name="animal_name"
                        placeholder="Masukkan Nama Hewan" value="Harimau Sumatera">
                </div>
                <div class="mb-3">
                    <label for="latin_name" class="form-label">Nama Latin</label>
                    <input type="text" class="form-control" id="latin_name" name="latin_name"
                        placeholder="Masukkan Nama Latin" value="Panthera tigris sumatrae">
                </div>
                <div class="mb-3">
                    <label for="species_id" class="form-label">ID Spesies</label>
                    <select name="species_id" id="species_id">
                        <option value=1>Mamalia</option>
                        <option value=2>Aves</option>
                        <option value=3>Pisces</option>
                        <option value=4>Reptilia</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="habitat" class="form-label">Habitat</label>
                    <input type="text" class="form-control" id="habitat" name="habitat"
                        placeholder="Masukkan Habitat" value="Hutan Tropis">
                </div>
                <div class="mb-3">
                    <label for="continent" class="form-label">Benua</label>
                    <input type="text" class="form-control" id="continent" name="continent"
                        placeholder="Masukkan Benua" value="Asia">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Masukkan Deskripsi" value="Harimau Sumatera adalah salah satu subspesies harimau yang habitatnya terutama di pulau Sumatera, Indonesia.">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <div x-data="{ imagePreview: '' }">
                        <img x-bind:src="imagePreview" alt="Image Preview" class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control" type="file" id="photo" name="photo" accept="image/jpg, image/png, image/jpeg" x-on:change="previewImage()">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Hewan</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

        <script>
            function previewImage() {
                const image = document.querySelector('#photo');
                const imgPreview = document.querySelector('.img-preview');
                const ofReader = new FileReader();
                ofReader.readAsDataURL(image.files[0]);
                ofReader.onload = function(oFRevent) {
                    imgPreview.src = oFRevent.target.result;
                }
            }
        </script>
    </div>
    <br>
@endsection
