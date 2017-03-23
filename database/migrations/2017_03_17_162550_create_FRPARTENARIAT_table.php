<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRPARTENARIATTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRPARTENARIAT', function(Blueprint $table){
         $table->engine = 'InnoDB';
       $table->increments('id');
       $table->enum('TYPEPARTENARIAT', array('1','2','3'));
       $table->text('CONTENUPARTENARIAT');
       $table->string('TITREPARTENARIAT',30);

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRPARTENARIAT');
    }
}
