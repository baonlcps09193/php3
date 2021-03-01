<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GanCotTieuDe_KhongDau extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = DB::table('tin')->select('idTin', 'TieuDe')->get();
        for($i=0; $i < count($list); $i++) {
            $idTin = $list[$i]->idTin;
            $TieuDe = $list[$i]->TieuDe;
            $kd = Str::slug($TieuDe, '-');
            DB::table('tin')->where('idTin', $idTin)->update(['TieuDe_KhongDau' => $kd]);
        }
    }
}
