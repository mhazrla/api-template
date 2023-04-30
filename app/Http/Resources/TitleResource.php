<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TitleResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title_id' => $this->id,
            'title_name' => $this->title,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
