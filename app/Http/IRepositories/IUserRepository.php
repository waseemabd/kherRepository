<?php


namespace App\Http\IRepositories;


interface IUserRepository
{

    public function userLogin();

    public function registerUser($input);


    public function allAdmins();



}
