@extends('layout')

@section('content')
<h3>顧客マスタ</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>顧客名</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer-> id}}</td>
            <td>{{$customer-> name}}</td>
        </tr>
        @endforeach
        {{ Form::open(['method'=>'post', 'route'=>['customer.store']])}}
        <tr>
            <td>連番</td>
            <td>{{ Form::text('name',null)}}</td>
        </tr>
    </table>
    {{Form::submit('登録',[ 'onclick' => 'return confirm("登録しますか？")']) }}
    {{Form::close()}}
@endsection