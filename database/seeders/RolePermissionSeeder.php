<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'manage statistics',
            'manage products',
            'manage principles',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections',
        ];

        //$designManagerRole = Role::firstOrCreate(['name' => 'design_manager']);
        //$designManagerPermissions = ([
        //   'manage products',
        //   'manage principles',
        //   'manage testimonials',
        // ]);
        //$designManagerRole->syncPermissions($designManagerPermissions);


        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);
        $user = User::create([
            'name'=>'EranPlastindoComp',
            'email'=>'super@admin.com',
            'password'=>bcrypt('123123')
        ]);

        $user->assignRole($superAdminRole);
    }
}
