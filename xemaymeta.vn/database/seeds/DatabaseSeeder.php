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
        // $this->call(UsersTableSeeder::class);
        // $this->call(KhuyenMaiTableSeeder::class);
        // $this->call(HangXeTableSeeder::class);
        // $this->call(QuanTriTableSeeder::class);
        // $this->call(KhachHangTableSeeder::class);
        // $this->call(LoaiXeTableSeeder::class);
        // $this->call(XeTableSeeder::class);
        // $this->call(HinhAnhChiTietTableSeeder::class);
        // $this->call(ChiTietKhuyenMaiTableSeeder::class);
        // $this->call(MoTaHinhAnhTableSeeder::class);
         $this->call(ThongSoKyThuatTableSeeder::class);
         
    }
}
