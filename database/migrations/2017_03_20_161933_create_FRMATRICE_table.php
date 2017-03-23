<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRMATRICETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('FRMATRICE', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('TITREMATRICE', 30);


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
            $table->timestamp('DATECREATION');
            $table->timestamp('DATEENREGISTREMENT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRMATRICE');

    }

} //class CreateFRMATRICETable extends Migration
