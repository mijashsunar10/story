<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStorydetailsRequest extends FormRequest
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
                'title' =>'required|string|max:255',
                'description' =>'nullable|string',
                'main_characters' =>'nullable|string',
                'author' =>'required|string|max:255',
                // 'category_id' => 'required|exists:categories|id',
                'category_id' => 'nullable|exists:categories,id',
                'user_id'=> 'required|exists:users,id',
                // 'user_id'=> 'nullable|exists:users|id',
                'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
                // 'image' => 'nullable|string',
                'audience' => 'required|in:child,young,adult',
                'language' => 'required|string|max:255',
                'copyright'=>'required|in:All_rights_reserved,Public_Domain'
        ];
    }
}
