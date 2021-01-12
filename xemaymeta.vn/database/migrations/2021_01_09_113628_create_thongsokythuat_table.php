<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongsokythuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongsokythuat', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('xe_ma')->comment('Mã sản phẩm xe');
            $table->text('thongso_dongCo')->comment('Động cơ xe');
            $table->text('thongso_xyLanh')->comment('Xy lanh xe');
            $table->text('thongso_pitTong')->comment('Pittong xe');
            $table->text('thongso_tsNen')->comment('Tỷ số nén');
            $table->text('thongso_congSuat')->comment('Công suất xe');
            $table->text('thongso_momen')->comment('Mo men xe');
            $table->text('thongso_khoiDong')->comment('Khởi động');
            $table->text('thongso_truyenDong')->comment('Truyền động trục');
            $table->text('thongso_nhot')->comment('Nhớt xe');
            $table->text('thongso_xang')->comment('Xăng xe');
            $table->text('thongso_lopXe')->comment('Lớp xe');
            $table->text('thongso_phanhXe')->comment('Phanh xe');
            $table->text('thongso_phuocXe')->comment('Phuộc xe');
            $table->text('thongso_kichThuoc')->comment('Kích thước xe');
            $table->text('thongso_yenXe')->comment('Yên xe');
            $table->text('thongso_kc2banh')->comment('Khoảng cách 2 bánh');
            $table->text('thongso_gamXe')->comment('Gầm xe');
            $table->text('thongso_trongLuong')->comment('Trọng lượng xe');

            $table->timestamp('thongso_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo thông số');
            $table->timestamp('thongso_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật thông số gần nhất');

            $table->foreign('xe_ma')->references('xe_ma')->on('xe')->onDelete('CASCADE')->onUpdate('CASCADE');
           
            $table->unique(['xe_ma']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thongsokythuat');
    }
}
