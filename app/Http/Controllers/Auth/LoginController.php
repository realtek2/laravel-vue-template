<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $email = $request->get('email');
        $name = $request->get('name');

        $user = User::query()->where([
            'email' => $email,
            'name' => $name,
        ])->firstOrFail();

        if (!$user) {
            return response()->json(['status' => false, 'This user does not exists']);
        }

        Auth::login($user, true);

        return response()->json(['status' => true, 'You are logged in']);
    }
}
