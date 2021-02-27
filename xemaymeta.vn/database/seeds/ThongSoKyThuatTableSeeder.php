<?php

use Illuminate\Database\Seeder;

class ThongSoKyThuatTableSeeder extends Seeder
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

        for ($i=1; $i <= 30; $i++) {
            array_push($list, [
                'xe_ma'                 => $i,
                'thongso_dongCo'        => "Xe máy $i",
                'thongso_xyLanh'        => "Thông số xy lanh xe $i",
                'thongso_pitTong'       => "Thông số pit tong xe $i",
                'thongso_tsNen'         => "Thông số tsNen xe $i",
                'thongso_congSuat'      => "Thông số công suất xe $i",
                'thongso_momen'         => "Thông số momen xe $i",
                'thongso_khoiDong'      => "Thông số khởi động xe $i",
                'thongso_truyenDong'    => "Thông số truyen dong xe $i",
                'thongso_nhot'          => "Thông số nhớt xe $i",
                'thongso_xang'          => "Thông số xăng xe $i",
                'thongso_lopXe'         => "Thông số lốp xe xe $i",
                'thongso_phanhXe'       => "Thông số phanh xe xe $i",
                'thongso_phuocXe'       => "Thông số phuộc xe xe $i",
                'thongso_kichThuoc'     => "Thông số kích thước xe $i",
                'thongso_yenXe'         => "Thông số yên xe xe $i",
                'thongso_kc2banh'       => "Thông số khoảng cách 2 bánh xe $i",
                'thongso_gamXe'         => "Thông số gầm xe xe $i",
                'thongso_trongLuong'         => "Thông số trọng lượng xe $i",
                'thongso_taoMoi'             => $today->format('Y-m-d H:i:s'),
                'thongso_capNhat'            => $today->format('Y-m-d H:i:s'),
            ]);
        }
        DB::table('thongsokythuat')->insert($list);
    }
}
