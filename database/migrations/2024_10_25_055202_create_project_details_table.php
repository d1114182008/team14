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
            $table->date('date_listed')->comment('列出日期');
            $table->integer('year')->comment('年度');
            $table->string('application_number', 20)->comment('送審案件編號');
            $table->string('implementation_area', 20)->comment('實施區域縣市別');
            $table->string('township', 20)->comment('鄉鎮區別');
            $table->string('province_city_code')->comment('省市縣市之代碼');
            $table->string('province_city_town_code')->comment('省市縣市鄉鎮市區之代碼');
            $table->string('project_name', 255)->comment('工程名稱');
            $table->integer('central_grant')->comment('中央補助款');
            $table->integer('local_matching_funds')->comment('地方配合款');
            $table->integer('total_approved_budget_thousand')->comment('合計核定經費_仟元');
            $table->text('implementation_item')->comment('施作項目');
            $table->text('notes')->comment('備註');
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
