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
       $table->increments('id');
       $table->string('LIBELLEHELP', 30);
       $table->text('CONTENU');
       $table->integer('ID_PROJET')->unsigned();
       $table->integer('ID_MATRICE')->unsigned();
       $table->integer('ID_SEGMENTS')->unsigned();
       $table->integer('ID_CANAUX')->unsigned();
       $table->integer('ID_RELATIONCLIENT')->unsigned();
       $table->integer('ID_PROPOSITIONDEVALEUR')->unsigned();
       $table->integer('ID_SOURCESDEREVENUS')->unsigned();
       $table->integer('ID_RESSOURCESCLES')->unsigned();
       $table->integer('ID_ACTIVITESCLES')->unsigned();
       $table->integer('ID_PARTENARIAT')->unsigned();
       $table->integer('ID_STRUCTUREDECOUTS')->unsigned();
       $table->foreign('ID_SEGMENTS')->references('id')->on('FRSEGMENTSCLIENTS');
       $table->foreign('ID_CANAUX')->references('id')->on('FRCANAUX');
       $table->foreign('ID_RELATIONCLIENT')->references('id')->on('FRRELATIONCLIENT');
       $table->foreign('ID_PROPOSITIONDEVALEUR')->references('id')->on('FRPROPOSITIONDEVALEUR');
       $table->foreign('ID_SOURCESDEREVENUS')->references('id')->on('FRSOURCESDEREVENUS');
       $table->foreign('ID_RESSOURCESCLES')->references('id')->on('FRRESSOURCESCLES');
       $table->foreign('ID_ACTIVITESCLES')->references('id')->on('FRACTIVITESCLES');
       $table->foreign('ID_PARTENARIAT')->references('id')->on('FRPARTENARIAT');
       $table->foreign('ID_STRUCTUREDECOUTS')->references('id')->on('FRSTRUCTUREDECOUTS');
       $table->foreign('ID_MATRICE')->references('id')->on('FRMATRICE');
       $table->foreign('ID_PROJET')->references('id')->on('FRPROJET');
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
