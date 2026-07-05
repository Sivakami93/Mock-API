<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
  
public function store(Request $request)
{
    $uuid = Str::uuid();
    
    $request->validate([
        'json' => 'required|json'
    ]);
    User::create([
        'uuid'=> $uuid,
        'json' => $request["json"]
    ]);
return redirect('/web')->with(
    'message',
    'Json stored successfully. You can view it at <a href="' . url('/show/' . $uuid) . '" target="_blank">' . url('/show/' . $uuid) . '</a>'
);}

 

public function show($uuid)
 {
    $users = User::findOrFail($uuid);
    return response()->json($users, 200, [], JSON_PRETTY_PRINT);
 }
}
