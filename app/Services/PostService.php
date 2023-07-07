<?php

namespace App\Services;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostService
{
    public function addpost(Request $request)
    {
        $post = new Post();

        $date = Carbon::now();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;
        $post->post_date = $date;

        $res = $post->save();

        return $res;
    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);

        if ($post != null) {
            $post->title = $request->title;
            $post->description = $request->description;

            $res = $post->save();

            return $res;
        }

        return null;
    }
}
