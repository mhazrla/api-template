<?php

namespace App\Http\Resources;

use App\Http\Resources\TitleResource;
use App\Http\Resources\StatusResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PersResource extends JsonResource
{
    public static $wrap = 'per';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'per_id' => $this->id,
            'nrp' => $this->nrp,
            'nama' => $this->nama,
            'title' => new TitleResource($this->whenLoaded('title')),
            'tmp_lahir' => $this->tmp_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'alamat' => $this->alamat,
            'status' => new StatusResource($this->whenLoaded('status')),
            'organization' => new OrganizationResource($this->whenLoaded('organization')),
            'foto' => $this->foto(),
        ];
    }
}
