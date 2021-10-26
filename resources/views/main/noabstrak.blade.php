@extends('main.layouts.main')

@section('content')

<section class="body">
  <div class="header">
    <div class="foto jumbotron text-center">
      <img src="/img/snow/person.png" alt="ok">
    </div>
    <div class="tempat">
      <div class="greetings">
        <div class="greetings-team">
          <p>Tim AKATSUKI</p>
        </div>
        <div class="greetings-univ">
          <p>Institut Teknologi Sepuluh Nopember</p>
        </div>
        <div class="greetings-group">
          <p>Tim 20</p>
        </div>
      </div>
      <div class="button">
        <button class="btn btn-" type="login"  text-color= "white">
          <b style= "color: white"> Lihat Kartu Peserta </b>
      </button>
      </div>
      <div class="tempat2 mx-auto">
        <div class="tempat2-maaf">
          <p>Mohon maaf, Anda dinyatakan <b>TIDAK LULUS</b> abstrak SNOW EPW </p> <br>
          <p>2022 dan tidak dapat melanjutkan ke babak selanjutnya.</p> <br>
          <p class="semangat">JANGAN PUTUS ASA DAN TETAP SEMANGAT!</p>
        </div>
      </div>
    </div>
  </div>
</section>
  


@endsection