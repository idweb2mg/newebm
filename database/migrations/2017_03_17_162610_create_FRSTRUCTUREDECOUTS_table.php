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
       $table->increments('ID_STRUCTURE');
       $table->enum('TYPESTRUCTUREDECOUTS', array('1','2'));
       $table->text('COUTSFIXES');
       $table->text('COUTSVARIABLES');
       $table->text('ECONOMIESDECHELLES');
       $table->text('ECONOMIESENVERGURE');
       $table->text('CONTENUSTRUCTUREDECOUTS');
       $table->string('TITRESTRUCTUREDECOUTS',30);
       $table->integer('ID_HELP')->unsigned();
       $table->integer('ID_MATRICE')->unsigned();
       $table->foreign('ID_HELP')->references('ID_STRUCTURE')->on('FRHELP');
       $table->foreign('ID_MATRICE')->references('ID_STRUCTURE')->on('FRMATRICE');
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
