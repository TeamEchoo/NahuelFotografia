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
            $table->string('filename');
            $table->string('link')->nullable();
            $table->boolean('cover_image')->default(false)->nullable();
            $table->unsignedBigInteger('album_id');
            $table->timestamps();

            $table->foreign('album_id')->references('id')->on('albums');
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
