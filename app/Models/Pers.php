<?php

namespace App\Models;

use App\Models\Title;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pers extends Model
{
    use HasFactory;

    protected $fillable = [
        'nrp', 'nama', 'title_id', 'status_id', 'tmp_lahir', 'tgl_lahir', 'alamat', 'foto'
    ];

    public function title()
    {
        return $this->belongsTo(Title::class, 'title_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function foto()
    {
        return Storage::url($this->foto);
    }
}
