<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateROLESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ROLES', function(Blueprint $table){
       $table->engine = 'InnoDB';
       $table->increments('ID');
       $table->enum('TITLE', array('1','2','3'));
       $table->string('SLUG',10)->unique();
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
        schema::drop('ROLES');
    }

}//class CreateROLESTable extends Migration
