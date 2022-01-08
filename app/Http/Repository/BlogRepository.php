<?php


namespace App\Http\Repository;


use App\Http\IRepositories\IBlogRepository;
use App\Models\Blog;

class BlogRepository extends BaseRepository implements IBlogRepository
{

    public function model()
    {
        return Blog::class;
    }

}
