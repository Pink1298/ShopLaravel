<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietkm', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('khuyenmai_ma')->comment('Mã khuyến mãi');
            $table->unsignedInteger('xe_ma')->comment('Mã xe');
            $table->dateTime('chitietkm_batDau')->comment('Thời điểm bắt đầu # Thời điểm bắt đầu khuyến mãi');
            $table->dateTime('chitietkm_ketThuc')->comment('Thời điểm bắt đầu # Thời điểm bắt đầu khuyến mãi');
            $table->text('chitietkm_noiDung')->comment('Thông tin chi tiết # Nội dung chi tiết chương trình khuyến mãi');
            $table->string('chitietkm_hinh')->comment('Hình ảnh khuyến mãi');
            $table->string('chitietkm_banner')->comment('Banner khuyến mãi');

            $table->timestamp('chitietkm_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chi tiết khuyến mãi');
            $table->timestamp('chitietkm_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chi tiết khuyến mãi gần nhất');
            
            $table->primary(['khuyenmai_ma', 'xe_ma']);
            $table-> foreign('khuyenmai_ma')->references('khuyenmai_ma')->on('khuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('chitietkm');
    }
}
