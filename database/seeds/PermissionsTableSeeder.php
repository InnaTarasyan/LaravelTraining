<?php

use Illuminate\Database\Seeder;
use App\Permission;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Permission::all()->count() == 0){
            $permissions = [
                [
                    'name' => 'VIEW_APPLICATIONS',
                    'created_at' =>  NULL,
                    'updated_at' => NULL

                ],[
                    'name' => 'ADD_APPLICATIONS',
                    'created_at' =>  NULL,
                    'updated_at' => NULL

                ], [
                    'name' => 'UPDATE_APPLICATIONS',
                    'created_at' =>  NULL,
                    'updated_at' => NULL

                ], [
                    'name' => 'DELETE_APPLICATIONS',
                    'created_at' =>  NULL,
                    'updated_at' => NULL

                ]
            ];

            foreach ($permissions as $permission){
                Permission::create($permission);
            }
        }
    }
}
