<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class position extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function user() {
        return $this->HasMany(user::class, 'position_id');
    }
}
