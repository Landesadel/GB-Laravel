<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:5',
            'sources_id' => 'array',
            'sources_id.*' => 'exists:source,id',
            'description' => 'nullable|string',
        ];
    }

    public function getSourcesId(): array
    {
        return (array) $this->validated('sources_id');
    }
}
