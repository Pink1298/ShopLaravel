<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietKM extends Model
{
    const     CREATED_AT    = 'chitietkm_taoMoi';
    const     UPDATED_AT    = 'chitietkm_capNhat';

    protected $table        = 'chitietkm';
    protected $fillable     = ['chitietkm_batDau', 'chitietkm_ketThuc', 'chitietkm_noiDung','chitietkm_hinh', 'chitietkm_banner', 'chitietkm_taoMoi', 'chitietkm_capNhat'];
    protected $guarded      = ['khuyenmai_ma', 'xe_ma'];

    protected $primaryKey   = ['khuyenmai_ma', 'xe_ma'] ;

    protected $dates        = ['chitietkm_batDau', 'chitietkm_ketThuc', 'chitietkm_taoMoi', 'chitietkm_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
