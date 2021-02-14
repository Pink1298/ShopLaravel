<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    const     CREATED_AT    = 'donhang_taoMoi';
    const     UPDATED_AT    = 'donhang_capNhat';

    protected $table        = 'donhang';
    protected $fillable     = ['kh_taiKhoan', 'donhang_diaChi', 'donhang_ngayDat', 'donhang_ngayGiao', 'donhang_trangThai', 'donhang_taoMoi', 'donhang_capNhat'];
    protected $guarded      = ['donhang_ma'];

    protected $primaryKey   = 'donhang_ma';

    protected $dates        = ['donhang_ngayDat', 'donhang_ngayGiao', 'donhang_taoMoi', 'donhang_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
