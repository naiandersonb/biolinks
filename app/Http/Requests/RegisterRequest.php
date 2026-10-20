<?php

namespace App\Http\Requests;

use App\Models\User;
use Auth;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/**
 * @property-read string $name
 * @property-read string $email
 * @property-read string $password
 */
class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'confirmed', 'unique:users'],
            'password' => ['required', Password::defaults()],
        ];
    }

    public function tryToRegister()
    {
        // 1. criar um usuário

        // uma forma de criar usuário
        // $user = new User();
        // $user->name = $this->name;
        // $user->email = $this->email;
        // $user->password = $this->password;
        // $user->save();

        // outra forma de criar usuário
        $user = User::query()->create($this->validated());

        // 2. logar com esse usuário
        Auth::login($user);

        return true;

    }
}
