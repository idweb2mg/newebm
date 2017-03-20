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
            $table->increments('ID');
            $table->string('TITREMATRICE', 30);
            $table->integer('ID_PROJET')->unsigned();
            $table->integer('ID_HELP')->unsigned();
            $table->foreign('ID_PROJET')->references('ID')->on('FRPROJET');
            $table->foreign('ID_HELP')->references('ID')->on('FRHELP');
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