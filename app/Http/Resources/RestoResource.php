<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'rastaurant id' => $this->id,
            'rastaurant name' => $this->name,
            'rastaurant email' => $this->email,
            'rastaurant address' => $this->address
        ];
    }
}
