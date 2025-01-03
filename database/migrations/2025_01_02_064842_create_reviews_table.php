<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->text('review');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
