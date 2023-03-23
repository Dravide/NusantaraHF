<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('resellers', function (Blueprint $table) {
            $table->id();

            $table->string('wa');
            $table->string('kode_akses');
            $table->string('nama');
            $table->string('alamat');



            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resellers');
    }
};
