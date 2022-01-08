<?php


namespace App\Http\Repository;


use App\Http\IRepositories\IContactRepository;
use App\Models\Contact;

class ContactRepository extends BaseRepository implements IContactRepository
{

    public function model()
    {
        return Contact::class;
    }

}
