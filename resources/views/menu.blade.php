<?php

$cactheloai = DB::table('theloai')
                ->select('idTL', 'TenTL')
                ->orderby('ThuTu','asc')
                ->where('AnHien','=','1')
                ->where('lang','=','vi')
                ->limit(5)
                ->get();
?>
<nav class="main_nav_box">
    <ul id="nav">
        <li class="nav_lifeguide">
            <a href="">Trang Chủ</a>
        </li>
    @foreach ($cactheloai as $mottheloai)
        <li class="nav_lifeguide"><a href="">{{ $mottheloai->TenTL }}</a>
        <div class="sub_menu sub_menu_p single_mega">
            <ul>
                <?php
                $subcategories = DB::table('loaitin')
                                    ->select('idLT', 'Ten')
                                    ->join('theloai', 'loaitin.idTL', '=', 'theloai.idTL')
                                    ->where('loaitin.idTL', '=', $mottheloai->idTL)
                                    ->where('loaitin.AnHien','=','1')
                                    ->where('loaitin.lang','=','vi')
                                    ->get();    
                ?>
                @foreach ($subcategories as $subcategory)
                <li><a href="ttl/{{ $subcategory->idLT }}"><span>{{ $subcategory->Ten }}</span></a></li>
                @endforeach
            </ul>
        </div>
        </li>
    @endforeach
        <li class="nav_lifeguide">
            <a href="lienhe">Liên Hệ</a>
        </li>
    </ul>
</nav>