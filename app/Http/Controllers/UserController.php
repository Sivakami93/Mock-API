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
    return redirect()->back()->with('message',"Json stored successfully. You can view it at http://localhost:8000/show/$uuid");
}

public function show($uuid)
 {
    $users = User::findOrFail($uuid);
    return $users->json;
 }
}
