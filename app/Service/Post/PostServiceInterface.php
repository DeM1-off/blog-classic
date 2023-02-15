<?php

namespace App\Service\Post;

interface PostServiceInterface
{

    /**
     * @param $date
     *
     * @return mixed
     */
    public function store($date);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id);

    /**
     * @param $id
     *
     * @return mixed
     */
    public function edit($id);

    /**
     * @param $request
     * @param $post
     *
     * @return mixed
     */
    public function update($request,$post);


}
