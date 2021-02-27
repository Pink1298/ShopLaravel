<?php

use Illuminate\Database\Seeder;

class KhuyenMaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $types = ["Mừng xuân Tân Sửu", "Valentine 14/02/2021"];
        $faker    = Faker\Factory::create('vi_VN');
        $today = new DateTime();

        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'khuyenmai_ma'      => "KM$i",
                'khuyenmai_ten'     => $types[$i-1],
                'khuyenmai_giamGia' => $faker->numberBetween(10,20),
                'khuyenmai_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'khuyenmai_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        array_push($list,[
            'khuyenmai_ma'      => "KM0",
            'khuyenmai_ten'     => 'Chưa có thông tin khuyến mãi',
            'khuyenmai_giamGia' => 0,
            'khuyenmai_taoMoi'  => $today->format('Y-m-d H:i:s'),
            'khuyenmai_capNhat' => $today->format('Y-m-d H:i:s')
        ]);
        DB::table('khuyenmai')->insert($list);
    }
}
