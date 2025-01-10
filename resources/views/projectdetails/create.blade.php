@extends('app')

@section('content')
<div class="form-container">
    <h1 class="title">新增資料</h1>

    <!-- 错误提示 -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- 表单部分 -->
    {!! Form::open(['url' => 'projectdetails/store']) !!}
        @include('projectdetails.form', ['submitButtonText' => '新增資料'])
        <div class="form-group">
            {!! Form::submit('新增資料', ['class'=> 'btn btn-primary from-control']) !!}
        </div>
    {!! Form::close() !!}
</div>
@endsection
