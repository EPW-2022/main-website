<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="regis-be.css">
    <title>Tour With EPW</title>
</head>

<body>
    <div class="container heading">
        <div class="header-1 mt-5 mb-4">
            <p>Tour With EPW</p>
        </div>
        <div class="header-2">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-2 text">
                        <p>Powered by</p>
                    </div>
                    <div class="col-lg-2 gambar"><img src="img/mandiri.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container register mb-5">
        <div class="register-background text-center">
            <div class="text">
                <p>[Please Register Yourself Here]</p>
                <p>Silahkan menjawab pertanyaan berikut dengan benar dan jelas ya!</p>
            </div>
        </div>
    </div>
    <div class="container form mb-4">
        <div class="row mb-3">
            <div class="col-md-12 d-flex">
                <b>1. Identitas Diri</b><span class="line flex-grow-1"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email*</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nohp" class="form-label">Nomor Telepon/ID LINE*</label>
                    <input type="text" class="form-control" name="nohp" id="nohp" placeholder="Nomor Telepon/ID LINE" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="namalengkap" class="form-label">Nama Lengkap*</label>
                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pendidikan" class="form-label">Sekarang lagi pendidikan di mana?*</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pendidikan</option>
                        <option value="1">SMA Sederajat</option>
                        <option value="2">Kuliah/Umum</option>
                      </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container form mb-4">
        <div class="row mb-3">
            <div class="col-md-12 d-flex">
                <b>2. SMA Sederajat</b><span class="line flex-grow-1"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="sekolah" class="form-label">Asal Sekolah*</label>
                    <input type="text" class="form-control" name="sekolah" id="sekolah" placeholder="Asal Sekolah">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="rencana" class="form-label">Apakah sudah ada rencana ingin 
                        berkuliah dimana?*</label>
                    <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="1">Iya</option>
                            <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas*</label>
                    <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jika iya, apakah boleh disebutkan 
                        dimana dan jurusan apa?*</label>
                    <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Nama Kampus dan Jurusan" required>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="asal" class="form-label">Asal kota/kabupaten*</label>
                    <input type="text" class="form-control" name="asal" id="asal" placeholder="Asal kota/kabupaten">
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <!-- 2nd Section -->
        <div class="row mb-3">
            <div class="col-md-12 d-flex">
                <span class="line flex-grow-1"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="question1" class="form-label">Tahu informasi mengenai Tour With EPW
                        Powered by Mandiri darimana?*</label>
                    <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="1">Sosial Media</option>
                            <option value="2">Teman</option>
                            <option value="3">Keluarga</option>
                            <option value="4">Lainnya   </option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="question2" class="form-label">Kenapa tertarik untuk ikut Tour With
                        EPW Powered by Mandiri?*</label>
                    <input type="text" class="form-control" name="question2" id="question2" placeholder="Alasan" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="question3" class="form-label">Jika ada pertanyaan yang ingin ditanya untuk pembicara silahkan isi disini ya!</label>
                    <input type="text" class="form-control" name="question3" id="question3" placeholder="Pertanyaan">
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <div class="container form mb-4">
        <div class="row mb-3">
            <div class="col-md-12 d-flex">
                <b>2. Kuliah/Umum</b><span class="line flex-grow-1"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="univ" class="form-label">Asal Universitas*<br>(Belum kuliah/kerja bisa diisi “-”)</label>
                    <input type="text" class="form-control" name="univ" id="univ" placeholder="Asal Universitas" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan*<br>(Belum kuliah/kerja bisa diisi “-”)</label>
                    <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" required>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="asal" class="form-label">Asal kota/kabupaten*</label>
                    <input type="text" class="form-control" name="asal" id="asal" placeholder="Asal" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="rencana" class="form-label">Apakah boleh tolong diceritakan rencana kedepannya selama kuliah?*</label>
                    <input type="text" class="form-control" name="rencana" id="rencana" placeholder="Nama Kampus dan Jurusan" required>
                </div>
            </div>
        </div>
        <!-- 2nd Section -->
        <div class="row mb-3">
            <div class="col-md-12 d-flex">
                <span class="line flex-grow-1"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="question1" class="form-label">Tahu informasi mengenai Tour With EPW
                        Powered by Mandiri darimana?*</label>
                    <input type="text" class="form-control" name="question1" id="question1" placeholder="Pilih" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="question2" class="form-label">Kenapa tertarik untuk ikut Tour With
                        EPW Powered by Mandiri?*</label>
                    <input type="text" class="form-control" name="question2" id="question2" placeholder="Alasan" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="question3" class="form-label">Jika ada pertanyaan yang ingin ditanya untuk pembicara silahkan isi disini ya!</label>
                    <input type="text" class="form-control" name="question3" id="question3" placeholder="Pertanyaan">
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <div class="container register-2 mb-5">
        <div class="register-2-background text-center">
            <div class="text">
                <p>Sebagai syarat pendaftaran silahkan input bukti syarat pendaftaran </p>
                <p>berupa screenshot post twibbon di story Instagram tanpa di private ya,</p>
                <p class="mb-3">jangan lupa tag @epw.its @tekfis_its dan @bankmandiri</p>
                <a href="https://drive.google.com/drive/folders/1C7oGMUXAOlQVRKtfy5JGczMr46m6Wvlw?usp=sharing ">DOWNLOAD TWIBBON</a>
            </div>
        </div>
    </div>
    <div class="container form mb-4">
        <div class="row mb-3">
            <div class="col-md-12 d-flex">
                <b>3. Bukti Syarat Pendaftaran</b><span class="line flex-grow-1"></span>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Username Instagram*</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Username" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="uploadtwib" class="form-label">Upload Twibbon Story*</label>
                    <input type="file" class="form-control" name="uploadtwib" id="uploadtwib" placeholder="Choose File" required>
                </div>
            </div>
        </div>
        <div class="success">
            <p>“Semoga sukses selalu ya, sampai ketemu di Tour With EPW</p>
            <p>Powered by Mandiri”</p>
        </div>
    </div>
    <div class="container submit">
        <button type="submit" class="btn">
        <b>Daftar</b> 
      </button>
    </div>
    <div class="container submit">
        <button type="submit" class="btn">
        <b>Lanjut</b> 
      </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>