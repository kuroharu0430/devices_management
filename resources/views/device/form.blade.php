@extends('layout')

@section('content')
    <body>
        <table>
            @yield('form_open')
            <tr>
                <td>{{Form::label('registration_year','登録年度')}}</td>
                <td>{{Form::number('registration_year', 2020 ,['class' => ''])}}<span>年度</span></td>
                
            </tr>

            @foreach($owner_distincts as $owner_distinct)
                <tr>
                    <td>{{Form::label('owner_distinct_radio', $owner_distinct->name, ['class' => 'form-check-label'])}}</td>
                    <td>{{Form::radio('owner_distinct_id', $owner_distinct->id, null, ['class' => $owner_distinct->relation])}}</td>
                </tr>
            @endforeach
            <tr class = 'form_owner_didtinct'>
                <td class ='owner_customer' >{{Form::label('owner_customer_id','所有者' )}}</td>
                <td class ='owner_customer'>{{ Form::select('owner_customer_id', $customers, null , ['placeholder' => '選択してください'])}}</td>
                <td class ='owner_employee'>{{Form::label('owner_empolyee_id','所有者')}}</td>
                <td class ='owner_employee'>{{Form::select('owner_employee_id', $employees, null , ['placeholder' => '選択してください'])}}</td>
                <td class ='owner_insite'>{{Form::label('empolyee_id','所有者')}}</td>
                <td class ='owner_insite'><span class ='owner_insite'>インサイト</span></td>
            </tr>

            <tr>
                <td>{{Form::label('type_id','PC種別')}}</td>
                <td>{{ Form::select('type_id', $types, null , ['placeholder' => '選択してください', 'class' => ''])}}</td>
            </tr>
            <tr>
                <td>{{Form::label('device_name','機器名称')}}</td>
                <td>{{Form::text('device_name', null , ['placeholder' => 'iPadなど', 'class' => ''])}}</td>
            </tr>
            <tr>
                <td>{{Form::label('serial_number','製造番号')}}</td>
                <td>{{Form::text('serial_number', null , ['placeholder' => 'iPadなど', 'class' => ''])}}</td>
            </tr>
            <tr>
                <td>{{Form::label('status_id','状態')}}</td>
                <td>{{Form::select('status_id', $statuses, null , ['placeholder' => '選択して下さい', 'class' => ''])}}</td>
            </tr>
            <tr>
                <td>{{Form::label('employee_id','責任者')}}</td>
                <td>{{Form::select('employee_id', $employees, null , ['placeholder' => '選択して下さい', 'class' => ''])}}</td>
            </tr>
            <tr>
                <td>{{Form::label('location','設置')}}</td>
                <td>{{Form::text('location', null , ['placeholder' => '社内、', 'class' => ''])}}</td>
            </tr>
            <tr>
                <td>{{Form::label('lease_end_date','リース終了日')}}</td>
                <td>{{Form::date('lease_end_date', null , ['placeholder' => '社内、', 'class' => ''])}}</td>
            </tr>

            <tr>
                <td>{{Form::label('remarks','備考')}}</td>
                <td>{{Form::text('remarks', null , ['placeholder' => 'iPadなど', 'class' => ''])}}</td>
            </tr>
        </table>
            {{Form::submit('登録',[ 'onclick' => 'return confirm("登録しますか？")']) }}

        {{Form::close()}}
    </body>
@endsection

