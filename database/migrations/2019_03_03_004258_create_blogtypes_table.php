<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
        });
        // Insert some stuff
        DB::table('blogtypes')->insert(array('type' => 'draft'));
        DB::table('blogtypes')->insert(array('type' => 'published'));
        DB::table('blogtypes')->insert(array('type' => 'trash'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogtypes');
    }
}
