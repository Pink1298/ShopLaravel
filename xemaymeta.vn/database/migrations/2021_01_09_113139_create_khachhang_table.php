<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('kh_ma')->autoIncrement()->comment('Mã khách hàng');
            $table->string('kh_taiKhoan', 50)->comment('Tài khoản # Tài khoản');
            $table->string('kh_matKhau', 256)->comment('Mật khẩu # Mật khẩu');
            $table->string('kh_hoTen', 100)->comment('Họ tên # Họ tên');
            $table->unsignedTinyInteger('kh_gioiTinh')->default('1')->comment('Giới tính # Giới tính: 0-Nữ, 1-Nam, 2-Khác');
            $table->string('kh_email', 100)->comment('Email # Email');
            $table->dateTime('kh_ngaySinh')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Ngày sinh # Ngày sinh');
            $table->string('kh_diaChi', 250)->comment('Địa chỉ # Địa chỉ'); //->nullable()->default('NULL')
            $table->string('kh_dienThoai', 11)->comment('Điện thoại # Điện thoại'); //->nullable()->default('NULL')
            $table->timestamp('kh_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo khách hàng');
            $table->timestamp('kh_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật khách hàng gần nhất');
            $table->unsignedTinyInteger('kh_trangThai')->default('3')->comment('Trạng thái # Trạng thái khách hàng: 1-Khóa, 2-Khả dụng, 3-Chưa kích hoạt');
            
            $table->unique(['kh_taiKhoan', 'kh_email', 'kh_dienThoai']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
