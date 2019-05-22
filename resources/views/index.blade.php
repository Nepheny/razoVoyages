@extends('layouts.site')

@section('content')
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-start mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <span class="subheading">Voyages</span>
        <h2 class="mb-4"><strong>Top</strong> voyages</h2>
      </div>
    </div>    		
  </div>
  <div class="container-fluid">
    <div class="row">
      @foreach ($voyages as $voyage)
      <div class="col-sm col-md-6 col-lg-4 ftco-animate">
        <div class="destination">
          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ $voyage->image }});">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search2"></span>
            </div>
          </a>
          <div class="text p-3">
            <div class="d-flex">
              <div class="one">
                <h3><a href="#">{{ $voyage->title }}</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
              </div>
              <div class="two">
                <span class="price">{{ $voyage->price }} €</span>
              </div>
            </div>
            <p>{{ $voyage->description }}</p>
            <hr>
            <p class="bottom-area d-flex">
              <span><i class="icon-map-o"></i>{{ $voyage->destination }}</span> 
              <span class="ml-auto"><a href="{{ route('voyages.show', ['voyage' => $voyage->id]) }}">Découvrir</a></span>
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection