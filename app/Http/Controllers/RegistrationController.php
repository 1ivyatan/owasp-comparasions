<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use Illuminate\Support\Facades\Validator;

use App\Models\Registration;

use App\Http\Requests\Registration\RegistrationStoreRequest;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function index(Request $request): View
    {
        return view('registration.index');
    }

    public function create(Request $request): View
    {
        return view('registration.create');
    }

    public function show(Request $request, string $id): View
    {
        $registration = Registration::findOrFail($id);

        dd($registration);

        return view('registration.show');
    }

    public function store(RegistrationStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $registration = Registration::create($validated);

        return redirect(route('registration.show', [
            'id' => $registration->id
        ]));
    }
}
