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
          style="height: 130px"
        />
      </div>
        <h2 class="text-center">FORM PERMOHONAN ELEKTROKNIK</h2>
        <div class="d-flex justify-content-center my-2">
        <h3 class="text-center">IZIN MELIPUT DI PENGADILAN NEGERI STABAT KELAS I B</h3>
      </div>
        <h3 class="text-center">APAKAH DATA YANG ANDA INPUT SUDAH BENAR?</h3>
        <form method="POST" action="/verifikasi">
        {{csrf_field()}}

        @if($errors->has('jurnalis_media_cetak'))
        <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
          {{$errors->first('jurnalis_media_cetak')}}
        </div>
        @endif
        @if($errors->has('organisasi_instansi'))
        <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
          {{$errors->first('organisasi_instansi')}}
        </div>
        @endif

        <!-- Nama -->
        <div class="row mb-2">
          <label for="Nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-9 mt-2">
            <p><strong> {{ $data['nama'] }} </strong></p>
          </div>
        </div>

        <!-- No HP -->
        <div class="row mb-2">
          <label for="nomorHandphone" class="col-sm-3 col-form-label"
            >No. HP</label>
            <div class="col-sm-9 mt-2">
              <p><strong> {{ $data['no_hp'] }} </strong></p>
            </div>
        </div>

        <!-- Jenis Perkara -->
        <div class="row mb-2">
          <label for="jenisPerkara" class="col-sm-3 col-form-label"
            >Jenis Perkara</label
          >
          <div class="col-sm-9 mt-2">
            <p><strong> {{ strtoupper($data['jenis_perkara']) }} </strong></p>
          </div>
        </div>

        <!-- Nomor Perkara -->
        <div class="row mb-2">
          <label for="nomorPerkara" class="col-sm-3 col-form-label"
            >No. Perkara</label
          >
          <div class="col-sm-9 mt-2">
            <p><strong> {{ $data['nomor_perkara'] }} </strong></p>
          </div>
        </div>

        <!-- Atas Nama -->
        <div class="row mb-2">
          <label for="atasNama" class="col-sm-3 col-form-label"
            >Atas Nama</label
          >
          <div class="col-sm-9 mt-2">
            <p><strong> {{ $data['nama_berperkara'] }} </strong></p>
          </div>
        </div>

        <!-- Tipe Peliput -->
        <div class="row mb-2">
          <label for="tipePeliput" class="col-sm-3 col-form-label"
            >Tipe Peliput</label
          >
          <div class="col-sm-9 mt-2">
            <p><strong> {{ strtoupper($data['tipe_peliput']) }} </strong></p>
          </div>
        </div>

        @if($data['tipe_peliput'] == 'individu')
        <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
          KETERANGAN : HARAP MELAMPIRKAN FOTOKOPI KARTU TANDA PENDUDUK (KTP) saat penyerahan surat permohonan
        </div>
        @endif

        @if($data['tipe_peliput'] == 'jurnalis')
        <div class="row mb-2">
          <label for="tipePeliput" class="col-sm-3 col-form-label"
            >Jurnalis Media/Cetak</label
          >
          <div class="col-sm-9 mt-2">
            <p><strong> {{ $data['jurnalis_media_cetak'] }} </strong></p>
          </div>
        </div>
        @endif

        @if($data['tipe_peliput'] == 'lainnya')
        <div class="row mb-2">
          <label for="tipePeliput" class="col-sm-3 col-form-label"
            >Organisasi/Instansi</label
          >
          <div class="col-sm-9 mt-2">
            <p><strong> {{ $data['organisasi_instansi'] }} </strong></p>
          </div>
        </div>
        <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
          KETERANGAN : HARAP MELAMPIRKAN FOTOKOPI KARTU KEANGGOTAAN ORGANISASI/INSTANSI saat penyerahan surat permohonan
        </div>
        @endif
        <input type="hidden" id="nama" name="nama" value="{{$data['nama']}}">
        <input type="hidden" id="no_hp" name="no_hp" value="{{$data['no_hp']}}">
        <input type="hidden" id="jenis_perkara" name="jenis_perkara" value="{{$data['jenis_perkara']}}">
        <input type="hidden" id="nomor_perkara" name="nomor_perkara" value="{{$data['nomor_perkara']}}">
        <input type="hidden" id="nama_berperkara" name="nama_berperkara" value="{{$data['nama_berperkara']}}">
        <input type="hidden" id="tipe_peliput" name="tipe_peliput" value="{{$data['tipe_peliput']}}">
        <input type="hidden" id="jurnalis_media_cetak" name="jurnalis_media_cetak" value="{{$data['jurnalis_media_cetak']}}">
        <input type="hidden" id="organisasi_instansi" name="organisasi_instansi" value="{{$data['organisasi_instansi']}}">

        <div class="row mt-3 mb-0">
          <div class="col-sm-5 offset-sm-4">
            <button type="submit" name="action" value="edit" class="btn btn-warning">
              EDIT DATA
            </button>
            <button type="submit" name="action" value="print" class="btn btn-primary">
              Sudah Benar, Lanjut Cetak
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
