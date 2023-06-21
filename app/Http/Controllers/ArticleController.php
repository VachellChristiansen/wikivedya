<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function showSearch() : View {
        return view('welcome', [
            'current' => 'search',
            'article' => '',
            'lang' => '',
        ]);
    }

    public function showArticle($lang, $art) : View {
        return view('welcome', [
            'current' => 'article',
            'lang' => $lang,
            'article' => $art
        ]);
    }

    public function login(Request $request) : RedirectResponse {
        $credentials = $request->validate([
            'username' => 'required|regex:/^[a-zA-Z0-9\s]+$/|between:3,60',
            'password' => 'required|ascii|between:8,64',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/');
        }
        
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }
}
