<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsSerialsLangContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs_serials_langContent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('programs_serials_id');
            $table->string('lang');
            $table->string('name');
            $table->text('about_of');
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
        Schema::dropIfExists('programs_serials_langContent');
    }
}
