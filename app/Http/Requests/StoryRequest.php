<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'             => 'required|string',
            'category_id'       => 'required|numeric',
            'level_id'          => 'required|numeric', // Perbaikan: ubah ke numeric jika level_id adalah angka
            'author'            => 'required|string', // Tambahkan validasi untuk author
            'slug'              => 'required|string', 
            'meta_title'        => 'required|string',
            'small_description' => 'required|string',
            'images.*'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descriptions.*'    => 'required|string',
            'image_cover'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'trending'          => 'nullable|boolean',
        ];
    }
}
