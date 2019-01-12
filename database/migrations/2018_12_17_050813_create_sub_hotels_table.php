<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('user_id')->nullable();
            $table->string('image');
            $table->string('subname');
            $table->string('subimage');
            $table->string('discryption')->nullable();
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
        Schema::dropIfExists('sub_hotels');
    }
}
