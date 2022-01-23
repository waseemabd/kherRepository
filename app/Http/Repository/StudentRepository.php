<?php


namespace App\Http\Repository;


use App\Http\IRepositories\IStudentRepository;
use App\Models\Student;

class StudentRepository extends BaseRepository implements IStudentRepository
{

    public function model()
    {
        return Student::class;
    }



}
