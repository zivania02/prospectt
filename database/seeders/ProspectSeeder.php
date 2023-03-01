<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Addprospect;
use Carbon\Carbon;

class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Addprospect::create([
        'date' => Carbon::now(),
        'firstname'=>'john',
        'lastname'=>'doe',
        'tgl_lahir'=>'2022-10-10',
        'email'=>'john@gmail.com',
        'address'=>'Jakarta',
        'office'=>'jdcompany',
        'phone'=>'085678869621',
        'potenvalue'=>'12000000',
        'remark'=>'potensial',
    ]);

    }
}
