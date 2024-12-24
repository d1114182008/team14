@extends('app')

@section('content')

<div class="form-container">
    <h1 class="title">新增資料</h1>
    {!! Form::model($projectdetails, ['method'=>'PATCH', 'route'=>['projectdetails.update', $projectdetails->id]]) !!}
        @include('projectdetails.form', ['submitButtonText' => '修改資料'])
        <div class="form-group">
            {!! Form::submit('修改資料',['class'=> 'btn btn-primary from-control']) !!}
        </div>
    {!! Form::close() !!}
    
</div>

@endsection
