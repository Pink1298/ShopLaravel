<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaixeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaixe', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('loai_ma')->autoIncrement()->comment('Mã loại xe');
            $table->string('loai_ten')->comment('Tên loại xe');

            $table->timestamp('loai_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo loại xe');
            $table->timestamp('loai_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật loại xe gần nhất');
            
            $table->unique(['loai_ma', 'loai_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaixe');
    }
}
