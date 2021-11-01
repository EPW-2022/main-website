@extends('main.layouts.main')

@section('content')

<section id="loginPage">
  <img src="/img/login-text.png" class="d-block mx-auto mb-5 mb-lg-3" alt="">
  <div class="row">
    <div class="col-lg-6 text-center event mt-5 mt-lg-0">
      <a href="http://epc.epwits.com">
        <img src="/img/EPC/logo-epc.png" class="event-logo" alt="">
      </a>
      <h1 class="event-title mt-4">EPC</h1>
      <p class="event-desc mt-3">Engineering Physics Week</p>
    </div>
    <div class="col-lg-6 text-center event mt-5 mt-lg-0">
      <a href="https://snow.epwits.com">
        <img src="/img/snow/logo-snow.png" class="event-logo" alt="">
      </a>
      <h1 class="event-title mt-4">SNOW</h1>
      <p class="event-desc mt-3">Smart Inovation of Writing</p>
    </div>
  </div>
</section>
  
@endsection