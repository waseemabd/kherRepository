<?php


namespace App\Http\Repository;


use App\Http\IRepositories\ISurveyRepository;
use App\Models\Survey;

class SurveyRepository extends BaseRepository implements ISurveyRepository
{

    public function model()
    {
        return Survey::class;
    }


}
