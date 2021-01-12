<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietdonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('donhang_ma')->comment('Mã đơn hàng');
            $table->unsignedInteger('xe_ma')->comment('Mã sản phẩm xe');
            $table->unsignedInteger('chitietdh_donGia')->comment('Đơn giá chi tiết đơn hàng');
            $table->unsignedTinyInteger('chitietdh_soLuong')->comment('Số lượng sản phẩm đơn hàng');

            $table->timestamp('chitietdh_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chi tiết đơn hàng');
            $table->timestamp('chitietdh_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chi tiết đơn hàng gần nhất');
            
            $table->foreign('donhang_ma')->references('donhang_ma')->on('donhang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('xe_ma')->references('xe_ma')->on('xe')->onDelete('CASCADE')->onUpdate('CASCADE');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdonhang');
    }
}
