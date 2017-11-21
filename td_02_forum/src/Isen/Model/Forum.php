<?php
/**
 * Created by IntelliJ IDEA.
 * User: anton
 * Date: 10/19/2017
 * Time: 8:47 AM
 */

namespace Isen\Model;

class Forum
{
    protected $title;

    protected $posts;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param mixed $posts
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;
    }


}