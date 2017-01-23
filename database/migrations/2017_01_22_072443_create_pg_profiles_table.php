<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePgProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pg_profiles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('users_id')->unsigned();//photographer id
          $table->string('facebook');
          $table->string('instagram');
          $table->string('website');
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
        Schema::dropIfExists('pg_profiles');
    }
}
