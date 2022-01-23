<?php


namespace App\Http\Repository;


use App\Http\IRepositories\ISettingRepository;
use App\Models\Setting;

class SettingRepository extends BaseRepository implements ISettingRepository
{

    public function model()
    {
        return Setting::class;
    }


}
