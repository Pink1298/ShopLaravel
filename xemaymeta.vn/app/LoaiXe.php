<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiXe extends Model
{
    const     CREATED_AT    = 'loai_taoMoi';
    const     UPDATED_AT    = 'loai_capNhat';

    protected $table        = 'loaixe';
    protected $fillable     = ['loai_ten', 'loai_taoMoi', 'loai_capNhat'];
    protected $guarded      = ['loai_ma'];

    protected $primaryKey   = 'loai_ma';

    protected $dates        = ['loai_taoMoi', 'loai_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
