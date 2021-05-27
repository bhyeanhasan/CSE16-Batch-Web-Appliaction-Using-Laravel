<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;


    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users',
                function ($attribute, $value, $fail)
                {
                    if (strpos($value, "@cse.pstu.ac.bd") == false) {
                        $fail($attribute.' is not belong with cse faculty.');
                    }
                },
            ],
            'password' => $this->passwordRules(),
        ])->validate();

//        $this->validate($input,[
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users',
//                function ($attribute, $value, $fail)
//                {
//                    if (strpos($value, "@cse.pstu.ac.bd") == false) {
//                        $fail($attribute.' is not belong with cse faculty.');
//                    }
//                },
//            ],
//
//            'name'           =>  ['required', 'string', 'max:255'],
//            'password'         =>  $this->passwordRules(),
//
//        ]);

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
