<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use Illuminate\Support\Facades\Validator;

use App\Models\Registration;

use App\Http\Requests\Registration\RegistrationStoreRequest;

class RegistrationController extends Controller
{
    public function index(): View
    {
        return view('registrations.index');
    }

    public function create(): View
    {
        return view('registrations.create');
    }

    public function show(Registration $registration): View
    {
        return view('registrations.show', compact('registration'));
    }

    public function edit(Registration $registration): View
    {
        return view('registrations.edit', compact('registration'));
    }

    public function store(RegistrationStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $registration = Registration::create($validated);

        return redirect(route('registrations.show', [
            'id' => $registration->id
        ]));
    }

    public function update(RegistrationStoreRequest $request, Registration $registration): RedirectResponse
    {
        $validated = $request->validated();

        $registration->update($validated);

        return redirect(route('registrations.show', [
            'id' => $registration->id
        ]));
    }

    public function destroy(Registration $registration): RedirectResponse
    {
        $registration->delete();

        return redirect(route('registrations.index'));
    }
}
