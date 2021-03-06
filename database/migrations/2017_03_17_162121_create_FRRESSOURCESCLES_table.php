<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRRESSOURCESCLESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRRESSOURCESCLES', function(Blueprint $table){
         $table->engine = 'InnoDB';
       $table->increments('ID_RESSOURCESCLES');
       $table->text('TYPEPHYSIQUES');
       $table->text('TYPEINTELLECTUELLES');
       $table->text('TYPEHUMAINES');
       $table->text('TYPEFINANCIERES');
       $table->text('CONTENURESSOURCESCLES');
       $table->string('TITRERESSOURCESCLES',30);
       $table->integer('ID_HELP')->unsigned();
       $table->integer('ID_MATRICE')->unsigned();
       $table->foreign('ID_HELP')->references('ID_HELP')->on('FRHELP');
       $table->foreign('ID_MATRICE')->references('ID_MATRICE')->on('FRMATRICE');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          schema::drop('FRRESSOURCESCLES');
    }
}
