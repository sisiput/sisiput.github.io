<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran');
            $table->string('nama');
            $table->string('hp');
            $table->string('jenis_perkara');
            $table->string('no_perkara');
            $table->string('nama_berperkara');
            $table->string('tipe_peliput');
            $table->string('jurnalis_media_cetak')->nullable();
            $table->string('lembaga')->nullable();
            $table->string('sudah_cetak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonan');
    }
}
