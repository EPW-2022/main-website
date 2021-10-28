@extends("main.layouts.main")

@section("content")
<section id="laboratoire">
    <img src="/svg/labo-wire.svg" class="labo-wire-top" alt="labo-wire-top">
    <div class="container px-4 px-lg-0 pb-5">
        <h1 class="labo-title text-center py-4">Laboratorium Instrumentasi, Kontrol, dan Optimisasi</h1>
        <div class="row align-items-center">
            <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                <img src="/img/lab-logo/ico.png" class="labo-logo" alt="">
            </div>
            <div class="col-lg-8">
                <p class="labo-desc">Laboratorium instrumentasi, kontrol, dan optimisasi adalah laboratorium di departemen teknik fisika yang berfokus pada bidang instrumentasi dan pengembangannya meliputi manufacturing, desain, hingga aplikasi dari instrument dan control. Proses deteksi, observasi, pengukuran, dan akuisisi data dipelajaridalam berbagai bidang mulai dari industry hingga medis.</p>
            </div>
        </div>
        <h2 class="labo-section mt-5 mb-4">Bidang pengembangan</h2>
        <ol class="labo-list ps-4">
            <li>Mengembangkan rancang bangun instrumentasi, kalibrasi, pengukuran, pengendalian, dan safety untuk aplikasi di industri dan medis</li>
            <li>Mangembangkan teknologi jaringan untuk sistem deteksi, observasi, dan pengendalian.</li> 
            <li>Mengembangkan metode neural network, genetic algoritma, fuzzy logic, artificial intelligent</li> 
            <li>Mengembangkan rancang bangun instrumentasi kedokteran untuk aplikasi medis</li> 
        </ol>
        <h2 class="labo-section mt-5 mb-4">Penelitian</h2>
        <ol class="labo-list ps-4">
            <li>Utami, E & Purnomo, M & Rizki, R & Biyanto, Totok. (2020). Preliminary sandstone reservoir depth prediction with pre-processing data using principle component analysis (PCA) and partial least square (PLS) based on well logging.</li>
            <li>Purnomo, Leo & Biyanto, Totok. (2019). Neural network model for profile temperature of nickel kiln. AIP Conference Proceedings. 2088. 020015. 10.1063/1.5095267</li> 
        </ol>
        <h2 class="labo-section mt-5 mb-4">Penghargaan</h2>
        <ol class="labo-list ps-4">
            <li>1st winner paper competition and petroolympic case study competition oil and gas horizons XI at gubkin university, Russia.</li>
            <li>1st place (champion) plant design competition energy and environmental competition 2019 at university teknologi mara, Malaysia.</li> 
            <li>2nd (runner up) power plant design competition SPE UTM</li>
            <li>2nd RU paper competition (oil and gas festival 2018 malaysia)</li> 
            <li>3rd winner of international process control competition 2018 at institute teknologi sepuluh nopember (ITS)</li> 
        </ol>
        <div class="row align-items-center mt-5 labo-img">
            <div class="col-md-4 mb-4">
                <img src="/img/ico-jpg/ico-1.jpg" class="ico-1" alt="ico-1">
            </div>
            <div class="col-md-4 mb-4">
                <img src="/img/ico-jpg/ico-2.jpg" class="ico-1" alt="ico-1">
            </div>
            <div class="col-md-4 mb-4">
                <img src="/img/ico-jpg/ico-3.jpg" class="ico-1" alt="ico-1">
            </div>
        </div>
    </div>
    <img src="/svg/labo-wire.svg" class="labo-wire-bottom" alt="labo-wire-bottom">
</section>
@endsection