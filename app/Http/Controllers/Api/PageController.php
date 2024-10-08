<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{

    public function index(){

        $posts = POST::all();
        // è preferibile non utilizzare il compact
        return response()->json($posts);

    }


}
