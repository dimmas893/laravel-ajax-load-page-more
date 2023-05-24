<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $results = Post::orderBy('id')->paginate(10);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces .= '<div class="card mb-2"> <div class="card-body">' . $result->id . ' <h5 class="card-title">' . $result->title . '</h5> ' . $result->id . '</div></div>';
            }
            return $artilces;
        }
        return view('posts');
    }
}
