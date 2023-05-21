<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Newsrequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];

            case 'POST':
                return [
                    'title' => 'required',
                    'image' => 'required|mimes:jpg,jpeg,bmp,png,gif|max:10000',
                    'content' => 'required',
                    'category' => 'required',
                ];

            case 'PUT':
            case 'PATCH':
                return [
                    'title' => 'required',
                    'content' => 'required',
                    'category' => 'required',
                    'image' => 'mimes:jpg,jpeg,bmp,png,gif|max:10000',

                ];

            default:
                break;
        }
    }
}
