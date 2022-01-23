<?php


namespace App\Http\Repository;


use App\Http\IRepositories\ISettingImageRepository;
use App\Models\SettingImage;

class SettingImageRepository extends BaseRepository implements ISettingImageRepository
{

    public function model()
    {
        return SettingImage::class;
    }


}
