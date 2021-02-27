<?php

use App\HangXe;
use Illuminate\Database\Seeder;

class XeTableSeeder extends Seeder
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
        $faker    = Faker\Factory::create('vi_VN');
        for ($i=1; $i <= 30; $i++) {
            array_push($list, [
                'xe_ma'                 => $i,
                'xe_ten'                => "Xe máy $i",
                'xe_phanKhoi'           => $faker->randomElement(array ('115','125','135','150')),
                'xe_uuTien'             => ($i > 20 ? 1 : 2),
                'xe_gia'                => $faker->numberBetween(18, 70) * 1000000,
                'xe_soLuongTon'         => $faker->numberBetween(5,10),
                'khuyenmai_ma'          => $faker->randomElement(array ('KM0','KM1','KM2')),
                'loai_ma'               => $faker->numberBetween(1,3),
                'hangxe_ma'             => $faker->randomElement(array('HD','SZK', 'YMH')),
                'xe_taoMoi'             => $today->format('Y-m-d H:i:s'),
                'xe_capNhat'            => $today->format('Y-m-d H:i:s'),
            ]);
        }
        DB::table('xe')->insert($list);
    }
}
