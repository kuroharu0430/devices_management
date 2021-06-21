<div class ='modal_windows'>
    @yield('form_open')
        <table>
            @foreach($owner_distincts as $owner_distinct)
                <tr>
                    <td>{{Form::label('owner_distinct_radio', $owner_distinct->name, ['class' => 'form-check-label'])}}</td>
                    <td>{{Form::radio('owner_distinct_id', $owner_distinct->id, null, 
                        ['data-owner_reration' => $owner_distinct->relation,
                         'data-owner_has_own' => $owner_distinct->has_own])}}
                    </td>
                </tr>
            @endforeach
            

            <tr class = 'form_owner_didtinct'>
                <td class ='owner_customer' >{{Form::label('owner_id','所有者(BP)' )}}</td>
                <td class ='owner_customer'>{{ Form::select('owner_id', $customers, null , ['placeholder' => '選択してください'])}}</td>
                <td class ='owner_employee'>{{Form::label('owner_id','所有者(社員)')}}</td>
                <td class ='owner_employee'>{{Form::select('owner_id', $employees, null , ['placeholder' => '選択してください'])}}</td>
                <td class ='owner_insite'>{{Form::label('owner_id_id','所有者')}}</td>
                <td class ='owner_insite'><span class ='owner_insite'>インサイト</span></td>
            </tr>



            <tr>
                <td>{{Form::label('registrate_date','登録日')}}</td>
                <td>{{Form::date('registrate_date', null , ['class' => ''])}}</td>
            </tr>
            <tr id= 'form_return_date'>
                <td>{{Form::label('return_date','返却予定日')}}</td>
                <td>{{Form::date('return_date', null , ['class' => ''])}}</td>
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
                <td>{{Form::label('employee_id','責任者')}}</td>
                <td>{{Form::select('employee_id', $employees, null , ['placeholder' => '選択して下さい', 'class' => ''])}}</td>
            </tr>
            <!-- <tr> -->
                <!-- <td>{{Form::label('status_id','状態')}}</td>
                <td>{{Form::select('status_id', $statuses, null , ['placeholder' => '選択して下さい', 'class' => ''])}}</td>
            </tr>

            <tr>
                <td>{{Form::label('location','設置')}}</td>
                <td>{{Form::text('location', null , ['placeholder' => '社内、', 'class' => ''])}}</td>
            </tr> -->

            <tr>
                <td>{{Form::label('remarks','備考')}}</td>
                <td>{{Form::text('remarks', null , ['placeholder' => 'iPadなど', 'class' => ''])}}</td>
            </tr>
        </table>
            {{Form::submit('登録',[ 'onclick' => 'return confirm("登録しますか？")']) }}
    {{Form::close()}}
</div>
