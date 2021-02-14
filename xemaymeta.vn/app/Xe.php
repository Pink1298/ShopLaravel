<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    const     CREATED_AT    = 'xe_taoMoi';
    const     UPDATED_AT    = 'xe_capNhat';

    protected $table        = 'xe';
    protected $fillable     = ['xe_ten', 'xe_phanKhoi', 'xe_uuTien', 'xe_gia', 'xe_soLuongTon', 'khuyenmai_ma', 'loai_ma', 'hangxe_ma', 'xe_taoMoi', 'xe_capNhat'];
    protected $guarded      = ['xe_ma'];

    protected $primaryKey   = 'xe_ma';

    protected $dates        = ['xe_taoMoi', 'xe_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
