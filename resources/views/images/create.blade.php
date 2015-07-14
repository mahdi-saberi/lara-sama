@extends('app')

@section('content')

    <ol class="breadcrumb">
        <li><a href="/admin">مدیریت</a></li>
        <li><a href="/audios/listAll">تصاویر</a></li>
        <li class="active">افزودن تصویر</li>
    </ol>

    @include('partials/errors')

    {!! Form::open(['url' => 'comments','id' => 'comment','files'=>'files']) !!}
        @include('images.form')
    {!! Form::close() !!}
        
@stop