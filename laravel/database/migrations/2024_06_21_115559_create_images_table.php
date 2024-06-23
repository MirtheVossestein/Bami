<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('houseId');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE images ADD image MEDIUMBLOB");
    }

    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};