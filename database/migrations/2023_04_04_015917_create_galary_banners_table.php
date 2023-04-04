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
        Schema::create('galary_banners', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('galary_id')->nullable();  // sub category or child
            $table->foreign('galary_id')->references('id')->on('galaries')->onDelete('cascade');
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
        Schema::dropIfExists('galary_banners');
    }
};
