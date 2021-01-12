<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhanhchitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanhchitiet', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('hinhanhct_ma')->autoIncrement()->comment('Mã hình ảnh chi tiết');
            $table->string('hinhanhct_loai', 30)->comment('Loại hình ảnh chi tiết');
            $table->string('hinhanhct_hinh')->comment('Hình ảnh chi tiết');
            $table->unsignedInteger('xe_ma')->comment('Mã sản phẩm xe');

            $table->timestamp('hinhanhct_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chi tiết hình ảnh');
            $table->timestamp('hinhanhct_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chi tiết hình ảnh gần nhất');
            
            $table-> foreign('xe_ma')->references('xe_ma')->on('xe')->onDelete('CASCADE')->onUpdate('CASCADE');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanhchitiet');
    }
}
