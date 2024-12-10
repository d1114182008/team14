@extends('app')

@section('content')



<div class="form-container">
    <h1 class="title">新增資料</h1>
    {!! Form::open(['url' => 'projectdetails/store']) !!}
        @include('projectdetails.form', ['submitButtonText' => '新增資料'])
    {!! Form::close() !!}
    
</div>
 
@endsection