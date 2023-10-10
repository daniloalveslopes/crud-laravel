<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $req)
    {
        $newUser = [
            'name' => 'Danilo',
            'email' => 'da34346@gmail.com',
            'password' => '2324234',
        ];
        $UserModel = new User($newUser);
        $UserModel->save();
        dd($UserModel);
    }
    public function getAll(Request $req)
    {
        $UserModel = new User();
        $users = $UserModel->all();
        return $users;
    }
    public function getById($id)
    {
        $UserModel = new User();
        $user = $UserModel->find($id);
        if($user){
            return $user;
        }
        return "usuario não encontrado";
    }
    public function update($id)
    {
        $user = User::where('id', '=', $id)->update([
            'name' => 'test',
            'email' => 'email@gmail.vom',
        ]);
    
        if(!$user){
            return "usuario não encontrado";
        }
    }
}
