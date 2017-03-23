<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRRELATIONCLIENTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRRELATIONCLIENT', function(Blueprint $table){
       $table->engine = 'InnoDB';
       $table->increments('id');
       $table->enum('TYPERELATIONCLIENT', array('1','2','3','4','5','6'));
       $table->text('CONTENURELATIONCLIENT');
       $table->string('TITRERELATIONCLIENT',30);

     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRRELATIONCLIENT');
    }
}
