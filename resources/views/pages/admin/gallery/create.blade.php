@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
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
                    {{-- untuk menyimpan menggunakan store --}}
                    <form action="{{ route('Admingallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="from-control">
                        <label for="travel_packages_id">Paket Travel</label>
                        <select name="travel_packages_id" id="" required class="form-control" >
                            <option value="">Pilih Paket</option>
                            @foreach ($travel_packages as $travel_package )
                            <option value="{{ $travel_package->id }}">{{ $travel_package->title }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="image">Image</label>
                        <input type="file" name="image" placeholder="Image">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
