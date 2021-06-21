<div class ='modal_windows'>
    <table >
        <tr>
            <td>項番</td>
            <td>{{$device->id}}</td>
        </tr>            
        <tr>
            <td>所有区分</td>
            <td>{{$device->owner->owner_distinct->name}}</td>
        </tr>
        <tr>
            <td>所有者</td>
            @if($device->owner->foreign_id == 0 )
                <td>INSITE</td>
            @else
                <td>{{$device->owner->foreign->name}}</td>
            @endif
        </tr>
        <tr>
            <td>PC種別</td>
            <td>{{$device->type->name}}</td>
        </tr> 
        <tr>
            <td>管理番号</td>
            <td>{{$device->management_number}}</td>
        </tr> 
        <tr>
            <td>機器名称</td>
            <td>{{$device->device_name}}</td>
        </tr> 
        <tr>
            <td>製造番号</td>
            <td>{{$device->serial_number}}</td>
        </tr> 
        <tr>
            <td>責任者</td>
            <td>{{$device->employee->name}}</td>
        </tr> 
        <tr>
            <td>状態</td>
            <td>{{$device->status->name}}</td>
        </tr> 
        <tr>
            <td>設置場所</td>
            <td>{{$device->location}}</td>
        </tr> 
        <tr>
            <td>リース終了日</td>
            <td>{{$device->lease_end_date}}</td>
        </tr> 
        <tr>
            <td>備考</td>
            <td>{{$device->remarks}}</td>
        </tr> 
    </table>
    <button class ='type-a'>
        <a href="{{action('DeviceController@edit',$device->id)}}">編集</a>
    </button>
    <button class ='type-a'>
        削除
    </button>
    <button class ='type-a'>
            持出・持込届　作成
    </button>
</div>