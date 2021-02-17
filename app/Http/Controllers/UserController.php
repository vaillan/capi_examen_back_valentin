<?php

namespace App\Http\Controllers;
use App\User;
use App\UserDomicilio;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUsers(){
        $users = User::selectRaw('id , name, email, email_verified_at, created_at, updated_at, fecha_nacimiento, FLOOR(TIMESTAMPDIFF(MONTH, fecha_nacimiento, NOW())/12) as edad'
        )->with('userDomicilio')->get();
        
        return response()->json([ 'users' => $users]);
    }

}
