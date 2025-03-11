<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Metoda pentru înregistrare
    public function register(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'string', 'min:6'],
            'password_confirmation' => 'required|same:password'
        ]);

        try {
            $user = User::create([
                'first_name' => $validated['firstName'],
                'last_name' => $validated['lastName'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => $user,
            ], 201);
        } catch (\Throwable $e) {
            // Logăm eroarea pentru detalii
            \Log::error('Eroare la înregistrare: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    // Metoda pentru login
    public function login(Request $request)
    {
        // Validăm cererea
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Verificăm autentificarea utilizatorului
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // Obținem utilizatorul autentificat
            $user = Auth::user();

            // Creăm un token pentru utilizator
            $token = $user->createToken('YourAppName')->plainTextToken;

            // Returnăm token-ul și datele utilizatorului
            return response()->json([
                'token' => $token,
                'user' => $user,  // asigură-te că returnezi corect datele utilizatorului
            ]);
        } else {
            return response()->json(['message' => 'Wrong email or password!'], 401);
        }
    }
}
