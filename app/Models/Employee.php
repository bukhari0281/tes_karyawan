<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'email',
        'position',
        'department',
        'salery',
        'join_date',
        'marital_status',
        'employment_status'
    ];

    public function wife()
    {
        return $this->hasOne(Wife::class);
    }

    public function avatar()
    {
        return $this->hasOne(Avatar::class);
    }
}
