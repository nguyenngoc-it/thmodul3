<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agency= new Agency();
        $agency->name='Toyota';
        $agency->phone='0123456789';
        $agency->email='toyota@gmail.com';
        $agency->address= 'Ha Noi';
        $agency->manager= 'admin';
        $agency->status= 1;
        $agency->save();
    }
}
