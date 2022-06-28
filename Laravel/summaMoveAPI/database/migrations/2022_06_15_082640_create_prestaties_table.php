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
        Schema::create('prestaties', function (Blueprint $table) {
            $table->id();
            $table->date('datum');
            $table->time('startTijd');
            $table->time('eindTijd');
            $table->integer('aantal');
            $table->integer('oefening_Id')->default('1');
            $table->integer('user_Id')->default('1');
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
        Schema::dropIfExists('prestaties');
    }
};
