<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Quản Trị Viên',
            'description' => 'Quản trị viên là người quản trị toàn bộ hệ thống'
        ]);
        $productManager = Role::create([
            'name' => 'Product-Manager',
            'display_name' => 'Quản trị viên sản phẩm',
            'description' => 'Quản trị viên sản phẩm là người quản lý sản phẩm của cửa hàng'
        ]);
        $orderManager = Role::create([
            'name' => 'Order-Manager',
            'display_name' => 'Quản trị viên đơn hàng',
            'description' => 'Quản trị viên là người quản trị toàn bộ hệ thống'
        ]);
        
        $customer = Role::create([
            'name' => 'customer',
            'display_name' => 'Khách hàng',
            'description' => 'Khách hàng là người có tiềm năng mua hàng trên hệ thống website'
        ]);
        $createUser = Permission::create([
            'name' => 'create-user',
            'display_name' => 'Tạo người dùng',
            'description' => 'Quyền khởi tạo người dùng'
        ]);

        $editUser = Permission::create([
            'name' => 'edit-user',
            'display_name' => 'Sửa thông tin người dùng',
            'description' => 'Quyền khởi sửa thông tin người dùng'
        ]);

        $deleteUser = Permission::create([
            'name' => 'delete-user',
            'display_name' => 'Xóa người dùng',
            'description' => 'Quyền xóa bỏ người dùng'
        ]);

        $admin->perms()->attach([$createUser->id, $editUser->id, $deleteUser->id]);
    }
}
