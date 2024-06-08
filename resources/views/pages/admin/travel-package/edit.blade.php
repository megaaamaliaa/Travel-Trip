@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
    </div>

    <div class="row">
        <div class="card-body">
            {{-- menampilkan pesan error --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                         @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('Admintravel-package.update', $item->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="from-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="Title" value="{{ $item->title }}">
                    </div>

                    <div class="from-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" id="" class="form-control" placeholder="Location" value="{{ $item->location }}">
                    </div>

                    <div class="from-group">
                        <label for="about">About</label>
                        <textarea name="about" cols="30" rows="10" class="d-block w-100 form-control">  {{ $item->about }}</textarea>
                    </div>

                    <div class="from-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" name="featured_event" id="" class="form-control" placeholder="Featured Event" value="{{ $item->featured_event }}">
                    </div>

                    <div class="from-group">
                        <label for="language">Language</label>
                        <input type="text" name="language" id="" class="form-control" placeholder="Language" value="{{ $item->language }}">
                    </div>

                    <div class="from-group">
                        <label for="food">food</label>
                        <input type="text" name="food" id="" class="form-control" placeholder="Food" value="{{ $item->food }}">
                    </div>

                    <div class="from-group">
                        <label for="departure_date">Departure date</label>
                        <input type="date" name="departure_date" id="" class="form-control" placeholder="Departure Date" value="{{ $item->departure_date }}">
                    </div>

                    <div class="from-group">
                        <label for="duration">Duration</label>
                        <input type="text" name="duration" id="" class="form-control" placeholder="Duration" value="{{ $item->duration }}">
                    </div>

                    <div class="from-group">
                        <label for="type">Type</label>
                        <input type="text" name="type" id="" class="form-control" placeholder="Type" value="{{ $item->type }}">
                    </div>

                    <div class="from-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="" class="form-control" placeholder="Price" value="{{ $item->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ubah</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
