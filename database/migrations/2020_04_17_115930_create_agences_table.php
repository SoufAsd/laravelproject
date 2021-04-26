<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->integer('postal_code');
            $table->string('locality');
            $table->string('website');
            $table->integer('province');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_mobile');
            $table->string('contact_email');
            $table->string('fonction');
            $table->longtext('description');
            $table->string('image');
            $table->string('logo');
            $table->integer('tariff_plan');
            $table->datetime('creation_date');
            $table->datetime('date_last_pmt');
            $table->integer('agency_status_id');
            $table->integer('pmt_status_id');
            $table->integer('is_promotor');
            $table->string('ipi_number');
            $table->integer('user_id');
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
        Schema::dropIfExists('agences');
    }
}
