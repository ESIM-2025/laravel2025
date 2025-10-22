<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    public function authorize()
    {
        return true; // en producción verificar Auth
    }

    public function rules()
    {
        return [
            'file' => ['required','file','max:10240','mimes:jpg,jpeg,png,gif,webp,pdf,doc,docx,txt'],
            'type' => ['required','in:public,private'],
        ];
    }
}
