<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_name = ['Nguyễn', 'Lê', 'Phan', 'Đỗ', 'Hồ', 'Võ', 'Bùi', 'Đào', 'Nguyễn Lê'];
        $sur_name = ['Thị', 'Văn', 'Đức', 'Ngọc', 'Hoàng', 'Minh', 'Kim', '', 'Phi', 'Minh', 'Hoàng', 'Chi'];
        $last_name = ['Tâm', 'Thảo', 'Hải', 'Hòa', 'Thanh', 'Tú', 'Hậu', 'Phương', 'Bảo'];
        for($i=0; $i < 10; $i++) {
            $fullname = Arr::random($first_name) . ' ' . Arr::random($sur_name) . ' ' . Arr::random($last_name);
            DB::table('users')->insert([
                'name' => $fullname,
                'email' => Str::random(5) . '@gmail.com',
                'password' => bcrypt('hehe')
            ]);
        }
    }
}
