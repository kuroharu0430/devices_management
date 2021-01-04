@extends('layout')

@section('content')
<h3>所有者区分マスタ</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>所有者区分名</th>
            <th>所有者区分記号</th>
            <th>関連テーブル</th>
        </tr>
        @foreach($owner_distincts as $owner_distinct)
        <tr>
            <td>{{$owner_distinct-> id}}</td>
            <td>{{$owner_distinct-> name}}</td>
            <td>{{$owner_distinct-> symbol}}</td>
            <td>{{$owner_distinct-> relation}}</td>
        </tr>
        @endforeach
        {{ Form::open(['method'=>'post', 'route'=>['owner_distinct.store']])}}
        <tr>
            <td>連番</td>
            <td>{{ Form::text('name',null)}}</td>
            <td>{{ Form::text('symbol',null)}}</td>
            <td>{{ Form::text('relation',null)}}</td>
        </tr>
    </table>
    {{Form::submit('登録',[ 'onclick' => 'return confirm("登録しますか？")']) }}
    {{Form::close()}}
@endsection