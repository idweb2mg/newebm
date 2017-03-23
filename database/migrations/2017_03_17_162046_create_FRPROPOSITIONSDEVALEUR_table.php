<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRPROPOSITIONSDEVALEURTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRPROPOSITIONDEVALEUR', function(Blueprint $table){
         $table->engine = 'InnoDB';
       $table->increments('id');
       $table->enum('TYPEPROPOSITIONDEVALEUR', array('1','2','3','4','5','6','7','8','9','10','11'));
       $table->text('CONTENUPROPOSITIONSDEVALEUR');
       $table->string('TITREPROPOSITIONSDEVALEUR',30);
      
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRPROPOSITIONDEVALEUR');
    }
}
