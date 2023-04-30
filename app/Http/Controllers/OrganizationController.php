<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrganizationResource;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organization = Organization::with('pers')->get();
        return OrganizationResource::collection($organization);
    }

    public function show($id)
    {
        $organization = Organization::with('pers')->findOrFail($id);
        return new OrganizationResource($organization);
    }
}
