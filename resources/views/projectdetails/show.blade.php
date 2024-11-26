@extends('app') 

@section('title', '項目詳情')

@section('content')
<div class="project-details">
    <p><strong>日期:</strong> {{ $projectdetails->date_listed }}</p>
    <p><strong>年度:</strong> {{ $projectdetails->year }}</p>
    <p><strong>申請編號:</strong> {{ $projectdetails->application_number }}</p>
    <p><strong>實施區域:</strong> {{ $projectdetails->implementation_area }}</p>
    <p><strong>鄉鎮:</strong> {{ $projectdetails->township }}</p>
    <p><strong>省市代碼:</strong> {{ $projectdetails->province_city_code }}</p>
    <p><strong>省市鄉代碼:</strong> {{ $projectdetails->province_city_town_code }}</p>
    <p><strong>計畫名稱:</strong> {{ $projectdetails->project_name }}</p>
    <p><strong>中央補助:</strong> {{ $projectdetails->central_grant }}</p>
    <p><strong>地方配合:</strong> {{ $projectdetails->local_matching_funds }}</p>
    <p><strong>總核定預算:</strong> {{ $projectdetails->total_approved_budget_thousand }}</p>
    <p><strong>實施項目:</strong> {{ $projectdetails->implementation_item }}</p>
    <p><strong>備註:</strong> {{ $projectdetails->notes }}</p>

    <!-- 刪除表單 -->
    <form action="{{ route('projectdetails.destroy', ['id' => $projectdetails->id]) }}" method="POST" onsubmit="return confirm('確定要刪除這個項目嗎？');">
        @csrf
        @method('DELETE')
        <button type="submit">刪除此項目</button>
    </form>
</div>
@endsection