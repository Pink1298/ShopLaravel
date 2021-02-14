<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GopY extends Model
{
    const     CREATED_AT    = 'gy_taoMoi';
    const     UPDATED_AT    = 'gy_capNhat';

    protected $table        = 'gopy';
    protected $fillable     = ['gy_thoiGian', 'gy_chuDe', 'gy_noiDung', 'gy_trangThai', 'gy_taoMoi', 'gy_capNhat', 'kh_ma'];
    protected $guarded      = ['gy_ma'];

    protected $primaryKey   = 'gy_ma';

    protected $dates        = ['gy_thoiGian', 'gy_taoMoi', 'gy_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
