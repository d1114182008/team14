<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_details')->insert([
            [
                'date_listed' => Carbon::parse('2021-02-22'),
                'year' => 106,
                'application_number' => '106-A-01-01-001',
                'implementation_area' => '宜蘭縣',
                'township' => '大同鄉',
                'province_city_code' => '10002',
                'province_city_town_code' => '10002110',
                'project_name' => '大同鄉比雅楠部落基礎環境設施改善工程',
                'central_grant' => 378,
                'local_matching_funds' => 42,
                'total_approved_budget_thousand' => 420,
                'implementation_item' => '安全護欄改善(100m)',
                'notes' => '宜蘭縣政府105年8月12日宜原經字第1050003934號函修正。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_listed' => Carbon::parse('2021-03-26'),
                'year' => 106,
                'application_number' => '106-A-03-04-001',
                'implementation_area' => '桃園市',
                'township' => '復興區',
                'province_city_code' => '68000',
                'province_city_town_code' => '68000130',
                'project_name' => '霞雲坪部落環境改善工程',
                'central_grant' => 800,
                'local_matching_funds' => 200,
                'total_approved_budget_thousand' => 1000,
                'implementation_item' => '工區一：PC路面修復A=40㎡；工區二：1.PC路面修復A=500㎡。2.仿竹欄杆L=34m；3.新設排水溝L=130m；4.混凝土水溝蓋板2座；5.新設截水溝L=7m',
                'notes' => '桃園市政府105年8月16日府原產字第1050201305號函修正。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_listed' => Carbon::parse('2021-03-26'),
                'year' => 106,
                'application_number' => '106-A-03-04-002',
                'implementation_area' => '桃園市',
                'township' => '復興區',
                'province_city_code' => '68000',
                'province_city_town_code' => '68000130',
                'project_name' => '高義蘭部落排水設施改善工程',
                'central_grant' => 2000,
                'local_matching_funds' => 500,
                'total_approved_budget_thousand' => 2500,
                'implementation_item' => '工區一：集水井1座、暗溝L=140m；工區二：邊坡噴漿溝L=35m、消能井1座、過路暗溝L=10m；工區四：集水井(W=80cm、H=100cm、L=80cm)1座；工區五：水溝(W=70cm、H=70cm、L=150m)；工區六：HDPE(W=70cm、H=70cm、L=150cm)',
                'notes' => '桃園市政府105年8月16日府原產字第1050201305號函修正。工區二矮牆工項、工區三及七刪除。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_listed' => Carbon::parse('2021-03-26'),
                'year' => 106,
                'application_number' => '106-A-03-04-006',
                'implementation_area' => '桃園市',
                'township' => '復興區',
                'province_city_code' => '68000',
                'province_city_town_code' => '68000130',
                'project_name' => '義興部落道路及排水設施改善工程',
                'central_grant' => 5280,
                'local_matching_funds' => 1320,
                'total_approved_budget_thousand' => 6600,
                'implementation_item' => '1.AC路面改善：W=2.5m，L=692m。2.L溝：L=1375m',
                'notes' => '桃園市政府105年8月16日府原產字第1050201305號函修正。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Repeat similarly for the rest of the records
        ]);
    }
}
