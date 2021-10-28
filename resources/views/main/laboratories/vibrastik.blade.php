@extends("main.layouts.main")

@section("content")
<section id="laboratoire">
    <img src="/svg/labo-wire.svg" class="labo-wire-top" alt="labo-wire-top">
    <div class="container px-4 px-lg-0 pb-5">
        <h1 class="labo-title text-center py-4">Laboratorium Vibrastik dan Akustik</h1>
        <div class="row align-items-center">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="/img/lab-logo/vibrastik.png" class="labo-logo" alt="">
            </div>
            <div class="col-lg-8">
                <p class="labo-desc">Laboratorium Vibrasi dan Akustik, Departemen Teknik Fisika, Institut Teknologi Sepuluh Nopember mempelajari fenomena suara dan getaran, termasuk pemrosesan pendengaran pada manusia dan penerapannya, seperti speech synthesis, noise mapping, analisa getaran, dan banyak lagi untuk industri dan kemanusiaan. Selain melakukan penelitian, laboratorium Vibrastic juga melayani konsultasi di bidang Acoustics dan getaran termasuk akustik ruangan, analisis getaran, sintesis ucapan dan banyak lainnya. Sehingga Laboratorium Vibrastic teknik fisika mampu bersaing dengan lembaga pendidikan dan konsultan lain yang lebih besar dalam hal menggaet masyarakat untuk berkonsultasi tentang masalah tersebut. Dimana menjadikan semua mahasiwa mempunyai kompetensi. Laboratorium Vibrastic bersertifikat LBE (Lab Based Education) oleh JICA melalui ITS – Preditc2 JICA Project.</p>
            </div>
        </div>
        <h2 class="labo-section mt-5 mb-4">Bidang pengembangan</h2>
        <ol class="labo-list ps-4">
            <li>Signal and Speech Processing</li>
            <li>Underwater acoustics</li> 
            <li>Speech Recognition</li> 
            <li>Binaural Hearing</li> 
            <li>Choclear Implant</li> 
            <li>Architechtural Acoustics</li>
            <li>Vibration</li> 
        </ol>
        <h2 class="labo-section mt-5 mb-4">Penelitian</h2>
        <ol class="labo-list ps-4">
            <li>Monitoring pasien MDR-TB menggunakan Audiometri Three-Forced Choice.</li>
            <li>Pengembangan aplikasi alat bantu dengan berbasis android untuk smartphone dengan dua microphone internal.</li> 
            <li>Rancang bangun Muffler sebagai upaya mitigasi kebisingan suara pada genset.</li> 
            <li>Sintesis suara ekspresif bahasa indonesia.</li> 
            <li>Rancang bangun 3D printed stethoscope pada android smartphone case.</li>
            <li>Identifikasi biometrik memakai suara ketukan gigi dengan fitur Mel Frequency Cepstral Coefficient (MFCC).</li> 
            <li>Model tuning pada Mock-Up pesawat dengan metode direct dan parametric untuk prediksi flutter.</li> 
            <li>Synthetic Aperture Sonar.</li>  
        </ol>
    </div>
    <img src="/svg/labo-wire.svg" class="labo-wire-bottom" alt="labo-wire-bottom">
</section>
@endsection