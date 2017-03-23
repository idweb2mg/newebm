<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRACTIVITESCLESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRACTIVITESCLES', function(Blueprint $table){
         $table->engine = 'InnoDB';
       $table->increments('id');
       $table->enum('TYPEACTIVITESCLES', array('1','2','3'));
       $table->text('CONTENUACTIVITESCLES');
       $table->string('TITREACTIVITESCLES',30);
       
       });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRACTIVITESCLES');
    }
}
