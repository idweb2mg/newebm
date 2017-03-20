<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRLANGUETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRLANGUE', function(Blueprint $table){
        $table->engine = 'InnoDB';
        $table->increments('ID');
        $table->string('REFERENCELANGUE', 30);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      schema::drop('FRLANGUE');
    }
}

