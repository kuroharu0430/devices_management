@extends('device/form')

@section('form_open')
    {{ Form::model($device,['method' => 'put', 'route' => ['device.update',$device->id],]) }}
@endsection 