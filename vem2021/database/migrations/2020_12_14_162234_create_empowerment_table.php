<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpowermentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empowerment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user');
            $table->bigInteger('messageid')->unsigned();
            $table->foreign('messageid')->references('id')->on('message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empowerment');
    }
}
