<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class UserVideoController extends Controller
{
    public function getUserVideoById(Request $request , $id) {
       $video  = Video::query()->find($id);

       return view('user.userVideo', ['video' => $video]);
    }
}
