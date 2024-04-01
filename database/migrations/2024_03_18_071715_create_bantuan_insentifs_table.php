<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantuan_insentifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nomor');
            $table->string('aktivitas');
            $table->string('nama_kegiatan');
            $table->string('tempat');
            $table->string('komponent');
            $table->string('unit');
            $table->integer('kuantitas_mhs');
            $table->integer('satuan_biaya');
            $table->integer('matching_fund');
            $table->integer('mitra_in_cash');
            $table->integer('mitra_in_kind');
            $table->string('perguruan_tinggi');
            $table->integer('total');
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
        Schema::dropIfExists('bantuan_insentifs');
    }
};
