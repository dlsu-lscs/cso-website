<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color1')->default('');
            $table->string('color2')->default('');
            $table->string('color3')->default('');
            $table->string('color4')->default('');
            $table->mediumText('aboutus');
            $table->mediumText('vision');
            $table->mediumText('mission');
            $table->string('weburl')->default('');
            $table->string('email')->default('');
            $table->string('fburl')->default('');
            $table->string('twitterurl')->default('');
        });
        Schema::table('clientinfos', function($table) {
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedInteger('cluster_id');
            $table->foreign('cluster_id')->references('id')->on('clusters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientinfos');
    }
}
