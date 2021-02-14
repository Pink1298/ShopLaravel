<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnhChiTiet extends Model
{
    const     CREATED_AT    = 'hinhanhct_taoMoi';
    const     UPDATED_AT    = 'hinhanhct_capNhat';

    protected $table        = 'hinhanhchitiet';
    protected $fillable     = ['hinhanhct_loai', 'hinhanhct_hinh', 'xe_ma', 'hinhanhct_taoMoi', 'hinhanhct_capNhat'];
    protected $guarded      = ['hinhanhct_ma'];

    protected $primaryKey   = 'hinhanhct_ma';

    protected $dates        = ['hinhanhct_taoMoi', 'hinhanhct_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
