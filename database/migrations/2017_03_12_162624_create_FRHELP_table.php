<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRHELPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRHELP', function(Blueprint $table){
       $table->engine = 'InnoDB';
       $table->increments('ID');
       $table->string('LIBELLEHELP', 30);
       $table->text('CONTENU'); 
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          schema::drop('FRHELP');
    }

} // class CreateFRHELPTable extends Migration
