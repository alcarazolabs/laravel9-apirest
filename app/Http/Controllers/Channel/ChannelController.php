<?php

namespace App\Http\Controllers\Channel;

use App\Models\User;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChannelController extends Controller
{
    public function index_api(Request $request)
    {
       
        $userId = \Auth()->user()->id;

        $user = User::findOrFail($userId);

        $channels = Channel::where('state', 1)->get();

        return response()->json([
            'result' => $channels,
            'user' => $user
            
        ], 200);
    }


}
