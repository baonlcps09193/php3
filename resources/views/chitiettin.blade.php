<?php 
?>
@extends('layout')

@section('noidungchinh')
<div class="cc_single_post">
    <div class="sp_details">
        <a href="">{{ $tin->Ten }}</a>
        <h2>{{$tin->TieuDe}}</h2>
        <div class="post_meta">
            <ul>
                <li><a href=""><i class="fa fa-user"></i>Tác giả: Chi Bảo</a></li>
                <li><a href=""><i class="fa fa-eye"></i>{{ $tin->SoLanXem }}</a></li>
                <li><a href=""><i class="fa fa-comment-o"></i>18</a></li>
            </ul>
        </div>
        <div class="post_text">
            <?php echo $tin->Content ?>
        </div>
        <div class="social_tags">
            <div class="social_tags_left">
                <p>Tags :</p>
                <ul>
                    @foreach ($tin->tags as $tag)
                    <li><a href="">{{ $tag }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="social_tags_right">
                <ul>
                    <li class="facebook"><a class="fa fa-facebook" href=""></a></li>
                    <li class="twitter"><a class="fa fa-twitter" href=""></a></li>
                    <li class="google-plus"><a class="fa fa-google-plus" href=""></a></li>
                    <li class="linkedin"><a class="fa fa-linkedin" href=""></a></li>
                </ul>
            </div>
        </div>
        <div class="sp-next-prev">
            <div class="sp-prev">
                <a href=""><i class="fa fa-angle-double-left"></i>Previous post</a>
            </div>
            <div class="sp-next">
                <a href="">Previous post<i class="fa fa-angle-double-right"></i></a>
                <div class="sp-next-post">
                    <a href="">What Do I Need To Make It In <br>Business?</a>
                </div>
            </div>
        </div>
        <div class="sp-comments-box">
            <h2>Comments</h2>
            <?php 
                $comments = DB::table('ykien')
                                ->where('idTin', $tin->idTin)
                                ->where('AnHien', 1)
                                ->get();
            ?>
            @if(empty($comments))
                <div style="text-align: center; margin: 20px 0">
                    <strong>Chưa có bình luận</strong>
                </div>
            @else
                @foreach ($comments as $comment)
                <div class="single_comment">
                    <div class="single_comment_pic">
                        <img src="images/comment-pic1.png" alt="" />
                    </div>
                    <div class="single_comment_text">
                        <div class="sp_title">
                            <a href=""><h4>{{ $comment->HoTen }}</h4></a>
                            <p>{{ date('H:m', strtotime($comment->Ngay)) }}</p>
                        </div>
                        <p>{{ $comment->NoiDung }}</p>
                        <a href=""><i class="fa fa-reply"></i>Reply</a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div class="comment-form">
            <h2>leave your comments</h2>
            <div class="comments_form">
                <form>
                    <div class="inp_name">
                        <input id="c_name" type="text" placeholder="Your Name" required/>
                        <input type="text" placeholder="Your Name" required/>
                    </div>
                    <textarea cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Send Message"/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection