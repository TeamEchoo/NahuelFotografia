<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('epigraph')->nullable();
            $table->string('person')->nullable();
            $table->string('image_path')->nullable();
            $table->string('link')->nullable();
            $table->boolean('cover_image')->nullable()->default(false);

            $table->foreign('album_id')->references('id')->on('albums');
            $table->foreignId('album_id')->default(1);

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
        Schema::dropIfExists('photos');
    }
}
