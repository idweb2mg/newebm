<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRSOURCESDEREVENUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRSOURCESDEREVENUS', function(Blueprint $table){
         $table->engine = 'InnoDB';
       $table->increments('ID_SOURCESDEREVENUS');
       $table->enum('TYPESOURCESDEREVENU', array('1','2','3','4','5','6','7'));
       $table->enum('PRIXFIXE', array('1','2','3','4'));
       $table->enum('PRIXVARIABLE', array('1','2','3','4'));
       $table->text('CONTENUSOURCESDEREVENUS');
       $table->string('TITRESOURCESDEREVENUS',30);
       $table->integer('ID_HELP')->unsigned();
       $table->integer('ID_MATRICE')->unsigned();
       $table->foreign('ID_HELP')->references('ID_HELP')->on('FRHELP');
       $table->foreign('ID_MATRICE')->references('ID_MATRICE')->on('FRMATRICE');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRSOURCESDEREVENUS');
    }
}
