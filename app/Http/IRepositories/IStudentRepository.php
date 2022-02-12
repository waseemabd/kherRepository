<?php


namespace App\Http\IRepositories;


interface IStudentRepository
{
    public function getStudents();
    public function showStudet($id);
    public function createStudent();
    public function storeStudent($input);
    public function editStudent($id);
    public function updateStudent($input,$id);
    public function deleteStudent($input);

}
