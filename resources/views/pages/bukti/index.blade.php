@extends('layouts.sukses')
@section('title', 'Checkout Sukses')

@section('content')
      <!-- Sukses-->
    <main>
      <div class="section-sukses d-flex align-item-center">
        <div class="col text-center">
         <div class="card shadow">
                <div class="card-body">
                    {{-- untuk menyimpan menggunakan store --}}
                    <form action="{{ route('bukti.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="image">Image</label>
                        <input type="file" name="image" placeholder="Image">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                    </form>
                </div>
                <table class="table table-bordered" width='100%' cellspacing='0' >
                <thead>
                    <tr>
                        <th>ID Transaction</th>
                        <th>Bukti</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($items as $item)
                    <tr>
                        {{-- <td>{{ $item->travel_packages->}}</td> --}}
                        <td>
                            <img src="{{ Storage::url($item->image) }}" alt="" style="width:150px" class="img-thumbnail">
                        </td>
                    </tr>
                   @empty
                       <tr>
                        <td colspan="7" class="text-center" >
                            Data Kosong
                        </td>
                       </tr>
                   @endforelse
                </tbody>
               </table>
            </div>
        </div>
      </div>
    </main>
@endsection
