@extends('app')

@section('content')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Formstyles.css') }}">
@endpush

<div class="form-container">
    <h1 class="title">新增資料</h1>

    {{-- 顯示錯誤訊息 --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- 表單開始 --}}
    {!! Form::open(['url' => 'Details/store']) !!}

        <div class="form-group">
            {!! Form::label('date_listed', '日期') !!}
            {!! Form::text('date_listed', old('date_listed'), ['class' => 'form-control', 'placeholder' => '請輸入日期 (YYYY-MM-DD)']) !!}
            @if ($errors->has('date_listed'))
                <div class="alert alert-danger">{{ $errors->first('date_listed') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('year', '年度') !!}
            {!! Form::text('year', old('year'), ['class' => 'form-control', 'placeholder' => '請輸入年度 (3位數字)']) !!}
            @if ($errors->has('year'))
                <div class="alert alert-danger">{{ $errors->first('year') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('application_number', '申請編號') !!}
            {!! Form::text('application_number', old('application_number'), ['class' => 'form-control', 'placeholder' => '請輸入申請編號']) !!}
            @if ($errors->has('application_number'))
                <div class="alert alert-danger">{{ $errors->first('application_number') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('implementation_area', '實施區域') !!}
            {!! Form::text('implementation_area', old('implementation_area'), ['class' => 'form-control', 'placeholder' => '請輸入實施區域']) !!}
            @if ($errors->has('implementation_area'))
                <div class="alert alert-danger">{{ $errors->first('implementation_area') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('township', '鄉鎮') !!}
            {!! Form::text('township', old('township'), ['class' => 'form-control', 'placeholder' => '請輸入鄉鎮']) !!}
            @if ($errors->has('township'))
                <div class="alert alert-danger">{{ $errors->first('township') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('province_city_code', '縣市代碼') !!}
            {!! Form::text('province_city_code', old('province_city_code'), ['class' => 'form-control', 'placeholder' => '請輸入縣市代碼']) !!}
            @if ($errors->has('province_city_code'))
                <div class="alert alert-danger">{{ $errors->first('province_city_code') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('province_city_town_code', '縣市鄉鎮代碼') !!}
            {!! Form::text('province_city_town_code', old('province_city_town_code'), ['class' => 'form-control', 'placeholder' => '請輸入縣市鄉鎮代碼']) !!}
            @if ($errors->has('province_city_town_code'))
                <div class="alert alert-danger">{{ $errors->first('province_city_town_code') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('project_name', '計畫名稱') !!}
            {!! Form::text('project_name', old('project_name'), ['class' => 'form-control', 'placeholder' => '請輸入計畫名稱']) !!}
            @if ($errors->has('project_name'))
                <div class="alert alert-danger">{{ $errors->first('project_name') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('central_grant', '中央補助金額') !!}
            {!! Form::number('central_grant', old('central_grant'), ['class' => 'form-control', 'min' => '0', 'placeholder' => '請輸入中央補助金額']) !!}
            @if ($errors->has('central_grant'))
                <div class="alert alert-danger">{{ $errors->first('central_grant') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('local_matching_funds', '地方配合經費') !!}
            {!! Form::number('local_matching_funds', old('local_matching_funds'), ['class' => 'form-control', 'min' => '0', 'placeholder' => '請輸入地方配合經費']) !!}
            @if ($errors->has('local_matching_funds'))
                <div class="alert alert-danger">{{ $errors->first('local_matching_funds') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('total_approved_budget_thousand', '總核定預算') !!}
            {!! Form::number('total_approved_budget_thousand', old('total_approved_budget_thousand'), ['class' => 'form-control', 'min' => '0', 'placeholder' => '請輸入總核定預算']) !!}
            @if ($errors->has('total_approved_budget_thousand'))
                <div class="alert alert-danger">{{ $errors->first('total_approved_budget_thousand') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('implementation_item', '實施項目') !!}
            {!! Form::text('implementation_item', old('implementation_item'), ['class' => 'form-control', 'placeholder' => '請輸入實施項目']) !!}
            @if ($errors->has('implementation_item'))
                <div class="alert alert-danger">{{ $errors->first('implementation_item') }}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('notes', '備註') !!}
            {!! Form::textarea('notes', old('notes'), ['class' => 'form-control', 'placeholder' => '備註 (可選)']) !!}
            @if ($errors->has('notes'))
                <div class="alert alert-danger">{{ $errors->first('notes') }}</div>
            @endif
        </div>

        {{-- 提交按鈕 --}}
        <div class="form-group">
            {!! Form::submit('新增資料', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}

    {{-- 返回上一頁按鈕 --}}
    <br>
    <button class="button" type="button" onclick="goBack()">返回上一頁</button>
</div>

{{-- JavaScript 返回上一頁函數 --}}
<script>
    function goBack() {
        window.history.back();
    }
</script>

@endsection
