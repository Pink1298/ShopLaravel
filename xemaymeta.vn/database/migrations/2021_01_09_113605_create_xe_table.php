<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xe', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('xe_ma')->autoIncrement()->comment('Mã sản phẩm xe');
            $table->string('xe_ten')->comment('Tên sản phẩm xe');
            $table->string('xe_phanKhoi')->comment('Phân khối xe');
            $table->string('xe_uuTien')->comment('Độ ưu tiên');
            $table->string('xe_gia')->comment('Giá sản phẩm xe');
            $table->string('xe_soLuongTon')->comment('Số lượng tồn sản phẩm');
            $table->string('khuyenmai_ma')->comment('Mã khuyến mãi');
            $table->unsignedTinyInteger('loai_ma')->comment('Mã loại xe');
            $table->string('hangxe_ma')->comment('Mã hãng xe');

            $table->timestamp('xe_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo sản phẩm xe');
            $table->timestamp('xe_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật sản phẩm xe gần nhất');

            $table->foreign('khuyenmai_ma')->references('khuyenmai_ma')->on('khuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('loai_ma')->references('loai_ma')->on('loaixe')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('hangxe_ma')->references('hangxe_ma')->on('hangxe')->onDelete('CASCADE')->onUpdate('CASCADE');

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
        Schema::dropIfExists('xe');
    }
}
