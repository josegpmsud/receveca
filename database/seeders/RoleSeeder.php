<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'asesor']);

        $permission = Permission::create(['name' => 'admin.home'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'admin.plan.index'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'admin.plan.create'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'admin.plan.edit'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'admin.plan.destroy'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'admin.user.index'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'admin.user.create'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'admin.user.edit'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'admin.user.destroy'])->syncRoles([$role1,$role2]); 
        
        $permission = Permission::create(['name' => 'admin'])->syncRoles([$role1]);    



    }
}
