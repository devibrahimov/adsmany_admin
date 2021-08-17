<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsSerialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs_serials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('channel_id');
            $table->string('image');
            $table->json('broadcasting');
            $table->string('rating');
            $table->enum('type',['program','serial','film']);
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
        Schema::dropIfExists('programs_serials');
    }
}
