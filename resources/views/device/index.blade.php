@extends('layout')

@section('content')
    <header>
        <li>
            <ul><a href="{{action('CustomerController@index')}}">顧客マスタ</a></ul>
            <ul><a href="{{action('OwnerDistinctController@index')}}">所有者区分マスタ</a></ul>
            <ul><a href="{{action('TypeController@index')}}">状態マスタ</a></ul>
            <ul><a href="{{action('EmployeeController@index')}}">従業員マスタ</a></ul>
            <ul><a href="{{action('DeviceController@create')}}">設備登録</a></ul>

            <ul id='create' class='route_link'>新規登録</ul>
            <ul id='/edit' class='route_link'>編集</ul>
            <ul id='delete' class='route_link'>削除</ul>
            <ul id='' class=''>持出持込届作成</ul>
            <ul>マスタ編集</ul>           
        </li>
    </header>
    <table device> 
        <tr>
            <th>項番</th>
            <th>登録日</th>
            <th>返却予定日</th>
            <th>所有区分</th>
            <th>所有者</th>
            <th>PC種別</th>
            <th>管理番号</th>
            <th>機器名称</th>
            <th>製造番号</th>
            <th>責任者</th>
            <th>状態</th>
            <th>設置場所</th>
            <th>備考</th>
        </tr>
        @foreach($devices as $device)
        <tr>
            <td id ={{ $device->id }} class ='device_id'> {{$device->id}}</td>
            <td>{{$device->registrate_date}}</td>
            <td>{{$device->return_date}}</td>
            <td>{{$device->owner_distinct->name}}</td>
            @if($device->owner_id == null )
                <td>INSITE</td>
            @else
                <td>{{$device->owner->name}}</td>
            @endif
            <td>{{$device->type->name}}</td>
            <td>{{$device->management_number}}</td>
            <td>{{$device->device_name}}</td>
            <td>{{$device->serial_number}}</td>
            <td>{{$device->employee->name}}</td>
            <td>{{$device->status->name}}</td>
            <td>{{$device->location}}</td>
            <td>{{$device->remarks}}</td>
        </tr>
        @endforeach
    </table>

    <div class ='modal_wrapper'></div>
@endsection