<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{

    /**
     * @return View
     */
    public function login(): View
    {
        return view('layouts.login');
    }

    /**
     * @param AuthenticateRequest $request
     *
     * @return RedirectResponse
     */
    public function auth(AuthenticateRequest $request): RedirectResponse
    {
        $valid = $request->validated();
        $valid['password'] = passwordGeneration(password: $valid['password']);

        if (Auth::attempt(['email' => $valid['email'], 'password' => $valid['password']], $request->has('remember'))) {

            $request->session()->regenerate();

            return redirect()->intended('admin/home');
        }

        return back()->withErrors([
            'authenticate' => 'Bilgileriniz Kayıtlarımız İle Eşleşmiyor.',
        ]);
    }


    /**
     * @param Request $request
     *
     * @return RedirectResponse
     */
    function logout(Request $request): RedirectResponse
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login.page');
    }
}
