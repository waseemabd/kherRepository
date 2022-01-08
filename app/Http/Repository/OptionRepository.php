<?php


namespace App\Http\Repository;


use App\Http\IRepositories\IOptionRepository;
use App\Models\Option;

class OptionRepository extends BaseRepository implements IOptionRepository
{

    public function model()
    {
        return Option::class;
    }

}
