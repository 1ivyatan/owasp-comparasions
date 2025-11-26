<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index(Request $request): View
    {
        return view('registrations.index');
    }
}
