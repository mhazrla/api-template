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
        Schema::create('pers', function (Blueprint $table) {
            $table->id();
            $table->string('nrp')->require();
            $table->string('nama')->require();
            $table->string('tmp_lahir')->require();
            $table->date('tgl_lahir')->require();
            $table->string('alamat')->nullable();
            $table->text('foto')->nullable();
            $table->foreignId('title_id')->constrained('titles');
            $table->foreignId('status_id')->constrained('status');

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
        Schema::dropIfExists('pers');
    }
};
