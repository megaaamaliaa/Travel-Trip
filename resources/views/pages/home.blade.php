@extends('layouts.app')

@section('title')
    TripTravel
@endsection

@section('content')
<!-- header -->
<header class="text-center">
    <h2>
    Travel With Us
    </h2>

</header>

<main>
    <!-- statistic -->
    <div class="container">
    <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
        <img src="{{ url('frontend/images/member.png') }}" alt="" height="20px" width="20px">
        <h2>20K</h2>
        <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
        <img src="{{ url('frontend/images/map.png') }}" alt="" height="20px" width="20px">
        <h2>12</h2>
        <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
        <img src="{{ url('frontend/images/hotel.png') }}" alt="" height="20px" width="20px">
        <h2>3K </h2>
        <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
        <img src="{{ url('frontend/images/partner.png') }}" alt="" height="20px" width="20px">
        <h2>72</h2>
        <p>Partners</p>
        </div>
    </section>
    </div>

    <!-- section popular -->
    <section class="section-popular" id="popular">
    <div class="container">
        <div class="row">
        <div class="col text-center section-popular-heading">
            <h2>Best Packages For You</h2>
            <p>
            Something that you never try
            <br />
            before in this world
            </p>
        </div>
        </div>
    </div>
    </section>

    <!-- section popular content -->
    <section class="section-popular-content" id="popular-content">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
        @foreach ($items as $item )
            <div class="col-sm-6 col-md-4 col-lg-3">
            <div
            class="card-travel text-center d-flex flex-column"
            style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');"
              >
            <div class="travel-country">{{ $item->location }}</div>
            <div class="travel-location">{{ $item->title }}</div>
            <div class="travel-button mt-auto">
                <a href="{{ route('detail',$item->slug) }}" class="btn btn-travel-details px-4">
                View Details
                </a>
            </div>
            </div>
        </div>
        @endforeach

        </div>
        <div class="paginate">
            {{ $items->links() }}

        </div>
    </div>
    </section>

    <!-- Our Networks -->
    <section class="section-networks" id="networks">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <h2>Our Networks</h2>
            <p>
            Companies are trusted us
            <br />
            more than just a trip
            </p>
        </div>
        <div class="col-md-9 text-center">
            <img
            src="{{  url ('frontend/images/logos_partner.png') }}"
            alt=" Logo Partner"
            class="img-partner"
            />
        </div>
        </div>
    </div>
    </section>

    <!-- Testimonial Heading-->
    <section
    class="section-testimonial-heading"
    id="section-testimonial-heading"
    >
    <div class="container">
        <div class="row">
        <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
            Moments were giving them
            <br />
            the best experience
            </p>
        </div>
        </div>
    </div>
    </section>

    <!-- Testimonial Content -->
    <section class="section-testimonial-content" id="testimonialContent">
    <div class="container">
        <div class="section-testimonial-travel row justify-cintent-center">
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content">
                <img
                src="{{ url ("frontend/images/testimonial-1.png") }}"
                alt="User1"
                class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Mega Amalia</h3>
                <p class="testimonial">
                “It was glorious and I could not stop to say wohooo for
                every single moment Dankeeeeee “
                </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Ubud</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content">
                <img
                src="{{ url ("frontend/images/testimonial-2.png") }}"
                alt="User1"
                class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Shayna</h3>
                <p class="testimonial">
                “The trip was amazing and I saw something beautiful in that
                Island that makes me want to learn more“
                </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Nusa Penida</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
            <div class="testimonial-content">
                <img
                src="{{ url ("frontend/images/testimonial-3.png") }}"
                alt="User1"
                class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Shabrina</h3>
                <p class="testimonial">
                “I loved it when the waves was shaking harder — I was scared
                too“
                </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Karimun Jawa</p>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-12 text-center">
            <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
            Get Started
            </a>
        </div>
        </div>
    </div>
    </section>
</main>

@endsection
