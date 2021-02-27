<?php

use Illuminate\Database\Seeder;

class QuanTriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        
        $today = new DateTime();
        // Admin
        array_push($list, [
            'quantri_taiKhoan'  => 'tthhoa',
            'quantri_matKhau'   => bcrypt('123456'),
            'quantri_taoMoi'    => $today->format('Y-m-d H:i:s'),
            'quantri_capNhat'   => $today->format('Y-m-d H:i:s'),
        ]);
        DB::table('quantri')->insert($list);
    }
}
