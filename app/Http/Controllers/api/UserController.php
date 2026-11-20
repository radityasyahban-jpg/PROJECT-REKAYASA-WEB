<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'success' => true,
            'message' => 'Data user berhasil diambil',
            'data' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'role' => 'nullable|string',
        ]);

        $validate['password'] = bcrypt($validate['password']);

        $user = User::create($validate);

        return response()->json([
            'success' => true,
            'message' => 'User berhasil dibuat',
            'data' => $user,
        ], 201);
    }

    public function show(string $id)
    {
        try {
            $user = User::findOrFail($id);

            return response()->json([
                'success' => true,
                'message' => 'Data user berhasil diambil',
                'data' => $user,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data user tidak ditemukan',
                'error' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $user = User::findOrFail($id);

            $validate = $request->validate([
                'name' => 'nullable|string|max:255',
                'email' => 'nullable|string|email|max:255|unique:users,email,' . $user->id,
                'password' => 'nullable|string',
                'phone' => 'nullable|string',
                'address' => 'nullable|string',
                'role' => 'nullable|string',
            ]);

            if (isset($validate['password'])) {
                $validate['password'] = bcrypt($validate['password']);
            }

            $user->update($validate);

            return response()->json([
                'success' => true,
                'message' => 'Data user berhasil diupdate',
                'data' => $user,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data user tidak ditemukan',
                'error' => $e->getMessage(),
            ], 404);
        }
    }

    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data user berhasil dihapus',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data user tidak ditemukan',
                'error' => $e->getMessage(),
            ], 404);
        }
    }
}
