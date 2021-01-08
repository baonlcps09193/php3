<?php
$latest_news = DB::table('tin')
            ->select('idTin', 'TieuDe', 'Ngay', 'Ten', 'urlHinh')
            ->orderby('Ngay','desc')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where('tin.AnHien','=','1')
            ->where('tin.lang','=','vi')
            ->offset(0)
            ->limit(5)
            ->get();
?>
<div class="follow_us_side">
    <h2>Tin mới nhất</h2>
    <div class="all_news_right">
    <?php foreach ($latest_news as $news): ?>
        <div class="fs_news_right">
            <div class="single_fs_news_img"> <img alt="Single News" src="<?= $news->urlHinh ?>"> </div>
            <div class="single_fs_news_right_text">
                <h4><a href="blog-single-slider-post.html"><?= $news->TieuDe ?></a></h4>
                <p> <a href=""><?= $news->Ten ?> | </a> <i class="fa fa-clock-o"></i> <?= date('H:m', strtotime($news->Ngay)) ?> </p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>