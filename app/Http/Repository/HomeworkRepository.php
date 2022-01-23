<?php


namespace App\Http\Repository;


use App\Http\IRepositories\IHomeworkRepository;
use App\Models\Homework;

class HomeworkRepository extends BaseRepository implements IHomeworkRepository
{

    public function model()
    {
        return Homework::class;
    }

}
