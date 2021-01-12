<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gopy', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('gy_ma')->autoIncrement()->comment('Mã góp ý');
            $table->dateTime('gy_thoiGian')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm góp ý # Thời điểm góp ý');
            $table->text('gy_chuDe')->comment('Chủ đề # Chủ đề góp ý');
            $table->text('gy_noiDung')->comment('Góp ý # Nội dung góp ý');
            $table->unsignedTinyInteger('kh_ma')->comment('Khách hàng # kh_ma # kh_taiKhoan # Mã khách hàng');
            $table->unsignedTinyInteger('gy_trangThai')->default('3')->comment('Trạng thái # Trạng thái góp ý: 1-Khóa, 2-Hiển thị, 3-Chờ duyệt');
            
            $table->timestamp('gy_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo góp ý');
            $table->timestamp('gy_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật góp ý gần nhất');
            
            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gopy');
    }
}
