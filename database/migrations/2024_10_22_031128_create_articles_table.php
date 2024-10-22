<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // 自動增加的主鍵，對應 Seq
            $table->date('date_listed'); // 列出日期
            $table->integer('year'); // 年度
            $table->string('application_number', 28); // 送審案件編號
            $table->string('implementation_area', 28); // 實施區域縣市別
            $table->string('township', 28); // 鄉鎮區別
            $table->integer('province_city_code'); // 省市縣市之代碼
            $table->integer('province_city_town_code'); // 省市縣市鄉鎮市區之代碼
            $table->string('project_name', 255); // 工程名稱
            $table->integer('central_grant'); // 中央補助款
            $table->integer('local_matching_funds'); // 地方配合款
            $table->integer('total_approved_budget_thousand'); // 合計核定經費_千元
            $table->text('implementation_item'); // 施作項目
            $table->text('notes'); // 備註
            $table->timestamps(); // 自動生成 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
