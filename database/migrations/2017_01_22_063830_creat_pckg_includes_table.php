<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatPckgIncludesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pckg_includes', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('package_id')->unsigned();
          $table->integer('packg_categotries_id')->unsigned();
          $table->string('qty')->nullable();
          $table->string('unit')->nullable();
          $table->string('description');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('pckg_includes');
    }
}
