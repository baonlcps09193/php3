<?php
use App\Http\Controllers\TinController;
$TenTL= DB::table('theloai')
            ->where("idTL",$idTL)
            ->value("TenTL");

$tinmoi = DB::table('tin')
            ->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->orderby('Ngay','desc')
            ->where('tin.AnHien','=','1')
            ->where('tin.idTL','=',$idTL)
            ->offset(0)
            ->limit(4)
            ->get();
?>


<div class="fashion_area">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="header_fasion">
          <div class="left_fashion main_nav_box">
            <ul>
              <li class="nav_fashion"><a href=""><?= $TenTL ?></a></li>
            </ul>
          </div>
          <div class="fasion_right">
            <ul>
              <?php
                $loaitincon = DB::table('loaitin')
                                ->select('idLT', 'Ten')
                                ->orderby('ThuTu','ASC')
                                ->where('AnHien','=','1')
                                ->where('idTL','=',$idTL)
                                ->get();
                ?>
                @foreach ($loaitincon as $lt)
                  <li><a href="">{{ $lt->Ten }}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
        <div class="fashion_area_box">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="fs_news_left">
                <div class="single_fs_news_left_text">
                  <div class="fs_news_left_img"> <img src="<?= $tinmoi[0]->urlHinh ?>" alt="" />
                    <div class="br_cam br_vid_big_s"> <a class="fa fa-camera" href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[0]->idTin] ) }}"></a> </div>
                  </div>
                  <h4><a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[0]->idTin] ) }}"><?=$tinmoi[0]->TieuDe;?></a></h4>
                  <p> <i class="fa fa-clock-o"></i> <?=date('H:m',strtotime($tinmoi[0]->Ngay));?> <i class="fa fa-comment"></i> 19 </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="all_news_right">
                <div class="fs_news_right">
                  <div class="single_fs_news_img"> <img src="<?= $tinmoi[1]->urlHinh?>" alt="Single News" /> </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[1]->idTin] ) }}"><?=$tinmoi[1]->TieuDe;?></a></h4>
                    <p> <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[1]->idTin] ) }}"><?= $tinmoi[1]->Ten?> </a>| <i class="fa fa-clock-o"></i> <?=date('H:m',strtotime($tinmoi[1]->Ngay));?> </p>
                  </div>
                </div>
                <div class="fs_news_right">
                  <div class="single_fs_news_img"> <img src="<?= $tinmoi[2]->urlHinh?>" alt="Single News" /> </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[2]->idTin] ) }}"><?=$tinmoi[2]->TieuDe;?></a></h4>
                    <p> <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[2]->idTin] ) }}"><?= $tinmoi[2]->Ten?></a>| <i class="fa fa-clock-o"></i> <?=date('H:m',strtotime($tinmoi[2]->Ngay));?> </p>
                  </div>
                </div>
                <div class="fs_news_right last_right">
                  <div class="single_fs_news_img"> <img src="<?= $tinmoi[3]->urlHinh?>" alt="Single News" /> </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[3]->idTin] ) }}"><?=$tinmoi[3]->TieuDe;?></a></h4>
                    <p> <a href="{{ action( [TinController::class,'chitiettin'],['id'=>$tinmoi[3]->idTin] ) }}"><?= $tinmoi[3]->Ten?> </a>| <i class="fa fa-clock-o"></i> <?=date('H:m',strtotime($tinmoi[3]->Ngay));?> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="header_fasion gadgets_heading">
          <div class="left_fashion main_nav_box">
            <ul>
              <li class="nav_gadgets"><a href="">GADGETS</a></li>
            </ul>
          </div>
          <div class="fasion_right"> <a href=""><img src="images/hor_dot.png" alt="" /></a> </div>
        </div>
        <div class="gadgets_area_box">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="fs_news_left fs_gadgets_news_left">
                <div class="fs_news_left_img_g"> <img src="images/gradient1.jpg" alt="" />
                  <div class="br_cam br_vid_big"> <a class="fa fa-caret-right" href=""></a> </div>
                </div>
                <div class="single_fs_news_left_text">
                  <h4><a href="blog-single-slider-post.html">Tips for taking great city photos with your smartphone</a></h4>
                  <p> <i class="fa fa-clock-o"></i> 3 min ago <i class="fa fa-comment"></i> 19 </p>
                </div>
                <div class="all_news_right">
                  <div class="fs_news_right">
                    <div class="single_fs_news_img"> <img src="images/grd1.jpg" alt="Single News" /> </div>
                    <div class="single_fs_news_right_text">
                      <h4><a href="blog-single-slider-post.html">Internet trolls take pleasure in making you suffer</a></h4>
                      <p> <a class="gad_color" href="">Gadget </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                    </div>
                  </div>
                  <div class="fs_news_right">
                    <div class="single_fs_news_img"> <img src="images/gred2.jpg" alt="Single News" /> </div>
                    <div class="single_fs_news_right_text">
                      <h4><a href="blog-single-slider-post.html">Why tech accelerators may soon be as irrelevant as an MBA</a></h4>
                      <p> <a class="gad_color" href="">Gadget </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                    </div>
                  </div>
                  <div class="fs_news_right last_right">
                    <div class="single_fs_news_img"> <img src="images/gres3.jpg" alt="Single News" /> </div>
                    <div class="single_fs_news_right_text">
                      <h4><a href="blog-single-slider-post.html">Why tech accelerators may soon be as irrelevant as an MBA</a></h4>
                      <p> <a class="gad_color" href="">Gadget </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="fs_news_left fs_gadgets_news_left">
                <div class="fs_news_left_img_g"> <img src="images/gradient2.jpg" alt="" /> </div>
                <div class="single_fs_news_left_text">
                  <h4><a href="blog-single-slider-post.html">Travelling With Technology Some Tips From.</a></h4>
                  <p> <i class="fa fa-clock-o"></i> 3 min ago <i class="fa fa-comment"></i> 19 </p>
                </div>
                <div class="all_news_right">
                  <div class="fs_news_right">
                    <div class="single_fs_news_img"> <img src="images/gred1.jpg" alt="Single News" /> </div>
                    <div class="single_fs_news_right_text">
                      <h4><a href="blog-single-slider-post.html">Internet trolls take pleasure in making you suffer</a></h4>
                      <p> <a class="gad_color" href="">Gadget </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                    </div>
                  </div>
                  <div class="fs_news_right">
                    <div class="single_fs_news_img"> <img src="images/grd2.jpg" alt="Single News" /> </div>
                    <div class="single_fs_news_right_text">
                      <h4><a href="blog-single-slider-post.html">Why tech accelerators may soon be as irrelevant as an MBA</a></h4>
                      <p> <a class="gad_color" href="">Gadget </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                    </div>
                  </div>
                  <div class="fs_news_right last_right">
                    <div class="single_fs_news_img"> <img src="images/grd3.jpg" alt="Single News" /> </div>
                    <div class="single_fs_news_right_text">
                      <h4><a href="blog-single-slider-post.html">Why tech accelerators may soon be as irrelevant as an MBA</a></h4>
                      <p> <a class="gad_color" href="">Gadget </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header_fasion gadgets_heading lifestyle_post_area">
          <div class="left_fashion main_nav_box">
            <ul>
              <li class="nav_lifestyle"><a href="">LIFESTYLE</a></li>
            </ul>
          </div>
          <div class="fasion_right"> <a href=""><img src="images/hor_dot.png" alt="" /></a> </div>
        </div>
        <div class="fashion_area_box">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="fs_news_left">
                <div class="single_fs_news_left_text">
                  <div class="fs_news_left_img"> <img src="images/lifes1.jpg" alt="life" />
                    <div class="br_cam"> <a class="fa fa-camera" href=""></a> </div>
                  </div>
                  <h4><a href="blog-single-slider-post.html">Travelling With Technology Some Tips From.</a></h4>
                  <p> <i class="fa fa-clock-o"></i> 3 min ago <i class="fa fa-comment"></i> 19 </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="all_news_right">
                <div class="fs_news_right">
                  <div class="single_fs_news_img"> <img src="images/lis2.jpg" alt="Single News" />
                    <div class="br_cam"> <a class="fa fa-camera" href=""></a> </div>
                  </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="blog-single-slider-post.html">Thoughts on remaining casually chic</a></h4>
                    <p> <a href="">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                  </div>
                </div>
                <div class="fs_news_right">
                  <div class="single_fs_news_img"> <img src="images/lis3.jpg" alt="Single News" /> </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="blog-single-slider-post.html">Hipster Yoga at the End of the World</a></h4>
                    <p> <a href="">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                  </div>
                </div>
                <div class="fs_news_right last_right">
                  <div class="single_fs_news_img"> <img src="images/lis4.jpg" alt="Single News" /> </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="blog-single-slider-post.html">Cruise 2015 Swim Trend: Blurred Lines</a></h4>
                    <p> <a href="">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="home_add_box"> <img src="images/ht-add.jpg" alt="add" /> </div>
        <div class="header_fasion gadgets_heading">
          <div class="left_fashion main_nav_box">
            <ul>
              <li class="nav_video_post"><a href="">Video</a></li>
            </ul>
          </div>
          <div class="fasion_right"> <a href=""><img src="images/hor_dot.png" alt="" /></a> </div>
        </div>
        <div class="fashion_area_box video_area_box">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="all_news_right">
                <div class="fs_news_right">
                  <div class="single_fs_news_img"> <img src="images/vid2.jpg" alt="Single News" />
                    <div class="br_cam"> <a class="fa fa-camera" href=""></a> </div>
                  </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="blog-single-slider-post.html">Thoughts on remaining casually chic</a></h4>
                    <p> <a class="video_f" href="">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                  </div>
                </div>
                <div class="fs_news_right">
                  <div class="single_fs_news_img"> <img src="images/vid3.jpg" alt="Single News" />
                    <div class="br_cam br_vid"> <a class="fa fa-caret-right" href=""></a> </div>
                  </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="blog-single-slider-post.html">Hipster Yoga at the End of the World</a></h4>
                    <p> <a class="video_f" href="">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                  </div>
                </div>
                <div class="fs_news_right last_right">
                  <div class="single_fs_news_img"> <img src="images/vid4.jpg" alt="Single News" />
                    <div class="br_cam br_vid"> <a class="fa fa-caret-right" href=""></a> </div>
                  </div>
                  <div class="single_fs_news_right_text">
                    <h4><a href="blog-single-slider-post.html">Scottish independence what history tells us about</a></h4>
                    <p> <a class="video_f" href="">Fashion </a>| <i class="fa fa-clock-o"></i> 1 hour ago </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="fs_news_left fs_news_vid_right">
                <div class="single_fs_news_left_text">
                  <div class="fs_news_left_img"> <img src="images/vid1.jpg" alt="video" />
                    <div class="br_cam br_vid_big"> <a class="fa fa-caret-right" href=""></a> </div>
                  </div>
                  <h4><a href="blog-single-slider-post.html">The stock closed above $100 which marks a sell record</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="news_pagination">
          <ul class="news_pagi">
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li class="dotlia"><a href="">. . .</a></li>
            <li class="nextlia"><a href="">Next</a></li>
          </ul>
        </div> --}}
      </div>
    </div>
</div>