<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HangXe extends Model
{
    const     CREATED_AT    = 'hangxe_taoMoi';
    const     UPDATED_AT    = 'hangxe_capNhat';

    protected $table        = 'hangxe';
    protected $fillable     = ['hangxe_ten', 'hangxe_thongTin', 'hangxe_logo','hangxe_banner', 'hangxe_taoMoi', 'hangxe_capNhat', 'hangxe_trangThai'];
    protected $guarded      = ['hangxe_ma'];

    protected $primaryKey   = 'hangxe_ma';

    protected $dates        = ['hangxe_taoMoi', 'hangxe_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}