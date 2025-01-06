<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Detailsrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date_listed' => 'required|date', // 日期欄位必填，且必須是有效的日期
            'year' => 'required|digits:3', // 必須是3位數字
            'application_number' => 'required|string|max:20', // 最多20個字元
            'implementation_area' => 'required|string|max:20', // 最多20個字元
            'township' => 'required|string|max:20', // 最多20個字元
            'province_city_code' => 'required|string|max:20', // 最多20個字元
            'province_city_town_code' => 'required|string|max:20', // 最多20個字元
            'project_name' => 'required|string|max:255', // 最多255個字元
            'central_grant' => 'required|numeric|min:0', // 必須是數字且不小於0
            'local_matching_funds' => 'required|numeric|min:0', // 必須是數字且不小於0
            'total_approved_budget_thousand' => 'required|numeric|min:0', // 必須是數字且不小於0
            'implementation_item' => 'required|string', // 必填文字
            'notes' => 'nullable|string', // 可選文字欄位
        ];
    }
    public function messages()
    {
        return [
            'date_listed.required' => '日期為必填項目。',
            'date_listed.date' => '請輸入有效的日期格式 (YYYY-MM-DD)。',
            'year.required' => '年度為必填項目。',
            'year.digits' => '年度必須是三位數字。',
            'application_number.required' => '申請編號為必填項目。',
            'application_number.string' => '申請編號必須為文字。',
            'application_number.max' => '申請編號不能超過 20 個字元。',
            'implementation_area.required' => '實施區域為必填項目。',
            'implementation_area.string' => '實施區域必須為文字。',
            'implementation_area.max' => '實施區域不能超過 20 個字元。',
            'township.required' => '鄉鎮為必填項目。',
            'township.string' => '鄉鎮必須為文字。',
            'township.max' => '鄉鎮不能超過 20 個字元。',
            'province_city_code.required' => '縣市代碼為必填項目。',
            'province_city_code.string' => '縣市代碼必須為文字。',
            'province_city_code.max' => '縣市代碼不能超過 20 個字元。',
            'province_city_town_code.required' => '縣市鄉鎮代碼為必填項目。',
            'province_city_town_code.string' => '縣市鄉鎮代碼必須為文字。',
            'province_city_town_code.max' => '縣市鄉鎮代碼不能超過 20 個字元。',
            'project_name.required' => '計畫名稱為必填項目。',
            'project_name.string' => '計畫名稱必須為文字。',
            'project_name.max' => '計畫名稱不能超過 255 個字元。',
            'central_grant.required' => '中央補助金額為必填項目。',
            'central_grant.numeric' => '中央補助金額必須是數字。',
            'central_grant.min' => '中央補助金額不能小於 0。',
            'local_matching_funds.required' => '地方配合經費為必填項目。',
            'local_matching_funds.numeric' => '地方配合經費必須是數字。',
            'local_matching_funds.min' => '地方配合經費不能小於 0。',
            'total_approved_budget_thousand.required' => '總核定預算為必填項目。',
            'total_approved_budget_thousand.numeric' => '總核定預算必須是數字。',
            'total_approved_budget_thousand.min' => '總核定預算不能小於 0。',
            'implementation_item.required' => '實施項目為必填項目。',
            'implementation_item.string' => '實施項目必須為文字。',
            'notes.string' => '備註必須為文字。',
        ];
    }
}
