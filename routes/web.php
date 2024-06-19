<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::get('/test-db', function () {
    try {
        $roles = Role::all();  // Consulta para obtener todos los roles
        return response()->json($roles);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});
