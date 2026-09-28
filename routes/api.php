<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\students; // This links your model file to the database!

Route::get('/students', function () {
    return response()->json([
        [
            'id' => 1,
            'name' => 'Ac Cuesta',
            'course' => 'BSIT 3B'
        ],
        [
            'id' => 2,
            'name' => 'Adler Dominguez',
            'course' => 'BSIT 3B'
        ]
    ]);
});

Route::post('/students', function (Request $request) {
    // 1. Validate incoming Postman data
    $validatedData = $request->validate([
        'name' => 'required|string',
        'course' => 'required|string'
    ]);

    // 2. RUNS THE REAL SQL INSERT QUERY TO XAMPP MySQL!
    $student = students::create([
        'name' => $validatedData['name'],
        'course' => $validatedData['course']
    ]);

    // 3. Return the actual, real saved database row back to Postman
    return response()->json($student, 201);
});