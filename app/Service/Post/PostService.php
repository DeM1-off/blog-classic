<?php

namespace App\Service\Post;

use App\Models\Post;

class PostService implements PostServiceInterface
{

    /**
     * @param $date
     *
     * @return mixed
     */
    public function store($date)
    {
        return Post::create([
          'title' => $date->title,
          'description' => $date->description,
          'user_id' => $date->user_id,
        ]);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return Post::find($id);
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    public function update($request, $id)
    {
       return Post::where('id', $id)->update([
          'title' => $request->title,
          'description' => $request->description,
          'user_id' => $request->user_id,
        ]);
    }


    /**
     * @param $id
     *
     * @return mixed
     */
    public function edit($id)
    {
        return Post::find($id);
    }

}
