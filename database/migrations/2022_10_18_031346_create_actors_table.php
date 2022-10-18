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
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('biography', 510);
            $table->double('popularity');
            $table->string('gender');
            $table->date('dob');
            $table->string('birthplace');
            $table->string('image_source');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
    }
};
