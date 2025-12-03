<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'ID' => 'required|integer|unique:clients,ID',
            'password' => 'required|string|min:8',
        ]);

        // Hash the password before saving
        $validated['password'] = Hash::make($validated['password']);

        // Create a new client with validated data
        Client::create($validated);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Client created!');
    }
}

