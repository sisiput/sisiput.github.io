<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
    <title>SISIPUTPNSTB</title>
  </head>

  <style> 
    span.small {
      font-size: smaller;
    }
    .tab {
		display: inline-block;
		margin-left: 40px;
    }
    .tabs {
      display: inline-block;
      margin-left: 20px;
    }
    .tabss {
      display: inline-block;
      margin-left: 15px;
    }
    .tabsss {
      display: inline-block;
      margin-left: 12px;
    }
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
  </style>


  <body>
    <div>
        <h4 class="text-center" style="text-align: center">SURAT PERMOHONAN IZIN UNTUK MELIPUT</h4>
        @if($tipe_peliput == "jurnalis")
        <h4 class="text-center" style="text-align: center">JURNALIS</h4>
        @endif

        @if($tipe_peliput == "lainnya")
        <h4 class="text-center" style="text-align: center">ORGANISASI/INSTANSI</h4>
        @endif

        <div class="row mb-3">
          <p style="text-align: right; margin-right: 70px"> Stabat, {{date("j F Y")}}</p>

          <p style="text-align: left; margin-left: 105px">Saya yang bertandatangan dibawah ini :</p>
          <p style="text-align: left; margin-left: 105px">Nama <span style="margin-left: 110px;">: {{$nama}}</p>

          @if($tipe_peliput == "jurnalis")
          <p style="text-align: left; margin-left: 105px">Jurnalis Media/Cetak <span style="margin-left: 10px;">: {{$jurnalis_media_cetak}}</p>
          @endif

          @if($tipe_peliput == "lainnya")
          <p style="text-align: left; margin-left: 105px">Organisasi/Instansi <span style="margin-left: 24px;">: {{$organisasi_instansi}}</p>
          @endif

          @if($jenis_perkara == "perdata")
          <p style="text-align: left; margin-left: 105px">Dengan ini memohon untuk dapat meliput perkara perdata :</p>
          @endif

          @if($jenis_perkara == "pidana")
          <p style="text-align: left; margin-left: 105px">Dengan ini memohon untuk dapat meliput perkara pidana :</p>
          @endif
          
          <p style="text-align: left; margin-left: 105px">Nomor <span style="margin-left: 102px;">: {{$nomor_perkara}}</p>
          <p style="text-align: left; margin-left: 105px">Atas Nama <span style="margin-left: 76px;">: {{$nama_berperkara}}</p>
          <p style="text-align: left; margin-left: 105px; margin-right: 30px">Demikianlah permohonan ini saya perbuat untuk dapat dipertanggungjawabkan di kemudian hari.</p>
          <p style="text-align: right; margin-right: 70px"> Disetujui/Ditolak</p>
          <p style="text-align: right; margin-right: 70px"> Stabat, {{date("j F Y")}}</p>
        </div>
        
        <div>
          <img
            src="https://i.ibb.co/NTRS8k5/ttd-tembusan.png"
            alt="gambar"
            style="width:700px; height: 280px;;margin:0px 20px"
          />
        </div>
        
        </div>
        </div>
      
    </div>
  </body>
</html>
