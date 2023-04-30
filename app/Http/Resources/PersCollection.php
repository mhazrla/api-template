<?php

namespace App\Http\Resources;

use App\Http\Resources\PersResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PersCollection extends ResourceCollection
{
    public static $wrap = 'pers';
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return PersResource::collection($this->collection);
    }
}
