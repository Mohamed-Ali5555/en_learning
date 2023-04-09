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
        Schema::create('more_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');    
            $table->string('image');    
             $table->unsignedBigInteger('categoryVideo_id')->nullable();  // sub category or child
            $table->foreign('categoryVideo_id')->references('id')->on('category_videos')->onDelete('cascade');
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
        Schema::dropIfExists('more_videos');
    }
};
