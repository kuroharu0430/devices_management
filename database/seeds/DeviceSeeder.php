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
            'owner_id' => '1',
            'type_id' => '2',
            'registration_year' => '2020',
            'management_number' => 'H2020',
            'device_name' => 'iPad',
            'serial_number' => 'A5B4',
            'status_id' => '1',
            'employee_id' => '1',
            'location' => '社外',
            'lease_end_date' => '2020-12-2',
            'remarks' => 'bikou'
            ],
        ]);
    }
}
