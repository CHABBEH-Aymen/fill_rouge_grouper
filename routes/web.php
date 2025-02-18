<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';


Route::get('/', function() {
    if(!Auth::check()) return redirect('/login');
    return redirect('/dashboard');
});

Route::get('/{vue_capture}', function () {
    if(Auth::check()){ 
       $data = ['user'=>Auth::user()];
       return view('welcome', compact('data'));
}else return view('welcome');})
->where('vue_capture', "[\/\w\.-]*")
->name('vue');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

