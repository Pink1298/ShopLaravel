<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('khuyenmai_ma', 10)->comment('Mã khuyến mãi');
            $table->string('khuyenmai_ten', 200)->comment('Tên khuyến mãi');
            $table->unsignedInteger('khuyenmai_giamGia')->default('0')->comment('Giảm giá');
            
            $table->timestamp('khuyenmai_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo khuyến mãi');
            $table->timestamp('khuyenmai_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật khuyến mãi gần nhất');
            
            $table->unique(['khuyenmai_ma','khuyenmai_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
