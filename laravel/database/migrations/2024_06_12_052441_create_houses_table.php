<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->integer('ownerId');
            $table->string('name');
            $table->string('category');
            $table->string('city');
            $table->string('address');
            $table->string('zipcode');
            $table->integer('personCapacity');
            $table->integer('rooms');
            $table->text('description');
            $table->float('price');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
