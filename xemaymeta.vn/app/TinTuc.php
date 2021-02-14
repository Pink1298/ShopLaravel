<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    const     CREATED_AT    = 'tintuc_taoMoi';
    const     UPDATED_AT    = 'tintuc_capNhat';

    protected $table        = 'tintuc';
    protected $fillable     = ['tintuc_tieuDe', 'tintuc_noiDung', 'tintuc_hinhanh', 'tintuc_banner', 'tintuc_taoMoi', 'tintuc_capNhat'];
    protected $guarded      = ['tintuc_ma'];

    protected $primaryKey   = 'tintuc_ma';

    protected $dates        = ['tintuc_taoMoi', 'tintuc_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
