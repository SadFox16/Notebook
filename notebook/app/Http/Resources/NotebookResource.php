<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotebookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'title' => $this->title,
            'company' => $this->company,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'birth_date' => $this->birth_date,
            'image' => $this->image,
        ];
    }
}
