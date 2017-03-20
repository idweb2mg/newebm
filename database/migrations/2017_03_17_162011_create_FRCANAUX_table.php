<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRCANAUXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('FRCANAUX', function(Blueprint $table){
      $table->engine = 'InnoDB';
      $table->increments('ID');
      $table->enum('TYPECANAUX', array('1','2','3','4','5'));
      $table->text('RECONNAISSANCE');
      $table->text('EVALUATION');
      $table->text('ACHAT');
      $table->text('PRESTATION');
      $table->text('VENTE');
      $table->text('CONTENU');
      $table->string('TITRE',30);
      $table->integer('ID_HELP')->unsigned();
      $table->foreign('ID_HELP')->references('ID')->on('FRHELP');
      $table->integer('ID_MATRICE')->unsigned();
      $table->foreign('ID_MATRICE')->references('ID')->on('FRMATRICE');
    });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    schema::drop('FRCANAUX');    //
    }

} // class CreateFRCANAUXTable extends Migration