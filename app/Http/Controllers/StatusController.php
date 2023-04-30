<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Resources\StatusResource;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::with('pers')->get();
        return StatusResource::collection($status);
    }

    public function show($id)
    {
        $status = Status::with('pers')->findOrFail($id);
        return new StatusResource($status);
    }
}
