<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRSTRUCTUREDECOUTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRSTRUCTUREDECOUTS', function(Blueprint $table){
       $table->engine = 'InnoDB';
       $table->increments('id');
       $table->enum('TYPESTRUCTUREDECOUTS', array('1','2'));
       $table->text('COUTSFIXES');
       $table->text('COUTSVARIABLES');
       $table->text('ECONOMIESDECHELLES');
       $table->text('ECONOMIESENVERGURE');
       $table->text('CONTENUSTRUCTUREDECOUTS');
       $table->string('TITRESTRUCTUREDECOUTS',30);

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRSTRUCTUREDECOUTS');
    }
}
