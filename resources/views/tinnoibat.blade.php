<?php

$tinmoi = DB::table('tin')
            ->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
            ->orderby('Ngay','desc')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where('tin.AnHien','=','1')
            ->where('tin.lang','=','vi')
            ->Where("NoiBat","=","1")
            ->offset(0)
            ->limit(5)
            ->get();

?>
<section class="hp_banner_area section_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="hp_banner_box">
            <div class="hp_banner_left">
              <div class="bl_single_news"> <img src="{{ $tinmoi[0]->urlHinh }}" alt="" />
                <div class="bl_single_text"> <a href="blog-single-slider-post.html">
                  <h4>{{ $tinmoi[0]->TieuDe }}</h4>
                  </a> <span><i class="fa fa-clock-o"></i> {{ date('H:m', strtotime($tinmoi[0]->Ngay)) }}</span> </div>
              </div>
              <div class="bl_single_news"> <img src="{{ $tinmoi[1]->urlHinh }}" alt="" />
                <div class="bl_single_text"> <a href="blog-single-slider-post.html">
                  <h4>{{ $tinmoi[1]->TieuDe }}</h4>
                  </a> <span><i class="fa fa-clock-o"></i> {{ date('H:m', strtotime($tinmoi[1]->Ngay)) }}</span> </div>
              </div>
              <div class="bl_single_news"> <img src="{{ $tinmoi[2]->urlHinh }}" alt="" />
                <div class="bl_single_text"> <a href="blog-single-slider-post.html">
                  <h4>{{ $tinmoi[2]->TieuDe }}</h4>
                  </a> <span><i class="fa fa-clock-o"></i> {{ date('H:m', strtotime($tinmoi[2]->Ngay)) }}</span> </div>
              </div>
            </div>
            <div class="hp_banner_right">
              <div class="br_single_news"> <img src="{{ $tinmoi[3]->urlHinh }}" alt="" />
                <div class="br_single_text"> <span class="green_hp_span">{{ $tinmoi[3]->Ten }}</span> <a href="blog-single-slider-post.html">
                  <h4>{{ $tinmoi[3]->TieuDe }}</h4>
                  </a> </div>
                <div class="br_cam"> <a href="" class="fa fa-camera"></a> </div>
              </div>
              <div class="br_single_news"> <img src="{{ $tinmoi[4]->urlHinh }}" alt="" />
                <div class="br_single_text"> <span class="blue_hp_span">{{ $tinmoi[4]->Ten }}</span> <a href="blog-single-slider-post.html">
                  <h4>{{ $tinmoi[4]->TieuDe }}</h4>
                  </a> </div>
                <div class="br_cam"> <a href="" class="fa fa-camera"></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>