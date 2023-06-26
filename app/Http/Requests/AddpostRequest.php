<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddpostRequest extends FormRequest
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
            'description'=>'required|min:5|max:500',
            'tittle'=>'required|min:5|max:50',
            'file'=>'required|mimes:jpeg,bmp,png,mp4,mp3,gif',
            'coursetype'=>'required|in:dance,singing,publicSpeaking',
            'postingtype'=>'required|in:draft|post',
            
        ];
    }
}
