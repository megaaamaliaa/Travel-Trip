@extends('layouts.app')
@section('title', 'Detail Travel')

@prepend('prepend-style')
    <!-- xzoom -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endprepend

@section('content')
 <!-- details -->
    <main>
      <section class="section-details-header">
      </section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                <h1>{{ $item->title }}</h1>
                <p>{{ $item->location }}</p>
                @if ($item->galleries->count())
                    <div class="gallery">
                  <div class="xzoom-container">
                    <img src="{{ Storage::url($item->galleries->first()->image) }}" alt="" class="xzoom" height="550px"  id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}" >
                  </div>
                  <div class="xzoom-thumbs">
                     @foreach ($item->galleries as $gallery )
                        <a href="{{ Storage::url($gallery->image) }}">
                            <img src="{{ Storage::url($gallery->image) }}" alt="" class="xzoom-gallery" width="128" xpriview="{{ Storage::url($gallery->image) }}" >
                        </a>
                     @endforeach

                  </div>
                </div>
                @endif
                <h2>Tentang Wisata</h2>
                <p>
                    {!! $item->about !!}
                </p>
                <div class="features row">
                  <div class="col-md-4">
                    <div class="description">
                        <img src="{{ url('frontend/images/local_activity.png') }}" alt="" class="featured-image">
                      <div class="description">
                      <h3>Featured Event</h3>
                      <p>{{ $item->featured_event }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 border-start">
                    <div class="description">
                        <img src="{{ url('frontend/images/language.png') }}" alt="" class="featured-image">
                      <div class="description">
                      <h3>Language</h3>
                      <p>{{ $item->language }}</p>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-4 border-start">
                    <div class="description">
                        <img src="{{ url('frontend/images/fastfood.png') }}" alt="" class="featured-image">
                      <div class="description">
                      <h3>Foods</h3>
                      <p>{{ $item->foods }}</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- card checkout -->
          <div class="col-lg-4 mt-md-2">
            <div class="card card-details card-right">
              <h2>Trip Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-end">
                    {{\Carbon\Carbon::create($item->departure_date)->format('F d, Y')}}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-end">
                    {{ $item->duration }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-end">
                    {{ $item->type }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-end">
                    Rp {{ $item->price }} / person
                  </td>
                </tr>
              </table>
              </div>
              <!-- tombol join -->

              @auth
              <div class="join-container ">
              <form action="{{ route('checkout_process', $item->id) }}" method="post">
                  @csrf
                  <div class="d-grid gap-2 ">
                  <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                      Join Now
                  </button>
              </form>
              @endauth
              @guest
                  <a href="{{ route('login') }}" class="btn  d-grid btn-block btn-join-now mt-3 py-2">
                      Login or Register to Join
                  </a>
              @endguest

            </div>
          </div>
        </div>
      </section>
    </main>
@endsection

{{-- xzoom --}}
@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
      $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth:150,
          zoomHeight:150,
          title:false,
          tint:'#333',
          Xoffset:15,
        });
      });
    </script>
@endpush
