<?php

use Illuminate\Database\Seeder;

class LoaiXeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];

        $types = ["Xe côn tay", "Xe số", "Xe tay ga"];
        sort($types);

        $today = new DateTime();

        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'loai_ma'      => $i,
                'loai_ten'     => $types[$i-1],
                'loai_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'loai_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('loaixe')->insert($list);
    }
}
