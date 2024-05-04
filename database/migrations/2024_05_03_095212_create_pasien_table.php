<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Nama');
            $table->text('NIK');
            $table->text('Nomor_BPJS');
            $table->text('Jenis_Kelamin');
            $table->text('No_Telepon');
            $table->longText('Alamat');
            $table->dateTime('Tanggal_Lahir');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('pasien')  ;
    }
};
