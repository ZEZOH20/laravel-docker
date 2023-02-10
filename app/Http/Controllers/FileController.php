<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
   function addFile(Request $request){
   
     $imageName=$request->file("file")->getClientOriginalName();
     $path=$request->file('file')->storeAs("images",$imageName,'public');
     return $path;
     //Storage::disk("public")->put()

   }
   function user(){ //here
    \App\Models\User::factory(10)->create();

    \App\Models\User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);
   }
}
