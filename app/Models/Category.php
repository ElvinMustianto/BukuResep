<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $load = ['user', 'category'];

    public function pastry()
    {
        return $this->hasMany(Pastry::class);
    }
}