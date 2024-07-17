<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'address' => ['required|string|max:255'],
            'phone' => ['required|string|max:15'],
        ];
    }

    function messages()
    {
        return [
            'name.required' => 'Họ Tên chưa nhập.',
            'address.required' => 'Địa chỉ chưa nhập.',
            'phone.required' => 'Số điện thoại chưa nhập.',
            'email.required' => 'Địa chỉ Email chưa nhập.',
        ];
    }

    function attributes(){
        return [
            'name' => 'Họ và tên',
            'address' => 'Địa chỉ nhận hàng',
            'email' => 'Địa chỉ Email',
            'phone' => 'Số điẹn thoại',
        ];
    }
}
