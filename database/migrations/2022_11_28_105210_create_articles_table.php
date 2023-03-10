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
        Scheema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId(' ');
            $table->string('tittle');
            $table->string('abstract');
            $table->string('description');
            $table->string('author');
            $table->integer('views')->default(0);
            $table->date('articl_date');
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
        Schema::dropIfExists('articles');
    }
};
