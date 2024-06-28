<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return response()->json($request->user()->only('name', 'email'));
    }

    public function update(Request $request)
    {
        $validatedData =   $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore(auth()->user())]
        ]);

        // auth()->user()->update($validatedData); //this work too
        $user = User::find(Auth::id());
        $user->update($validatedData);

        return response()->json($validatedData, Response::HTTP_ACCEPTED);
    }
}