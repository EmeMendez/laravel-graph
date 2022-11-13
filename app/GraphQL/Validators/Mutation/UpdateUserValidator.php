<?php

namespace App\GraphQL\Validators\Mutation;

use Illuminate\Validation\Rule;
use Nuwave\Lighthouse\Validation\Validator;

final class UpdateUserValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'id' => ['required'],
            'name' => ['required'],
            'email' => [ 'required', Rule::unique('users', 'email')->ignore($this->arg('id'), 'id') ]
        ];
    }
}
