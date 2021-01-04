<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DeviceSeeder::class);
        $this->call(OwnerSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(OwnerDistinctSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(StatusSeeder::class);
    }
}
