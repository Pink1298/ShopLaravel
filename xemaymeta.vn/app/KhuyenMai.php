<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    const     CREATED_AT    = 'khuyenmai_taoMoi';
    const     UPDATED_AT    = 'khuyenmai_capNhat';

    protected $table        = 'khuyenmai';
    protected $fillable     = ['khuyenmai_ten', 'khuyenmai_giamGia', 'khuyenmai_taoMoi', 'khuyenmai_capNhat'];
    protected $guarded      = ['khuyenmai_ma'];

    protected $primaryKey   = 'khuyenmai_ma';

    protected $dates        = ['khuyenmai_taoMoi', 'khuyenmai_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
