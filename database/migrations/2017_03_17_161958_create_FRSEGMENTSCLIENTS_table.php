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
       $table->increments('ID');
       $table->enum('TYPESEGMENTSCLIENTS', array('1','2','3','4','5'));
       $table->text('CONTENUSEGMENTSCLIENTS');
       $table->string('TITRESEGMENTSCLIENTS',30);
       $table->integer('ID_HELP')->unsigned();
       $table->integer('ID_MATRICE')->unsigned();
       $table->foreign('ID_HELP')->references('ID')->on('FRHELP');
       $table->foreign('ID_MATRICE')->references('ID')->on('FRMATRICE');
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
