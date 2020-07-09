<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * ユーザー一覧
     * @return UserResource
     */
    public function index(Request $request)
    {
        return new UserResource($request->user());
    }


}
