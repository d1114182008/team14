@extends('app')

@section('content')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/Formstyles.css') }}">
@endpush

<div class="form-container">
    <h1 class="title">新增資料</h1>
    {!! Form::open(['url' => 'Details/store']) !!}
        @include('Details.form', ['submitButtonText' => '新增資料'])
    {!! Form::close() !!}
    <br>
    <button class="button" type="button" onclick="goBack()">返回上一頁</button>
</div>
 
@endsection