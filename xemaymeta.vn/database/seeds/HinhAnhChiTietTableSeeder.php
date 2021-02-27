<?php

use Illuminate\Database\Seeder;

class HinhAnhChiTietTableSeeder extends Seeder
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
                'hinhanhct_ma'      => $i,
                'hinhanhct_loai'     => 'Sản phẩm',
                'hinhanhct_hinh'   => "sp ($i).png",
                'xe_ma'  => $i,
                'hinhanhct_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'hinhanhct_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('hinhanhchitiet')->insert($list);
    }
}
