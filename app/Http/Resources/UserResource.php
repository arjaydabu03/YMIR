<?php

namespace App\Http\Resources;

use App\Http\Resources\RoleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            "id" => $this->id,
            "personal_info" => [
                "id_prefix" => $this->id_prefix,
                "id_no" => $this->id_no,
                "first_name" => $this->first_name,
                "middle_name" => $this->middle_name,
                "last_name" => $this->last_name,
                "suffix" => $this->suffix,
                "position" => $this->position,
            ],

            "mobile_no" => $this->mobile_no,

            "company" => [
                "id" => $this->company_id,
                "code" => $this->company_code,
                "name" => $this->company,
            ],
            "department" => [
                "id" => $this->department_id,
                "code" => $this->department_code,
                "name" => $this->department,
            ],
            "location" => [
                "id" => $this->location_id,
                "code" => $this->location_code,
                "name" => $this->location,
            ],
            "username" => $this->username,
            "role" => new RoleResource($this->role),

            "updated_at" => $this->updated_at,
        ];
    }
}
