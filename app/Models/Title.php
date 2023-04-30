<?php

namespace App\Models;

use App\Models\Pers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Title extends Model
{
    use HasFactory;

    protected $fillable = ['title'];


    public function pers()
    {
        return $this->hasMany(Pers::class);
    }
}
