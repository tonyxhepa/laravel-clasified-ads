<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('featured_image');
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('sub_category_id')->nullable();
            $table->unsignedInteger('child_category_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('price');
            $table->string('price_negotiable');
            $table->string('condition');
            $table->string('location');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('state_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->string('phone_number');
            $table->boolean('is_published')->default(0);
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
        Schema::dropIfExists('listings');
    }
}
