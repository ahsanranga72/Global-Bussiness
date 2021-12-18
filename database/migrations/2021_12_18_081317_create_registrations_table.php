<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string("company")->nullable();
            $table->string("mobile")->nullable();
            $table->string("Whatsapp")->nullable();
            $table->string("project_name")->nullable();
            $table->string("location")->nullable();
            $table->string("service_res")->nullable();
            $table->string("tasf")->nullable();
            $table->string("costpersf")->nullable();
            $table->string("totalcost")->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
