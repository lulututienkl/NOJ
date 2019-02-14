<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    /**
     * Show the Account Login and Register Page.
     *
     * @return Response
     */
    public function account(Request $request)
    {
        return Auth::check() ? redirect("/account/dashboard") : redirect("/login");
    }
}