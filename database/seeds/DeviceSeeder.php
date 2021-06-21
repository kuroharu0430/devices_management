<?php

use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            [
            'id' => '1',
            'owner_distinct_id' => '1',
            'registrate_date' => '2021/1/7',
            'return_date' => '2023/1/7',
            'type_id' => '2',
            'management_number' => 'H2020',
            'device_name' => 'iPad',
            'serial_number' => 'A5B4',
            'status_id' => '1',
            'employee_id' => '1',
            'location' => '社外',
            'remarks' => '備考'
            ],
        ]);
    }
}
