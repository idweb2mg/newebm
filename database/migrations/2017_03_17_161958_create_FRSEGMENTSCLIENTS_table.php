<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRSEGMENTSCLIENTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRSEGMENTSCLIENTS', function(Blueprint $table){
      $table->engine = 'InnoDB';
       $table->increments('id');
       $table->enum('TYPESEGMENTSCLIENTS', array('1','2','3','4','5'));
       $table->text('CONTENUSEGMENTSCLIENTS');
       $table->string('TITRESEGMENTSCLIENTS',30);
       
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRSEGMENTSCLIENTS');
    }

}//class CreateFRSEGMENTSCLIENTSTable extends Migration
