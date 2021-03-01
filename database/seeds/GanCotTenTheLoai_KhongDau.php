<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GanCotTenTheLoai_KhongDau extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = DB::table('theloai')->select('idTL', 'TenTL')->get();
        for($i=0; $i < count($list); $i++) {
            $idTL = $list[$i]->idTL;
            $TenTL = $list[$i]->TenTL;
            $kd = Str::slug($TenTL, '-');
            DB::table('theloai')->where('idTL', $idTL)->update(['TenTL_KhongDau' => $kd]);
        }
    }
}
