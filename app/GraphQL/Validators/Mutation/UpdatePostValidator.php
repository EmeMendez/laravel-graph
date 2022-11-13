<?php

namespace App\GraphQL\Validators\Mutation;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

final class UpdatePostValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'id' => ['required','exists:posts,id'],
            'title' => ['string', Rule::unique('posts', 'title')->ignore($this->arg('id'), 'id') ],
            'user_id' => ['required','exists:users,id']
        ];
    }


    public function messages () : array
    {
        return [
            'id.exists' => 'El id no es válido',
        ];
    }
}
