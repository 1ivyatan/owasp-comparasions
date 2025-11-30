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
        $registrations = Registration::all();

        return view('registrations.index', compact('registrations'));
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

        return to_route('registrations.show', [
            'registration' => $registration->id
        ])->with('status', __('Pieteikums tika izveidots!'));
    }

    public function update(RegistrationStoreRequest $request, Registration $registration): RedirectResponse
    {
        $validated = $request->validated();

        $registration->update($validated);

        return to_route('registrations.show', [
            'registration' => $registration->id
        ])->with('status', __('Pieteikuma dati tika izmanītas!'));
    }

    public function destroy(Registration $registration): RedirectResponse
    {
        $id = $registration->id;

        $registration->delete();

        return to_route('registrations.index')->with('status', __('Pieteikums'.$id.'tika dzēsts!'));
    }
}
