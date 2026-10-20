<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("profile", ["user" => auth()->user()]);
    }

    public function update(UpdateProfileRequest $request)
    {
        /**
         * @var User $user
         */
        $user = auth()->user();

        $data = $request->validated();


        if ($file = $request->photo) {
            $data["photo"] = $file->store("photos");
        }

        $user->fill($data)->save();

        return back()->with(["message", "perfil atualizado com sucesso!"]);
    }

}
