<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersVacancyInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers_vacancy_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_vacancy');
            $table->string('title');
            $table->string('description');
            $table->string('requirements');
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
        Schema::dropIfExists('employers_vacancy_info');
    }
}
