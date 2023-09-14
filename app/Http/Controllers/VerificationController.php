<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class VerificationController extends Controller
{
    public function verify(Request $request, $id, $hash)
    {
        // Find the user by ID
        $user = User::find($id);

        // Check if the user exists and the hash matches
        if (!$user || sha1($user->email) !== $hash) {
            return redirect()->route('verification.failed');
        }

        // Mark the user's email as verified
        $user->email_verified_at = now();
        $user->save();

        return redirect()->route('verification.success');
    }}
