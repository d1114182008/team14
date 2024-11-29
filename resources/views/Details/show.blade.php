@extends('app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/showstyles.css') }}">
@endpush
@section('content')
    <div class="container">
        <h1 class="title">詳細資料</h1>

        <div class="details">
            <p><strong>日期:</strong> {{$Details->date_listed}}</p>
            <p><strong>年度:</strong> {{$Details->year}}</p>
            <p><strong>申請編號:</strong> {{$Details->application_number}}</p>
            <p><strong>實施區域:</strong> {{$Details->implementation_area}}</p>
            <p><strong>鄉鎮:</strong> {{$Details->township}}</p>
            <p><strong>縣市代碼:</strong> {{$Details->province_city_code}}</p>
            <p><strong>縣市鄉鎮代碼:</strong> {{$Details->province_city_town_code}}</p>
            <p><strong>計畫名稱:</strong> {{$Details->project_name}}</p>
            <p><strong>中央補助金額:</strong> {{$Details->central_grant}}</p>
            <p><strong>地方配合經費:</strong> {{$Details->local_matching_funds}}</p>
            <p><strong>總核定預算(千元):</strong> {{$Details->total_approved_budget_thousand}}</p>
            <p><strong>實施項目:</strong> {{$Details->implementation_item}}</p>
            <p><strong>備註:</strong> {{$Details->notes}}</p>
        </div>

        <button class="button" type="button" onclick="goBack()">返回上一頁</button>
    </div>

@endsection
