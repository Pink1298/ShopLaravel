<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantri', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('quantri_taiKhoan', 50)->comment('Tài khoản quản trị');
            $table->string('quantri_matKhau')->comment('Mật khẩu quản trị');

            $table->timestamp('quantri_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo tài khoản quản trị');
            $table->timestamp('quantri_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật tài khoản gần nhất');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quantri');
    }
}
