<?php

namespace App\Http\Resources\V1;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageManipulationResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'original' => URL::to($this->path),
            'output' => URL::to($this->output_path),
            'album_id' => $this->album_id,
            'created_at' => $this->id,
        ];
    }
}
