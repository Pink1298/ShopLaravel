<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongSoKyThuat extends Model
{
    const     CREATED_AT    = 'thongso_taoMoi';
    const     UPDATED_AT    = 'thongso_capNhat';

    protected $table        = 'thongsokythuat';
    protected $fillable     = ['thongso_dongCo', 'thongso_xyLanh', 'thongso_pitTong', 'thongso_tsNen', 'thongso_congSuat', 'thongso_momen', 'thongso_khoiDong', 'thongso_truyenDong', 'thongso_nhot', 'thongso_xang', 'thongso_lopXe', 'thongso_phanhXe', 'thongso_phuocXe', 'thongso_kichThuoc', 'thongso_yenXe', 'thongso_kc2banh', 'thongso_gamXe', 'thongso_trongLuong', 'thongso_taoMoi', 'thongso_capNhat'];
    protected $guarded      = ['xe_ma'];

    protected $primaryKey   = 'xe_ma';

    protected $dates        = ['thongso_taoMoi', 'thongso_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
