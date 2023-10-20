<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeXemPhim extends Model
{
    use HasFactory;
    protected $table = 've_xem_phims';
    protected $fillable = [
        'id_lich_chieu',
        'so_ghe',
        'ma_ve',
        'gia_ve',
        'tinh_trang',
        'id_don_hang',
    ];

    const VE_KHONG_THE_BAN = -1;
    const VE_CO_THE_BAN = 0;
    const VE_DANG_GIU_CHO = 1;
    const VE_DA_BAN = 2;
}
