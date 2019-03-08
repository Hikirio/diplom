<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_employer');
            $table->string('name_employer');
            $table->string('surname_employer');
            $table->string('company_name');
            $table->string('description');
            $table->string('vacancy');
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
        Schema::dropIfExists('employers_info');
    }
}
