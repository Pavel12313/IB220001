<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'tweets' => 'required|max:140'
        ];
    }

    /**
     * Get the tweet content from the request.
     *
     * @return string
     */
    public function tweet(): string
    {
        return $this->input('tweets');
    }

    /**
     * Get the user's id from the request.
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->user()->id;
    }
}
