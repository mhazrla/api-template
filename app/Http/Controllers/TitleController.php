<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Resources\TitleResource;

class TitleController extends Controller
{
    public function index()
    {
        $title = Title::with('pers')->get();
        return TitleResource::collection($title);
    }

    public function show($id)
    {
        $title = Title::with('pers')->findOrFail($id);
        return new TitleResource($title);
    }
}
