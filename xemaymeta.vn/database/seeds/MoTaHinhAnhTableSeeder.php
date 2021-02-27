<?php

use Illuminate\Database\Seeder;

class MoTaHinhAnhTableSeeder extends Seeder
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
        $types = ["SÀN ĐỂ CHÂN RỘNG","PHUN XĂNG ĐIỆN TỬ (PGM-FI)","ĐỘNG CƠ THÔNG MINH HIỆN ĐẠI","CHÂN CHỐNG BÊN AN TOÀN",
        "NGĂN CHỨA ĐỒ HIỆN ĐẠI", "THIẾT KẾ PHÍA SAU SANG TRỌNG", "MẶT ĐỒNG HỒ CAO CẤP", "THIẾT KẾ PHÍA TRƯỚC HIỆN ĐẠI"];
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'motaha_ma'         => $i,
                'hinhanhct_ma'      => $i,
                'motaha_tieuDe'  => $types[$i-1],
                'motaha_noiDung' => "Nội dung mô tả hình ảnh $i",
                'motaha_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'motaha_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('motahinhanh')->insert($list);
    }
}
