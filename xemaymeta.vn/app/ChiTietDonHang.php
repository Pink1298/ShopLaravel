<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    const     CREATED_AT    = 'chitietdh_taoMoi';
    const     UPDATED_AT    = 'chitietdh_capNhat';

    protected $table        = 'chitietdonhang';
    protected $fillable     = ['chitietdh_donGia', 'chitietdh_soLuong', 'chitietdh_taoMoi','chitietdh_capNhat'];
    protected $guarded      = ['donhang_ma', 'xe_ma'];

    protected $primaryKey   = ['donhang_ma', 'xe_ma'];

    protected $dates        = ['chitietdh_taoMoi', 'chitietdh_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
