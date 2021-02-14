<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuanTri extends Model
{
    const     CREATED_AT    = 'quantri_taoMoi';
    const     UPDATED_AT    = 'quantri_capNhat';

    protected $table        = 'quantri';
    protected $fillable     = ['quantri_matKhau', 'quantri_taoMoi', 'quantri_capNhat'];
    protected $guarded      = ['quantri_taiKhoan'];

    protected $primaryKey   = 'quantri_taiKhoan';

    protected $dates        = ['quantri_taoMoi', 'quantri_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
