@extends('main.layouts.main')

@section('content')

<!--Header-->
<section id="big-event-header"> 
    <div class="container container-fluid d-flex align-items-center justify-content-center flex-lg-row flex-column header-epimon mt-3">
    <img src="/img/Big-Event/Epimon.png" class="Epimon" alt="Epimon">
    <div class="container-fluid d-flex align-items-center justify-content-center flex-column header-mandiri">
        <h1 class="big-event-title">
            <img src="/img/logo-2022.png" class="justify-content-end align-items-end align-baseline tahun-2022" alt="logo-2022">
            <span class="text-satu mb-2 d-block min-left">BIG EVENT OF EPW</span>
            <span class="text-dua d-block min-left">Tour With EPW</span>
            <span class="text-tiga d-block min-left">Powered by <img class="Bank-mandiri ms-1" src="/img/Bank-mandiri.png" alt="Bank-mandiri"></span>
        </h1>
    </div>
</div>
    <hr class="garis-bawah">
    <hr class="garis-bawah">
    <hr class="garis-bawah">
</section>
<!--End of Header-->
<!--Description Big Event-->
<section id="Description-BE">
    <div class="container container-fluid">
        <img src="/img/Big-Event/six-star.png" class="six-star" alt="">
    </div>
    <div class="container apa-itu">
        <h1 class="text-center justify-content-center align-items-center">Apa sih BIG EVENT itu? </h1>
    </div>
    <div class="container mt-5 deskripsi-BE">
        <p>Big Event adalah salah satu rangkaian acara EPW yang terdiri dari beberapa kegiatan seperti Opening, Grand Roadshow yang dikenal dengan PREFER serta acara terakhir yaitu Closing x Talkshow yang bernama Tour with EPW
        </p>
    </div>
    <div class="text-center">
        <a href="" class="fw-bolder mt-5 mb-5 Daftar-btn">Daftar Yuk!</a>
      </div>
    </section>
    
    <!--End of Description-->
    <section id="speaker">
    <div class="accordion" id="accordionExample">
    <div class="container dua-button">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-6 col-lg-3 col-sm-2">
                <a href="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="Grand-btn mb-5">Grand Roadshow</a>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-2">
                <a href="" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="Closing-btn">Closing X Talkshow</a>
            </div>
        </div>
    </div>
    <div id="collapseOne" class="container prefer accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <h1 class="text-center mt-4 justify-content-center align-items-center">PREFER</h1>
        <h3 class="text-center mt-3 justify-content-center align-items-center">Prepare Yourself to be A Future Engineer</h3>
        <div class="container pemateri">
            <div class="row justify-content-center text-center mt-5">
                <div class="col-md-5 col-lg-4 col-sm-2">
                    <img src="/img/Big-Event/mbak-nadhifa.png" alt="">
                    <p class="mt-3">Nadhifa Aqilla Husna</p>
                    <p>Teknik Fisika ITS 2018</p>
                    <a href="" class="mt-3 mb-5 more-btn">More</a>
                </div>
                <div class="col-md-5 col-lg-4 col-sm-2">
                    <img src="/img/Big-Event/mbak-sarah.png" alt="">
                    <p class="mt-3">Sarah Alya Aziz</p>
                    <p>Teknik Fisika ITS 2017</p>
                    <a href="" class="mt-3 more-btn">More</a>
                </div>
            </div>
        </div>
        <div class="container mt-5 lihat-poster">
            <p class="text-center mt-5 justify-content-center align-items-center">Sabtu, 27 November 2021</p>
            <p class="text-center justify-content-center align-items-center">08.45 WIB - selesai</p>
            <p class="text-center justify-content-center align-items-center">Zoom Meeting</p>
            <div class="row justify-content-center text-center mt-3">
                <div class="col-md-5 col-lg-4 col-sm-2 mb-5">
                    <a href="" class="lihat-poster-btn text-center justify-content-center align-items-center mt-2">Lihat Poster</a>
                </div>
            </div>
        </div>
    </div>
    <div id="collapseTwo" class="container tour-with-epw accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <h1 class="text-center mt-4 justify-content-center align-items-center">Tour With EPW</h1>
        <h3 class="text-center mt-3 mb-5 justify-content-center align-items-center">Powered by <img class="Bank-mandiri-dua ms-1" src="/img/Bank-mandiri.png" alt="Bank-mandiri"></h3>
        <div class="container apa-sih">
            <h1 class="text-start mt-5">Apa sih Tour With EPW Powered by Mandiri?</h1>
        </div>
        <div class="container mt-3 deskripsi-tour">
            <p>Tour With EPW Powered by Mandiri adalah sebuah event penutup dari EPW tahun 2022 yang terdiri dari talkshow dengan speaker yang menarik serta guest star yang akan menemani kalian di acara kami.</p>
        </div>
        <div class="container mt-5 memories">
            <h1 class="text-end mt-5 fs-2">Apa sih Tour With EPW Powered by Mandiri?</h1>
        </div>
        <div class="container mb-5 mt-3 foto-memories">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img src="/img/Big-Event/Dokum 2021-1.png" class="d-block mb-5 my-auto mx-auto dokum-satu" alt="dokum-satu">
                </div>
                <div class="col-md-4">
                    <img src="/img/Big-Event/Dokum 2021-2.png" class="d-block mb-5 mx-auto my-auto dokum-dua" alt="dokum-dua">
                </div>
                <div class="col-md-4">
                    <img src="/img/Big-Event/Dokum 2021-3.png" class="d-block mx-auto my-auto dokum-tiga" alt="dokum-tiga">
                </div>
            </div>
        </div>
        <div class="container ada-apa">
            <h1 class="text-center mt-5 fs-2">Tahun 2022 ini ada apa aja sih??</h1>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <img src="/img/Big-Event/mystery-guest.png" class="d-block mx-auto mb-5" alt="dokum-tiga">
                </div>
                <div class="col-md-4">
                    <img src="/img/Big-Event/mystery-guest.png" class="d-block mx-auto mb-5" alt="dokum-tiga">
                </div>
                <div class="col-md-4">
                    <img src="/img/Big-Event/mystery-guest.png" class="d-block mx-auto" alt="dokum-tiga">
                </div>
            </div>
            <div class="text-center">
                <a href="" class="fw-bolder mt-5 mb-5 Daftar-dua-btn">Daftar Yuk!</a>
              </div>
        </div>
    </div>
    </div>
</section>
@endsection