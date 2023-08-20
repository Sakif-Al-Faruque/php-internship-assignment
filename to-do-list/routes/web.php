<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $tasks = Task::all();
    return view('welcome', ['tasks' => $tasks]);
});

Route::post('/', function (Request $request) {
    Task::create([
        'task_name' => $request->nm,
        'description' => $request->desc,
        'status' => 'incomplete'
    ]);
    return redirect('/');
});

Route::post('/update-status', function (Request $request) {
    if($request->status === 'incomplete'){
        Task::where('id', $request->id)
            ->update(['status' => 'complete']);
    }else{
        Task::where('id', $request->id)
            ->update(['status' => 'incomplete']);
    }
    return redirect('/');
});

Route::post('/delete', function (Request $request) {
    Task::where('id', $request->id)->delete();
    return redirect('/');
});
