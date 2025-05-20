<?php

use Illuminate\Support\Facades\Route;

// main
Route::get('/', function () {
    return view('home');
});

// URI Parameters
Route::get('/portfolio',
 function () {
    // return $firstname;
    return view('portfolio');
});
Route::get('/portfolio/{firstname}/{lastname}',
 function ($firstname, $lastname) {
    // return $firstname;
    return view('portfolio');
});

// named route
Route::get('/test', function () {
    // return "this is a test";
    return view('contact');
})->name("/test");

// SUB ROUTES
Route::prefix("/home")->group(function () {  
    Route::get("/experience", function () {
        // return "experience";
        return view("experience");
     });

     Route::get("/education", function () {
        // return "education";
        return view("education");
     });
});

// POST route
Route::post("/formsubmitted",
 function(Request $request) {
    //! VALIDATION
    $request->validate([
        "fullname" => "required|min:3|max:30",
        "email"=> "required|min:3|max:30|email",
    ]);

    $full_name = $request->input("fullname");
    $email = $request->input("email");
    return "form";
})->name("/formsubmitted");