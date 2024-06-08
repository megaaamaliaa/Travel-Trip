@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaction {{ $item->users->name }}</h1>
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
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $item->id }}</td>
                        </tr>
                        <tr>
                            <th>Paket Travel</th>
                            <td>{{ $item->travel_packages->title }}</td>
                        </tr>
                        <tr>
                            <th>Pembeli</th>
                            <td>{{ $item->users->name}}</td>
                        </tr>

                        <tr>
                            <th>Total Transaksi</th>
                            <td>Rp {{ $item->transaction_total }}</td>
                        </tr>
                        <tr>
                            <th>Status Transaksi</th>
                            <td>{{ $item->transaction_status }}</td>
                        </tr>
                        <tr>
                            <th>Pembelian</th>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Nasionality</th>
                                        <th>NIK</th>
                                        <th>Bukti Transaksi</th>
                                    </tr>
                                    @foreach ($item->details as $detail )
                                        <tr>
                                            <td>{{ $detail->id }}</td>
                                            <td>{{ $detail->username }}</td>
                                            <td>{{ $detail->nationality }}</td>
                                            <td>{{ $detail->NIK }}</td>
                                            <td> <img src="{{ asset('storage/bukti-image/'. $detail->image) }}" alt="" style="width:150px" class="img-thumbnail"></td>

                                        </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
