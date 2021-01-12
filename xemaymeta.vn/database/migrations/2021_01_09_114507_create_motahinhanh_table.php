<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotahinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motahinhanh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('motaha_ma')->autoIncrement()->comment('Mã mô tả hình ảnh');
            $table->unsignedTinyInteger('hinhanhct_ma')->comment('Mã hình ảnh');
            $table->text('motaha_tieuDe')->comment('Tiêu đề mô tả hình ảnh');
            $table->text('motaha_noiDung')->comment('Nội dung mô tả hình ảnh');

            $table->timestamp('motaha_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo mô tả hình ảnh');
            $table->timestamp('motaha_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật mô tả hình ảnh gần nhất');
            
            $table->foreign('hinhanhct_ma')->references('hinhanhct_ma')->on('hinhanhchitiet')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motahinhanh');
    }
}
