<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $adminRole = Role::create(['name' => 'admin']);
        $studentRole = Role::create(['name' => 'student']);

        $canCreateCourse = Permission::create(['name' => 'create course']);
        $canEditCourse = Permission::create(['name' => 'update course']);
        $canDeleteCourse = Permission::create(['name' => 'delete course']);

        $canCreateLesson = Permission::create(['name' => 'create lesson']);
        $canEditLesson = Permission::create(['name' => 'update lesson']);
        $canDeleteLesson = Permission::create(['name' => 'delete lesson']);

        $canCreateStudent = Permission::create(['name' => 'create student']);
        $canEditStudent = Permission::create(['name' => 'update student']);
        $canDeleteStudent = Permission::create(['name' => 'delete student']);

        $canCreateHomework = Permission::create(['name' => 'create homework']);
        $canEditHomework = Permission::create(['name' => 'update homework']);
        $canDeleteHomework = Permission::create(['name' => 'delete homework']);
        $canUploadHomework = Permission::create(['name' => 'upload homework']);

        $adminRole->givePermissionTo([
            $canCreateCourse,
            $canEditCourse,
            $canDeleteCourse,
            $canCreateLesson,
            $canEditLesson,
            $canDeleteLesson,
            $canCreateStudent,
            $canEditStudent,
            $canDeleteStudent,
            $canCreateHomework,
            $canEditHomework,
            $canDeleteHomework
        ]);

        $studentRole->givePermissionTo([
            $canUploadHomework,
        ]);

        $users = User::factory(2000)
            ->create();
        foreach ($users as $user) {
            $user->assignRole('student');
        }

        $admins = User::factory(4)
            ->create();
        foreach ($admins as $admin) {
            $admin->assignRole('admin');
        }
    }
}
