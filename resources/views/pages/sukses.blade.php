@extends('layouts.sukses')
@section('title', 'Checkout Sukses')

@section('content')
      <!-- Sukses-->
    <main>
      <div class="section-sukses d-flex align-item-center">
        <div class="col text-center">
          <img src="{{ url('frontend/images/ic_mail.png') }}" alt="" />
          <h1>Yeayy! Success</h1>
          <p>
            Print Your Ticket
            <br />
            please read it as well
          </p>
          <a href="{{ route('checkout-success', $item->id) }}?export=pdf" class="btn btn-home-page mt-3 px-5">Print Tiket</a>
          <div class="col text-center">
          <a href="{{ route('home') }}" class="text-muted mt-3 px-5">home</a>
        </div>
        </div>
      </div>
    </main>
@endsection
