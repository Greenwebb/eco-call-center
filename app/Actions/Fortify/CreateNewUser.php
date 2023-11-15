<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();

            return User::create([
                'global_key' => $input['global_key'],
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                // 'type' => $input['type'],
                // 'is_bpo_approved' => $input['is_bpo_approved'],
                // 'sex' => $input['sex'],
                // 'occupation' => $input['occupation'],
                // 'global_secret_word' => $input['global_secret_word'],
                // 'company_name' => $input['company_name'],
                // 'c_email' => $input['c_email'],
                // 'c_phone' => $input['c_phone'],
                // 'c_address' => $input['c_address'],
                // 'c_logo' => $input['c_logo'],
                // 'global_user_id' => $input['global_user_id'],
                // 'xcode' => $input['xcode'],
                // 'pin' => $input['pin'],
                // 'c_phone2' => $input['c_phone2'],
                // 'c_slogan' => $input['c_slogan'],
                // 'c_city' => $input['c_city'],
                // 'c_country' => $input['c_country']
            ]);

      
    }
}
