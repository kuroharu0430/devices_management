<?php

namespace App\Http\Controllers;

use App\Device;
use App\Owner;
use App\OwnerDistinct;
use App\Customer;
use App\Employee;
use App\Status;
use App\Type;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::all();
        $statuses = Status::all()-> pluck('name', 'id' );
        $employees = Employee::all() -> pluck('name', 'id' );
        $types = Type::all()-> pluck('name', 'id' );
        return view('device/index',['devices'=>$devices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner_distincts = OwnerDistinct::all();
        $customers = Customer::all() -> pluck('name', 'id' );
        $statuses = Status::all()-> pluck('name', 'id' );
        $employees = Employee::all() -> pluck('name', 'id' );
        $types = Type::all()-> pluck('name', 'id' );
        return view('device//create',
        [ 'owner_distincts' => $owner_distincts,'customers' => $customers,
        'employees' => $employees, 'statuses' => $statuses,'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $device = new Device();
        $owner = new Owner();
        $owner ->owner_distinct_id = $request->owner_distinct_id;
        switch($owner->owner_distinct ->relation){
            case 'customer':
                $owner ->foreign_id = $request->owner_customer_id;
                break;
            case 'employee':
                $owner ->foreign_id = $request->owner_employee_id;
                break;
            default:
                $owner ->foreign_id = 0;
        }
        $owner->save();

        $device ->owner_id = $owner ->id;
        $device ->registration_year = $request->registration_year;
        $device ->type_id = $request->type_id;
        $management_type_number = substr('00'.$device->type->number,-2);

        // $latest_device_year = Device::where( 'billing_year', $billing->billing_year )->orderBy( 'billing_number_of_year', 'desc' )->first();
        
        // $device_number_of_year = 1;
        $device ->management_number = 'H'.''.$management_type_number;     
        $device ->device_name = $request ->device_name;
        $device ->status_id = $request ->status_id;
        $device ->employee_id = $request->employee_id;
        $device ->serial_number = $request ->serial_number;
        $device ->location = $request ->location;
        $device ->save();

        return redirect( 'devices' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $device = Device::find($id);
        return view('device/show',['device'=>$device]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        $owner = $device->owner;
        $owner_distincts = OwnerDistinct::all();
        $customers = Customer::all() -> pluck('name', 'id' );
        $statuses = Status::all()-> pluck('name', 'id' );
        $employees = Employee::all() -> pluck('name', 'id' );
        $types = Type::all()-> pluck('name', 'id' );
        return view('device/edit',
        ['device'=>$device, 'owner'=> $owner, 'owner_distincts' => $owner_distincts,'customers' => $customers,
        'employees' => $employees, 'statuses' => $statuses,'types' => $types
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $device = new Device();
        $owner = new Owner();
        $owner ->owner_distinct_id = $request->owner_distinct_id;
        switch($owner->owner_distinct ->relation){
            case 'customer':
                $owner ->foreign_id = $request->owner_customer_id;
                break;
            case 'employee':
                $owner ->foreign_id = $request->owner_employee_id;
                break;
            default:
                $owner ->foreign_id = 0;
        }
        $owner->save();

        $device ->owner_id = $owner ->id;
        $device ->registration_year = $request->registration_year;
        $device ->type_id = $request->type_id;
        $management_type_number = substr('00'.$device->type->number,-2);

        // $latest_device_year = Device::where( 'billing_year', $billing->billing_year )->orderBy( 'billing_number_of_year', 'desc' )->first();
        
        // $device_number_of_year = 1;
        $device ->management_number = 'H'.''.$management_type_number;     
        $device ->device_name = $request ->device_name;
        $device ->status_id = $request ->status_id;
        $device ->employee_id = $request->employee_id;
        $device ->serial_number = $request ->serial_number;
        $device ->location = $request ->location;
        $device ->save();

        return redirect( 'devices' );     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->destroy;
    }

}
