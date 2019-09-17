<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeUserDataRequest extends FormRequest
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

    public function rules()
    {
        if ($this->old_password && $this->password) {
            return [
                'name' => 'required|unique:users,name, ' . auth()->id(),
                'email' => 'email|required|unique:users,email, ' . auth()->id(),
                'old_password' => 'required|min:5',
                'password' => 'required|min:5',
                'phone' => 'numeric|nullable|min:9|unique:users,phone, ' . auth()->id(),
            ];
        } else {
            return [
                'name' => 'required|unique:users,name, ' . auth()->id(),
                'email' => 'email|required|unique:users,email, ' . auth()->id(),
                'phone' => 'numeric|nullable|min:9|unique:users,phone, ' . auth()->id(),
            ];
        }
    }

}
