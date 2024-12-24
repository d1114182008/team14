@extends('app')

@section('content')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/Formstyles.css') }}">
@endpush

<div class="form-container">
    <h1 class="title">修改資料</h1>
    {!! Form::model($Details, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\DetailsController@update', $Details->id]]) !!}
        @include('Details.form', ['submitButtonText' => '修改資料'])
    <div class="form-group">
    {!! Form::submit('修改資料',['class'=> 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    <br>
    <button class="button" type="button" onclick="goBack()">返回上一頁</button>
</div>

@endsection
