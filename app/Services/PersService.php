<?php

namespace App\Services;

use App\Models\Pers;

class PersService
{
    public function store(array $data, $request)
    {
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('photo');
        }

        $per = Pers::create($data);

        return $per;
    }
}
