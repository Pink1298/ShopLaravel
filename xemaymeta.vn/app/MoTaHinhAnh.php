<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoTaHinhAnh extends Model
{
    const     CREATED_AT    = 'motaha_taoMoi';
    const     UPDATED_AT    = 'motaha_capNhat';

    protected $table        = 'motahinhanh';
    protected $fillable     = ['hinhanhct_ma', 'motaha_tieuDe', 'motaha_noiDung', 'motaha_taoMoi', 'motaha_capNhat'];
    protected $guarded      = ['motaha_ma'];

    protected $primaryKey   = 'motaha_ma';

    protected $dates        = ['motaha_taoMoi', 'motaha_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
