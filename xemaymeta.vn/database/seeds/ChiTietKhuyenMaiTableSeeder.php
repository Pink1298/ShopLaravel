<?php

use Illuminate\Database\Seeder;

class ChiTietKhuyenMaiTableSeeder extends Seeder
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

        for ($i=0; $i < 3; $i++) {
            array_push($list, [
                'khuyenmai_ma'      => "KM$i",
                'xe_ma'             => $i+1,
                'chitietkm_batDau'  => $today->format('Y-m-d H:i:s'),
                'chitietkm_ketThuc' => $today->format('Y-m-d H:i:s'),
                'chitietkm_noiDung' => "Nội dung chi tiết khuyến mãi $i",
                'chitietkm_hinh'    => $i+1,
                'chitietkm_banner'  => "attilab.jpg",
                'chitietkm_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'chitietkm_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('chitietkm')->insert($list);
    }
}
