<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model
{
    protected $table = 'posts';

    protected $allowedFields = ['title', 'slug', 'body', 'file_name', 'file_type', 'created_at'];

    public function getPosts($slug = false)
    {
        if ($slug === false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}