<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->withoutTrashed()],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'identity_number' => ['required', 'string', Rule::unique('users')->withoutTrashed(), 'size:10', 'regex:/^[a-zA-Z](1|2)\d{8}$/i'],
            'phone' => ['required', 'string', 'size:10', 'regex:/^09\d{2}(\d{6}|-\d{3}-\d{3})$/i'],
            'role' => ['required', 'integer', 'min:0', 'max:4'],
            'school' => ['required', 'string', 'max:255'],
            'privacy_policy' => ['accepted'],
        ];

        if ($request->input('role') == User::ROLE['senior-third']) {
            $rules += [
                'gsat_number' => ['required', 'string', Rule::unique('users')->withoutTrashed(), 'size:8', 'regex:/^1\d{7}$/i'],
            ];
        }

        $validated = Validator::make($request->input(), $rules, [], [
            'name' => __('Name'),
            'email' => __('Email'),
            'password' => __('Password'),
            'gsat_number' => __('GSAT number'),
            'identity_number' => __('Identity number'),
            'phone' => __('Phone number'),
            'role' => __('Role'),
            'school' => __('School'),
            'privacy_policy' => __('Privacy policy')
        ])->validate();

        $user = User::create(Arr::except($validated, ['password', 'password_confirmation']) + [
            'password' => Hash::make($request->input('password')),
            'meal' => false,
            'transportation' => 0,
        ]);

        // Grant permission if needed

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
