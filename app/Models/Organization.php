<?php

namespace App\Models;

use App\Models\Pers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['organization'];


    public function pers()
    {
        return $this->hasMany(Pers::class);
    }
}
