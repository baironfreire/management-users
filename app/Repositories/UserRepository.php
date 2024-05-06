<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {
    public function all(){
        $currentUser = Auth::user();
        return User::where('id', '!=', $currentUser->id)->get();
    }
    public function find($id){
        try{
            return User::findOrFail($id);
        }catch(ModelNotFoundException $e){
            throw new \Exception("User not found", 404);
        }
    }
    public function create($data){
        try {
            return User::create($data);
        } catch (\Exception $e) {
            throw new \Exception("Error creating user: " . $e->getMessage());
        }
    }

    public function update($id, $data){
        
        try {
            $user = User::findOrFail($id);
            $user->update($data);
            return $user;
        } catch (ModelNotFoundException $e) {
            // Manejo de la excepción
            throw new \Exception("User not found", 404);
        }
    }
    public function delete($id){
        try {
            $user = User::findOrFail($id);
            $user->delete();
        } catch (ModelNotFoundException $e) {
            // Manejo de la excepción
            throw new \Exception("User not found", 404);
        }
    }
}