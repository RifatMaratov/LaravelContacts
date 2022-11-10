<?php

namespace App\Services\impl;

use App\Models\Contact;
use App\Services\BlogService;

class BlogServiceImpl implements BlogService
{

    public function getAll()
    {
        $blogs = Contact::all();

        return $blogs;
    }
}
