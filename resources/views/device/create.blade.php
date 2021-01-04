@extends('device/form')

@section('form_open')
    {{ Form::open(['method'=>'post', 'route'=>['device.store']])}}
@endsection