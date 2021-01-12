<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('donhang_ma')->autoIncrement()->comment('Mã đơn hàng');
            $table->string('kh_taiKhoan', 50)->comment('Tài khoản # Tài khoản');
            $table->string('donhang_diaChi', 50)->comment('Địa chỉ # Địa chỉ đơn hàng');
            $table->dateTime('donhang_ngayDat')->comment('Thời điểm bắt đầu # Thời điểm bắt đầu khuyến mãi');
            $table->dateTime('donhang_ngayGiao')->comment('Thời điểm bắt đầu # Thời điểm bắt đầu khuyến mãi');
            $table->tinyInteger('donhang_trangThai')->default('1')->comment('Trạng thái # Trạng thái đơn hàng: 1-Chưa xử lý, 2-Đã xử lý');
            
            $table->timestamp('donhang_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo đơn hàng');
            $table->timestamp('donhang_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật đơn hàng gần nhất');
            
            $table-> foreign('kh_taiKhoan')->references('kh_taiKhoan')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
