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
        $project_details = [
            ['id' => 1, 'date_listed' => '20210222', 'year' => 106, 'application_number' => '106-A-01-01-001', 'implementation_area' => '宜蘭縣', 'township' => '大同鄉', 'province_city_code' => 10002, 'province_city_town_code' => 10002110, 'project_name' => '大同鄉比雅楠部落基礎環境設施改善工程', 'central_grant' => 378, 'local_matching_funds' => 42, 'total_approved_budget_thousand' => 420, 'implementation_item' => '安全護欄改善(100m)', 'notes' => '宜蘭縣政府105年8月12日宜原經字第1050003934號函修正。'],
            ['id' => 2, 'date_listed' => '20210326', 'year' => 106, 'application_number' => '106-A-03-04-001', 'implementation_area' => '桃園市', 'township' => '復興區', 'province_city_code' => 68000, 'province_city_town_code' => 68000130, 'project_name' => '霞雲坪部落環境改善工程', 'central_grant' => 800, 'local_matching_funds' => 200, 'total_approved_budget_thousand' => 1000, 'implementation_item' => '工區一：PC路面修復A=40㎡；工區二：1.PC路面修復A=500㎡。2.仿竹欄杆L=34m；3.新設排水溝L=130m；4.混凝土水溝蓋板2座；5.新設截水溝L=7m', 'notes' => '桃園市政府105年8月16日府原產字第1050201305號函修正。'],
            ['id' => 3, 'date_listed' => '20210326', 'year' => 106, 'application_number' => '106-A-03-04-002', 'implementation_area' => '桃園市', 'township' => '復興區', 'province_city_code' => 68000, 'province_city_town_code' => 68000130, 'project_name' => '高義蘭部落排水設施改善工程', 'central_grant' => 2000, 'local_matching_funds' => 500, 'total_approved_budget_thousand' => 2500, 'implementation_item' => '工區一：集水井1座、暗溝L=140m；工區二：邊坡噴漿溝L=35m、消能井1座、過路暗溝L=10m；工區四：集水井(W=80cm、H=100cm、L=80cm)1座；工區五：水溝(W=70cm、H=70cm、L=150m)；工區六：HDPE(W=70cm、H=70cm、L=150cm)', 'notes' => '1.桃園市政府105年8月16日府原產字第1050201305號函修正。2.工區二矮牆工項、工區三及七刪除。'],
            ['id' => 4, 'date_listed' => '20210326', 'year' => 106, 'application_number' => '106-A-03-04-006', 'implementation_area' => '桃園市', 'township' => '復興區', 'province_city_code' => 68000, 'province_city_town_code' => 68000130, 'project_name' => '義興部落道路及排水設施改善工程', 'central_grant' => 5280, 'local_matching_funds' => 1320, 'total_approved_budget_thousand' => 6600, 'implementation_item' => '1.AC路面改善：W=2.5m，L=692m。2.L溝：L=1375m', 'notes' => '桃園市政府105年8月16日府原產字第1050201305號函修正。'],
            ['id' => 5, 'date_listed' => '20210326', 'year' => 106, 'application_number' => '106-A-03-04-007', 'implementation_area' => '桃園市', 'township' => '復興區', 'province_city_code' => 68000, 'province_city_town_code' => 68000130, 'project_name' => '樂信瓦旦紀念公園環境改善工程', 'central_grant' => 6800, 'local_matching_funds' => 1700, 'total_approved_budget_thousand' => 8500, 'implementation_item' => '1.工區一：新設擋土牆及欄杆、回填土、入口意象及停車空間改善、新設步道L=60m、新設座椅3座、新設排水溝L=50m、新設木作階梯。2.工區二：新設紅磚步道及排水溝1座、植栽綠美化L=45m、植栽綠美化。3.工區三：路面整理、新設步道L=75m、排水系統換格柵L=150m、遷移電線杆2支、電力1支及路燈1支。', 'notes' => '1.桃園市政府105年8月16日府原產字第1050201305號函修正。2.工區一「既有涼亭修繕」工項刪除。'],
            ['id' => 6, 'date_listed' => '20210326', 'year' => 106, 'application_number' => '106-A-06-11-001', 'implementation_area' => '臺中市', 'township' => '和平區', 'province_city_code' => 66000, 'province_city_town_code' => 66000290, 'project_name' => '和平區南勢里第九鄰社區巷道環境改善工程', 'central_grant' => 800, 'local_matching_funds' => 200, 'total_approved_budget_thousand' => 1000, 'implementation_item' => '1.路口節點圖騰鋪面。2.道路瀝青鋪設601㎡。3.側邊壓花圖騰美化230㎡。', 'notes' => '1.臺中市政府105年7月22日府授：原經字第1050156131 號函修正。2.路口節點圖騰鋪面工項金額減列，請自行評估施作數量。'],
            ['id' => 7, 'date_listed' => '20210326', 'year' => 106, 'application_number' => '106-A-07-13-001', 'implementation_area' => '南投縣', 'township' => '仁愛鄉', 'province_city_code' => 10008, 'province_city_town_code' => 10008130, 'project_name' => '106仁愛鄉中正村卡度部落基礎環境改善工程', 'central_grant' => 1980, 'local_matching_funds' => 220, 'total_approved_budget_thousand' => 2200, 'implementation_item' => '1.排水溝改善L=200m、W=0.8m、H=0.6m。2.AC道路改善工程L=400m、W=3m、A=1200㎡。', 'notes' => '南投縣政府105年6月8日府授原建字第1050120404號函提報，本計畫105年7月29日審核會議決議納列。'],
            ['id' => 8, 'date_listed' => '20210326', 'year' => 106, 'application_number' => '106-A-07-13-004', 'implementation_area' => '南投縣', 'township' => '仁愛鄉', 'province_city_code' => 10008, 'province_city_town_code' => 10008130, 'project_name' => '106仁愛鄉萬豐部落基礎環境改善工程', 'central_grant' => 1080, 'local_matching_funds' => 120, 'total_approved_budget_thousand' => 1200, 'implementation_item' => '1.工區1：AC道路改善工程L=360m、W=3.5m、A=1260㎡。2.工區二：AC道路改善工程L=320m、W=3m、A=960㎡。', 'notes' => '南投縣政府105年8月3日府授原建字第1050162098號函修正。'],
            ['id' => 9, 'date_listed' => '20210326', 'year' => 106, 'application_number' => '106-A-08-15-002', 'implementation_area' => '嘉義縣', 'township' => '阿里山鄉', 'province_city_code' => 10010, 'province_city_town_code' => 10010180, 'project_name' => '嘉義縣阿里山鄉樂野村基礎設施改善工程', 'central_grant' => 665, 'local_matching_funds' => 35, 'total_approved_budget_thousand' => 700, 'implementation_item' => '工區1：新設排水明溝40*60cm L=65m、路面PC鋪設厚15cm 250㎡。工區2 : 路面AC鋪設。', 'notes' => '1.嘉義縣政府105年8月10日府民原字第1050156607號函修正。2.工區2-2、2-4位於縣道嘉156部分路段刪除。']
        ];

        foreach ($project_details as $project_detail) {
            DB::table('project_details')->insert([
                'date_listed' => $project_detail['date_listed'],
                'year' => $project_detail['year'],
                'application_number' => $project_detail['application_number'],
                'implementation_area' => $project_detail['implementation_area'],
                'township' => $project_detail['township'],
                'province_city_code' => $project_detail['province_city_code'],
                'province_city_town_code' => $project_detail['province_city_town_code'],
                'project_name' => $project_detail['project_name'],
                'central_grant' => $project_detail['central_grant'],
                'local_matching_funds' => $project_detail['local_matching_funds'],
                'total_approved_budget_thousand' => $project_detail['total_approved_budget_thousand'],
                'implementation_item' => $project_detail['implementation_item'],
                'notes' => $project_detail['notes'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
