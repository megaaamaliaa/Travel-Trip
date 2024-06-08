@extends('layouts.checkout')
@section('title', 'CHECKOUT')

@prepend('prepend-style')
    <!-- gijgo -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endprepend

@section('content')
       <!-- checkout-->
    <main>
      <section class="section-details-header">
      </section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                 @endif
                <h1>Who is Going?</h1>
                <p> Trip to {{ $item->travel_packages->title }}, {{ $item->travel_packages->location }}</p>
                <div class="attendee">
                  <table class="table table-responsive-sm text-center">
                    <thead>
                      <tr>
                        <td>Picture</td>
                        <td>Name</td>
                        <td>Nationality</td>
                        <td>NIK</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($item->details as $detail )
                          <tr>
                        <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" alt="" height="60" class="rounded-circle"></td>
                        <td class="align-middle">{{ $detail->username }}</td>
                        <td class="align-middle">{{ $detail->nationality }}</td>
                        <td class="align-middle">{{ $detail->NIK }}</td>
                        <td class="align-middle">
                          <a href="{{ route('checkout-remove', $detail->id) }}">
                          <img src="{{ url('frontend/images/ic_remove.png') }}" alt="">
                          </a>
                        </td>
                      </tr>
                      @empty
                          <tr>
                            <td colspan="6" class="text-center"> No Visitor</td>
                          </tr>
                      @endforelse

                    </tbody>
                  </table>
                </div>
                <div class="member mt-3">
                  <h2>Add Member</h2>
                  <form action="{{ route('checkout-create', $item->id) }}" class="form-inline row " method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="col-sm-3">
                    <label for="username" class="visually-hidden-focusable">username</label>
                    <input type="text" name="username" class="form-control mb-2 me-sm-2" id="username" placeholder="Username">
                    </div>
                    <div class="col-sm-3">
                    <label for="NIK" class="visually-hidden-focusable">NIK</label>
                    <input type="text" name="NIK" class="form-control mb-2 me-sm-2" id="NIK" placeholder="NIK">
                    </div>
                    <div class="col-sm-3">
                    <label for="nationality" class="visually-hidden-focusable">Nationality</label>
                    <input type="text" name="nationality" class="form-control mb-2 me-sm-2" id="nationality" placeholder="Nationality">
                    </div>
                    <div class="col-sm-3">
                    <label for="image" class="visually-hidden-focusable">Bukti</label>
                    <input type="file" name="image" class="form-control mb-2 me-sm-2" id="image" placeholder="image" value="default value" >
                    </div>
                    <div class="col-sm-3">
                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                      Add Now
                    </button>
                    </div>
                  </form>
                </div>

            </div>
          </div>
          <!-- card checkout -->
          <div class="col-lg-4 mt-md-2">
            <div class="card card-details card-right">
              <h2>Checkout Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-end">
                    {{ $item->details->count() }} person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-end">
                    {{ $item->travel_packages->price }}/ person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-end">
                   {{ $item->transaction_total }}
                  </td>
                </tr>
                 <tr>
                  <th width="50%">Total (+Unique Code)</th>
                  <td width="50%" class="text-end">
                    <span class="text-blue">Rp {{ $item->transaction_total }},</span><span class="text-orange">{{ mt_rand(0,99)}}</span>
                  </td>
                </tr>
              </table>
              <hr>
              <h2>Payment Instructions</h2>
              <p class="payment-instructions">Please complete your payment before to
              continue the wonderful trip</p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/ic_bank.png') }}" class="bank-image" alt="">
                  <div class="descriptions">
                    <h3>PT TripTravel</h3>
                    <p>68881 8829 8899
                      <br>
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="{{ url('frontend/images/ic_bank.png') }}" class="bank-image" alt="">
                  <div class="descriptions">
                    <h3>PT TripTravel</h3>
                    <p>6899 8501 76548
                      <br>
                      Bank OCBC NISP
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              </div>
              <!-- tombol join -->
              <div class="join-container">
                <a href="{{ route('checkout-success', $item->id) }}" class="btn d-block btn-join-now mt-3 py-2">
                  I Have Made Payment
                </a>
              </div>
              <div class="text-center mt-3">
                <a href="{{ route('detail', $item->travel_packages->slug) }}" class="text-muted"> Canceled Booking</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
          uiLibrary: 'bootstrap5',
          icons:{
          rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" alt="">',
          }
        });
    </script>
@endpush


