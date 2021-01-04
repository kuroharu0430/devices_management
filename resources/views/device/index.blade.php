@extends('layout')

@section('content')
    <header>
        <li>
            <ul><a href="{{action('CustomerController@index')}}">顧客マスタ</a></ul>
            <ul><a href="{{action('OwnerDistinctController@index')}}">所有者区分マスタ</a></ul>
            <ul><a href="{{action('TypeController@index')}}">状態マスタ</a></ul>
            <ul><a href="{{action('EmployeeController@index')}}">従業員マスタ</a></ul>
        </li>
    </header>
    <table>
        <tr>
            <th>項番</th>
            <th>所有区分</th>
            <th>所有者</th>
            <th>PC種別</th>
            <th>管理番号</th>
            <th>機器名称</th>
            <th>製造番号</th>
            <th>責任者</th>
            <th>状態</th>
            <th>設置場所</th>
            <th>リース終了日</th>
            <th>備考</th>
        </tr>
        @foreach($devices as $device)
        <tr>
            <td id ={{ $device->id }} class ='show_link'> {{$device->id}}</td>
            <td>{{$device->owner->owner_distinct->name}}</td>
            @if($device->owner->foreign_id == 0 )
                <td>INSITE</td>
            @else
                <td>{{$device->owner->foreign->name}}</td>
            @endif
            <td>{{$device->type->name}}</td>
            <td>{{$device->management_number}}</td>
            <td>{{$device->device_name}}</td>
            <td>{{$device->serial_number}}</td>
            <td>{{$device->employee->name}}</td>
            <td>{{$device->status->name}}</td>
            <td>{{$device->location}}</td>
            <td>{{$device->lease_end_date}}</td>
            <td>{{$device->remarks}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{action('DeviceController@create')}}">新規作成</a>

    <div class ='modal_wrapper'></div>
@endsection