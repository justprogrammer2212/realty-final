<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255)->nullable();
            $table->integer('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('status')->nullable();
            $table->text('description')->nullable();
            $table->integer('views')->default(0);
            $table->string('location')->nullable();
            $table->string('street')->nullable();
            $table->string('square')->nullable();
            $table->string('garage')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('bedrooms')->nullable();
            $table->integer('age_build')->nullable();
            $table->text('images')->nullable();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('realtor_id')->nullable()->index();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
