<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClustersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clusters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('meaning');
        });
        // Insert some stuff
        DB::table('clusters')->insert(array('name' => 'ASO'));
        DB::table('clusters')->insert(array('name' => 'ASPIRE'));
        DB::table('clusters')->insert(array('name' => 'CAP 12'));
        DB::table('clusters')->insert(array('name' => 'ENGAGE'));
        DB::table('clusters')->insert(array('name' => 'PROBE'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clusters');
    }
}
