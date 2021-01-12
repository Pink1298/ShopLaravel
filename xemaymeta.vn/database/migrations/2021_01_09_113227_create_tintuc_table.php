<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTintucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('tintuc_ma')->autoIncrement()->comment('Mã tin tức');
            $table->text('tintuc_tieuDe')->comment('Tiêu đề tin tức');
            $table->text('tintuc_noiDung')->comment('Nội dung tin tức');
            $table->text('tintuc_hinhanh')->comment('Hình ảnh tin tức');
            $table->text('tintuc_banner')->comment('Banner tin tức');

            $table->timestamp('tintuc_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo tin tức');
            $table->timestamp('tintuc_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật tin tức gần nhất');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tintuc');
    }
}
