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
          style="height: 150px"
        />
      </div>
        <h2 class="text-center">FORM PERMOHONAN ELEKTROKNIK</h2>
        <div class="d-flex justify-content-center my-2">
        <h3 class="text-center">IZIN MELIPUT DI PENGADILAN NEGERI STABAT KELAS I B</h3>
      </div>
      <form method="POST" action="/">
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
        <div class="row mb-3">
          <label for="Nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-9">
            <input name="nama"
              type="text"
              class="form-control"
              id="Nama"
              placeholder="Masukkan Nama"
              required
              value="{{$data['nama']}}"
            >
            {{-- <div class="form-text" style="color: red">-- Error message --</div> --}}
          </div>
        </div>

        <!-- No HP -->
        <div class="row mb-3">
          <label for="nomorHandphone" class="col-sm-3 col-form-label"
            >No. HP</label>
          <div class="col-sm-9">
            <input name="no_hp"
              type="number"
              class="form-control"
              id="nomorHandphone"
              placeholder="Masukkan No HP pemohon izin"
              required
              value="{{$data['no_hp']}}"
            />
            <!-- <div class="form-text" style="color: red">-- Error message --</div> -->
          </div>
        </div>

        <!-- Jenis Perkara -->
        <div class="row mb-3">
          <label for="jenisPerkara" class="col-sm-3 col-form-label"
            >Jenis Perkara</label
          >
          <div class="col-sm-9">
            <select name="jenis_perkara" class="form-select" id="jenisPerkara" required>
              <option value="">Pilih Jenis Perkara</option>
              <option value="perdata">PERDATA</option>
              <option value="pidana">PIDANA</option>
            </select>
            <!-- <div class="form-text" style="color: red">-- Error message --</div> -->
          </div>
        </div>

        <!-- Nomor Perkara -->
        <div class="row mb-3">
          <label for="nomorPerkara" class="col-sm-3 col-form-label"
            >No. Perkara</label
          >
          <div class="col-sm-9">
            <input
              name="nomor_perkara" type="text"
              class="form-control"
              id="nomorPerkara"
              placeholder="Nomor Perkara"
              required
              value="{{$data['nomor_perkara']}}"
            />
            <!-- <div class="form-text" style="color: red">-- Error message --</div> -->
          </div>
        </div>

        <!-- Atas Nama -->
        <div class="row mb-3">
          <label for="atasNama" class="col-sm-3 col-form-label"
            >Atas Nama</label
          >
          <div class="col-sm-9">
            <input name="nama_berperkara"
              type="text"
              class="form-control"
              id="atasNama"
              placeholder="Masukkan Nama yang Berperkara"
              required
              value="{{$data['nama_berperkara']}}"
            />
            <!-- <div class="form-text" style="color: red">-- Error message --</div> -->
          </div>
        </div>

        <!-- Tipe Peliput -->
        <div class="row mb-3">
          <label for="tipePeliput" class="col-sm-3 col-form-label"
            >Tipe Peliput</label
          >
          <div class="col-sm-9">
            <select name="tipe_peliput" class="form-select" id="tipePeliput" required>
              <option value="">Pilih Tipe Peliput</option>
              <option value="individu">INDIVIDU</option>
              <option value="jurnalis">JURNALIS</option>
              <option value="lainnya">LAINNYA</option>
            </select>
            <!-- <div class="form-text" style="color: red">-- Error message --</div> -->
          </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
  
  
        $(document).ready(function(){
            $("#tipePeliput").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".message").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".message").hide();
                    }
                });
            }).change();
        });
        </script>

              <div class="individu message">
                <div class="form-group">
                  <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
                    KETERANGAN : HARAP MELAMPIRKAN FOTOKOPI KARTU TANDA PENDUDUK (KTP) saat penyerahan surat permohonan
                  </div>
                </div>
            </div>
  
              <div class="jurnalis message">
                <div class="form-group">
  
                  <div class="row mb-3">
                    <label for="jurnalismediacetak" class="col-sm-3 col-form-label"
                      >Jurnalis Media/Cetak</label>
                    <div class="col-sm-9">
                      <input
                        name="jurnalis_media_cetak"
                        type="text"
                        class="form-control"
                        id="jurnalismediacetak"
                        placeholder="Masukkan Nama Jurnalis Media/Cetak"
                      />
                      <!-- <div class="form-text" style="color: red">-- Error message --</div> -->
                    </div>
                  </div>
                  

                  <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
                    KETERANGAN : HARAP MELAMPIRKAN FOTOKOPI KARTU PERS saat penyerahan surat permohonan
                  </div>
                </div>
            </div>

            <div class="lainnya message">
              <div class="form-group">

                <div class="row mb-3">
                  <label for="lainnya" class="col-sm-3 col-form-label"
                    >Organisasi/Instansi</label>
                  <div class="col-sm-9">
                    <input
                      name="organisasi_instansi"
                      type="text"
                      class="form-control"
                      id="lainnya"
                      placeholder="Masukkan Nama Organisasi/Instansi"
                    />
                    <!-- <div class="form-text" style="color: red">-- Error message --</div> -->
                  </div>
                </div>
                

                <div class="alert alert-primary d-flex justify-content-center" role="alert" style="color:red">
                  KETERANGAN : HARAP MELAMPIRKAN FOTOKOPI KARTU KEANGGOTAAN ORGANISASI/INSTANSI saat penyerahan surat permohonan
                </div>
              </div>
          </div>


        <div class="row mt-3 mb-0">
          <div class="col-sm-5 offset-sm-5">
            <button type="submit" class="btn btn-danger">
              AJUKAN IZIN MELIPUT
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
