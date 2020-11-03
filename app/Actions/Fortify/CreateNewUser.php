<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'lname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'register_number' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date', 'max:255'],
            'undsen_zahirgaa' => ['required', 'string', 'max:255'],
            'skill' => ['required', 'string', 'max:255'],
            'odoogiin_hayg' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'success' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'lname' => $input['lname'],
            'fname' => $input['lname'],
            'register_number' => $input['register_number'],
            'gender' => $input['gender'],
            'birthdate' => $input['birthdate'],
            'undsen_zahirgaa' => $input['undsen_zahirgaa'],
            'skill' => $input['skill'],
            'odoogiin_hayg' => $input['odoogiin_hayg'],
            'email' => $input['email'],
            'success' => $input['success'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
