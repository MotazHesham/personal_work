<?php

namespace App\Http\Requests;

use App\Models\MyProject;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMyProjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('my_project_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
