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
       $table->increments('id');
       $table->text('TYPEPHYSIQUES');
       $table->text('TYPEINTELLECTUELLES');
       $table->text('TYPEHUMAINES');
       $table->text('TYPEFINANCIERES');
       $table->text('CONTENURESSOURCESCLES');
       $table->string('TITRERESSOURCESCLES',30);
      
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
