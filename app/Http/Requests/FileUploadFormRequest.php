<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileUploadFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            return [
                'file' => 'requied'
                'name' => 'requied|min:3|max:19',
                'email' => 'required|email',
                'phone' => 'required|min|10',
                'subject' => 'required|max:30',
                'message' => 'required|max:800'
            ];
        ];
    }
}
