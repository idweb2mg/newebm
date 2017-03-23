<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRPROJETTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FRPROJET', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('LIBELLEPROJET', 30);
            $table->enum('TYPEPROJET', array('1','2','3','4'));
            $table->integer('ID_MATRICE')->unsigned();
            $table->integer('ID_USERS')->unsigned();
            $table->foreign('ID_MATRICE')->references('id')->on('FRMATRICE');
            $table->foreign('ID_USERS')->references('id')->on('USERS');
            $table->timestamp('DATECREATION');
            $table->timestamp('DATEENREGISTREMENT');
        });




    } // function up()

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRPROJET');



    } // public function down()

} // class CreateFRPROJETTable extends Migration
