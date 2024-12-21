<?php

namespace Database\Seeders;

use App\Enum\Permissions;
use App\Enum\PermissionsEnum;
use App\Enum\Roles;
use App\Enum\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $approveVendor = Permission::create(['name' => PermissionsEnum::ApproveVendor->value]);
        $buyProduct = Permission::create(['name' => PermissionsEnum::BuyProduct->value]);
        $sellProduct = Permission::create(['name' => PermissionsEnum::SellProduct->value]);

        $userRole = Role::create(['name' => RolesEnum::User->value]);
        $adminRole = Role::create(['name' => RolesEnum::Admin->value]);
        $vendorRole = Role::create(['name' => RolesEnum::Vendor->value]);

        $userRole->syncPermissions([$buyProduct]);
        $vendorRole->syncPermissions([$buyProduct, $sellProduct]);
        $adminRole->syncPermissions([$approveVendor, $buyProduct, $sellProduct]);
    }
}
