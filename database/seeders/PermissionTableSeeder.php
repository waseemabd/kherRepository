<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{


$permissions = [
    'list users',
    'list roles',
    'create user',
    'update user',
    'show user',
    'delete user',
    'block-activate user',


    'Certificates',
    'list Certificate',
    'create Certificate',
    'update Certificate',
    'delete Certificate',

    'diplomas',
    'list diplomas',
    'create diplomas',
    'update diplomas',
    'delete diplomas',

    'Homework',
    'list Homework',
    'add files',
    'create Homework',
    'update Homework',
    'show Homework',
    'delete Homework',
    'student Homework',

    'Lectures',
    'list Lecture',
    'add lecture files',
    'create Lecture',
    'update Lecture',
    'present students lecture',
    'delete Lecture',

    'courses',
    'list courses',
    'create courses',
    'update courses',
    'delete courses',


    'create role',
    'update role',
    'show role',
    'delete role',

    'Students',
    'list Students',
    'create Student',
    'update Student',
    'show Student',
    'delete Student',
    'list pending Students',
    'block-activate Student',
    'accept-registration Student',


    'teachers',
    'list teachers',
    'create teacher',
    'update teacher',
    'show teacher',
    'delete teacher',
    'block-activate teacher',

    'create Question',
    'update Question',
    'show Question',
    'delete Question',

    'Tests',
    'list Test',
    'create Test',
    'update Test',
    'delete Test',
    'manage Test question',
    'students Test',


    'blogs',
    'list blogs',
    'update blog',
    'create blog',
    'delete blog',
    'block blog',
    'delete comment',


    'Survey',
    'list Survey',
    'create Survey',
    'update Survey',
    'delete Survey',
    'show students Survey',
    'questions Survey',

    'Setting',
    'TimeLine',

];



foreach ($permissions as $permission) {

Permission::create(['name' => $permission]);
}


}
}
