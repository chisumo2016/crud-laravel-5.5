@extends('layouts.master')

@section('content')

    {!! Form::model($item,['method' => 'PUT', 'action'=>['ItemController@update',$item->id] ]) !!}

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' =>'Enter a title ..', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder'=>'Enter Description ..', 'required']) !!}
    </div>

    {!!  Form::submit('Update Item', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection