@extends('layouts.app')

@section('content')
<section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-start">
        <div class="col-md-10 heading-section ftco-animate">
          <span class="subheading">{{ $voyage->title }}</span>
          <h2 class="mb-4 pb-3"><strong>{{ $voyage->price }} € </strong>/ Destination : {{ $voyage->destination }}</h2>
          <p>{{ $voyage->description }}</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <img src={{ $voyage->image }} alt="" />
      </div>
    </div>
  </section>
@endsection