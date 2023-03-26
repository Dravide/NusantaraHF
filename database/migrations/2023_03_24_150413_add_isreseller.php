<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('resellers', function (Blueprint $table) {
            $table->enum('isReseller', [1, 0]);
        });
    }

    public function down(): void
    {
        Schema::table('resellers', function (Blueprint $table) {
            //
        });
    }
};
