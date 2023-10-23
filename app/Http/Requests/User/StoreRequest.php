<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "personal_info.id_no" => [
                "required",
                "string",

                $this->route()->id
                    ? "unique:users,id_no," . $this->route()->id
                    : "unique:users,id_no",
            ],
            "personal_info.id_prefix" => "required",
            "personal_info.first_name" => "required",
            "personal_info.middle_name" => "required",
            "personal_info.last_name" => "required",
            "personal_info.position" => "required",
            "location.id" => "required",
            "location.code" => "required",
            "location.name" => "required",
            "department.id" => "required",
            "department.code" => "required",
            "department.name" => "required",
            "company.id" => "required",
            "company.code" => "required",
            "company.name" => "required",
            "role_id" => "required|exists:role,id,deleted_at,NULL",
            "mobile_no" => [
                "required_if:role_id,7",
                "exclude_unless:role_id,7",
                "regex:[63]",
                "digits:12",
                $this->route()->id
                    ? "unique:users,mobile_no," . $this->route()->id
                    : "unique:users,mobile_no",
            ],
            "username" => [
                "required",
                "string",
                $this->route()->id
                    ? "unique:users,username," . $this->route()->id
                    : "unique:users,username",
            ],
        ];
    }

    public function attributes()
    {
        return [
            "personal_info.id_no" => "ID no",
        ];
    }

    public function messages()
    {
        return [
            "required_if" => "The :attribute field is required.",
            "exists" => "Role is not Registered.",
            "id_no.unique" => "The :attribute field is already been taken.",
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            // $validator->errors()->add("custom", "STOP!");
            // $validator->errors()->add("custom", $this->route()->id);
        });
    }
}
