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




    <div class="container submit">
        <button type="submit" class="btn">
        <b>Lanjut</b> 
      </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>