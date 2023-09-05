<!DOCTYPE html>
<html lang="en">
  <head>
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
  <style>
	.tab {
		display: inline-block;
		margin-left: 40px;
	}
  .tabs {
		display: inline-block;
		margin-left: 20px;
	}
	</style>
  <body>
    <div
      class="container-fluid p-3">
      <div class="d-flex justify-content-center">
        <img
          src="https://i.ibb.co/51C5kb2/KOP.png"
          alt="gambar"
          style="height: 300px"
        />
	</div>
        @if($data['tipe_peliput'] == "individu")
        <h2 class="text-center">SURAT PERMOHONAN IZIN UNTUK MELIPUT</h2>
        @endif

        @if($data['tipe_peliput'] == "jurnalis")
        <h2 class="text-center">SURAT PERMOHONAN IZIN UNTUK MELIPUT</h2>
        <h2 class="text-center">JURNALIS</h2>
        @endif

        @if($data['tipe_peliput'] == "lainnya")
        <h2 class="text-center">SURAT PERMOHONAN IZIN UNTUK MELIPUT</h2>
        <h2 class="text-center">ORGANISASI/INSTANSI</h2>
        @endif


		<h5 style="text-align:right; margin-right: 440px;  margin-top: 2em">Stabat, {{date("j F Y")}}</h5>

		<h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Saya yang bertandatangan dibawah ini :</h5>
		<h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Nama   <span class="tab"></span><span class="tab"></span><span class="tab"></span><span class="tab"></span><span class="tab"></span><span class="tabs"></span>: {{$data['nama']}}</h5>
    @if($data['tipe_peliput'] == "jurnalis")
    <h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Jurnalis Media/Cetak <span class="tab"></span><span class="tab"></span>: {{$data['jurnalis_media_cetak']}}</h5>
    @endif

    @if($data['tipe_peliput'] == "lainnya")
    <h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Organisasi/Instansi <span class="tab"></span><span class="tabs"></span><span class="tab"></span>: {{$data['organisasi_instansi']}}</h5>
    @endif
    
    @if($data['jenis_perkara'] == "perdata")
		<h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Dengan ini memohon untuk dapat meliput perkara perdata :</h5>
    @endif

    @if($data['jenis_perkara'] == "pidana")
		<h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Dengan ini memohon untuk dapat meliput perkara pidana :</h5>
    @endif

		<h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Nomor <span class="tab"></span><span class="tab"></span>: {{$data['nomor_perkara']}}</h5>
		<h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Atas Nama <span class="tab"></span>: {{$data['nama_berperkara']}}</h5>
		<h5 style="text-align:left; margin-left: 500px;  margin-top: 2em">Demikianlah permohonan ini saya perbuat untuk dapat dipertanggungjawabkan di kemudian hari.</h5>
		<h5 style="text-align:right; margin-right: 440px;  margin-top: 3em">Disetujui/Ditolak</h5>
		<h5 style="text-align:right; margin-right: 440px;  margin-top: 3em">Stabat, {{ date("j F Y") }}</h5>
		
		<div class="row">
				<div class="col-md-6">
					<h5 style="text-align:left; margin-left: 650px;  margin-top: 3em">Pemohon</h5>
					<h5 style="text-align:left; margin-left: 600px;  margin-top: 5em">( {{$data['nama']}} )</h5>
				</div>
				<div class="col-md-6">
					<h5 style="text-align:right; margin-right: 500px;  margin-top: 3em">Ketua Majelis</h5>
					<h5 style="text-align:right; margin-right: 450px;  margin-top: 5em">(<span class="tab"></span><span class="tab"><span class="tab"></span><span class="tab"></span><span class="tab"></span>)</h5>
				</div>
			</div>
	<div class="d-flex justify-content-center">
        <img
          src="https://i.ibb.co/1KbQC6f/tembusan.png"
          alt="gambar"
          style="height: 270px"
        />
	</div>

    </div>
  </body>
</html>
