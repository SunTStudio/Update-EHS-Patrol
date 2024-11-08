<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    
    protected $guarded = [
        'id'
    ];    

    public function auditor() {
        return $this->belongsTo(user::class, 'auditor_id');
    }
    public function PIC() {
        return $this->belongsTo(user::class, 'PIC_id');
    }
    public function dept_PIC() {
        return $this->belongsTo(user::class, 'dept_pic_id');
    }
    public function dept_EHS() {
        return $this->belongsTo(user::class, 'dept_ehs_id');
    }
    public function area() {
        return $this->belongsTo(area::class, 'area_id');
    }
    public function laporan_genba() {
        return $this->belongsTo(genba::class, 'genba_id');
    }
    public function laporan_patrol() {
        return $this->belongsTo(ehs_patrol::class, 'patrol_id');
    }
    public function analisis() {
        return $this->belongsTo(analisis_genba::class, 'analisis_genba_id');
    }
    public function laporan_log() {
        return $this->hasMany(laporan::class, 'laporan_id');
    }
}
