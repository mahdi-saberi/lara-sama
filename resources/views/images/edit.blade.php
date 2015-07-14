@extends('app')

@section('content')

    <ol class="breadcrumb">
        <li><a href="/admin">مدیریت</a></li>
        <li><a href="/audios/listAll">تصاویر</a></li>
        <li class="active">ویرایش تصویر</li>
    </ol>

    @include('partials/errors')

    {!! Form::model($image,['url' => 'comments','method' => 'PATCH','id' => 'comment','files'=>'files']]) !!}
        @include('images.form')
    {!! Form::close() !!}

@stop