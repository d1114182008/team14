<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->date('date_listed');
            $table->integer('year');
            $table->string('application_number')->unique();
            $table->string('implementation_area');
            $table->string('township');
            $table->string('province_city_code');
            $table->string('province_city_town_code');
            $table->string('project_name');
            $table->unsignedBigInteger('central_grant');
            $table->unsignedBigInteger('local_matching_funds');
            $table->unsignedBigInteger('total_approved_budget_thousand');
            $table->text('implementation_item');
            $table->text('notes');
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
        Schema::dropIfExists('project_details');
    }
}
