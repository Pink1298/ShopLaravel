<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHangxeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hangxe', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('hangxe_ma', 10)->comment('Mã hãng xe'); 
            $table->string('hangxe_ten', 50)->comment('Tên hãng xe');
            $table->text('hangxe_thongTin')->comment('Thông tin hãng xe');
            $table->string('hangxe_logo', 200)->comment('Logo hãng');
            $table->string('hangxe_banner', 200)->comment('Banner hãng xe');
            $table->tinyInteger('hangxe_trangThai')->default('1')->comment('Trạng thái # Trạng thái hãng xe: 1-Đóng, 2-Khả dụng');

            $table->timestamp('hangxe_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo hãng xe');
            $table->timestamp('hangxe_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật hãng xe gần nhất');
            
            $table->unique(['hangxe_ma', 'hangxe_ten']);
        });
    }
//->autoIncrement() tự tăng
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hangxe');
    }
}
