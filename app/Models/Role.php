<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // untuk memperbaiki field_id

    protected $guarded = ['id'];

    public function useres() {
        return $this->hasMany(User::class);
    }
}
