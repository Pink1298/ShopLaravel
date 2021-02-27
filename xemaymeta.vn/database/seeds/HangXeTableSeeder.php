<?php

use Illuminate\Database\Seeder;

class HangXeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $types = ["Honda", "Suzuki", "Yamaha"];
        $ma = ["HD", "SZK", "YMH"];
        $logo = ["honda.png", "suzuki.png", "yamaha.png"];
        $banner = ["bannerhd.jpg", "bannerszk.jpg", "bannerymh.jpg"];
        sort($types);

        $today = new DateTime();

        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'hangxe_ma'      => $ma[$i-1],
                'hangxe_ten'     => $types[$i-1],
                'hangxe_thongTin'   => 'Đang cập nhật',
                'hangxe_logo'  => $logo[$i-1],
                'hangxe_banner' => $banner[$i-1],
                'hangxe_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'hangxe_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('hangxe')->insert($list);
    }
}
