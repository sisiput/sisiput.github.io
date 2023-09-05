<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript">
      secs = 3;
      timer = setInterval(function () {
          var element = document.getElementById("status");
          element.innerHTML = "<h4>Surat akan terdownload dalam <b>"+secs+"</b> detik</h4>";
          if(secs < 1){
              clearInterval(timer);
              document.getElementById('print').submit();
          }
          secs--;
      }, 1000)
    </script>

<div id="status"></div>
<script type="text/javascript">countDown(3,"status");</script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>SISIPUTPNSTB</title>
  </head>
  <body
    style="
      background-image: url('https://i.ibb.co/QMsbkJS/IMG-1619.jpg');
      background-size: 1600px;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      height: 100vh;
    "
  >
    <div
      class="container-fluid p-3"
      style="
        max-width: 70%;
        background-color: white;
        opacity: 90%;
        height: 180vh;
      "
    >
      <div class="d-flex justify-content-center my-4">
        <img
          src="https://i.ibb.co/GsXtXhy/logooo-removebg.png"
          alt="gambar"
          style="height: 150px"
        />
      </div>
        <h2 class="text-center">FORM PERMOHONAN ELEKTROKNIK</h2>
        <div class="d-flex justify-content-center my-2">
        <h3 class="text-center">IZIN MELIPUT DI PENGADILAN NEGERI STABAT KELAS I B</h3>
      </div>
      <form id="print" method="POST" action="/print">
        {{csrf_field()}}

        <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
          <h4 class="alert-heading">Setelah mengisi SISIPUT, formulir sudah terdownload secara otomatis. Anda dapat mengirim formulir ke WhatsApp SI MAMI-0895 2181 2356 dan silahkan datang ke PTSP Pengadilan Negeri Stabat Terimakasih</h4>
        </div>

        <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
          <h4 class="alert-heading">Surat permohonan Anda akan terdownload beberapa saat lagi</h4>
          </div>
        
        <input type="hidden" id="nama" name="nama" value="{{$nama}}">
        <input type="hidden" id="no_hp" name="no_hp" value="{{$no_hp}}">
        <input type="hidden" id="jenis_perkara" name="jenis_perkara" value="{{$jenis_perkara}}">
        <input type="hidden" id="nomor_perkara" name="nomor_perkara" value="{{$nomor_perkara}}">
        <input type="hidden" id="nama_berperkara" name="nama_berperkara" value="{{$nama_berperkara}}">
        <input type="hidden" id="tipe_peliput" name="tipe_peliput" value="{{$tipe_peliput}}">
        <input type="hidden" id="jurnalis_media_cetak" name="jurnalis_media_cetak" value="{{$jurnalis_media_cetak}}">
        <input type="hidden" id="organisasi_instansi" name="organisasi_instansi" value="{{$organisasi_instansi}}">

        <div class="row mt-3 mb-0">
          <div class="col-sm-5 offset-sm-5">
          </div>
        </div>
      </form>
      
    </div>
  </body>
</html>
