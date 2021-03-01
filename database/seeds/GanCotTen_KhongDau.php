<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GanCotTen_KhongDau extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = DB::table('loaitin')->select('idLT', 'Ten')->get();
        for($i=0; $i < count($list); $i++) {
            $idLT = $list[$i]->idLT;
            $Ten = $list[$i]->Ten;
            $kd = Str::slug($Ten, '-');
            DB::table('loaitin')->where('idLT', $idLT)->update(['Ten_KhongDau' => $kd]);
        }
    }
}
