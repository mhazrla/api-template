<?php

namespace App\Models;

use App\Models\Pers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['status'];
    protected $table = 'status';

    public function pers()
    {
        return $this->hasMany(Pers::class);
    }
}
