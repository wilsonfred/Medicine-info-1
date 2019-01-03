<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Name');
            $table->string('ImageUrl');
            $table->longtext('Desc');
            $table->string('Brand');
            $table->string('Type');
            $table->string('AvgPrice');
            $table->longtext('General');
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
        Schema::dropIfExists('Medic');
    }
}
