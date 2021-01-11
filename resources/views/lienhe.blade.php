<?php use App\Http\Controllers\TinController; ?>
@extends('layout')

@section('noidungchinh')
<style>
    .contact-page-form h2 {color: blue; margin-top: 30px; font-size: 1.5em}
    .contact_cc_name input[type="text"], textarea{ margin: 10px 0; padding: 6px; background-color: moccasin; text-transform: none; letter-spacing: 1px; font-size: 1.2em; border: 1px solid darkkhaki}
    .contact-page-form input[type="submit"] {width: 120px; height: 40px; background: darkgoldenrod; color: azure; margin: 0 auto; display: block}
</style>
<div class="contact-page-form">
    <h2>Liên hệ với chúng tôi</h2>
    <div class="comments_form">
        <form action="{{action([TinController::class, 'lienhe'])}}" method="post">
            @csrf
            <div class="contact_cc_name">
                <input type="text" name="name" placeholder="Tên của bạn *" required/>
                <input type="text" name="email" placeholder="Địa chỉ email của bạn *" required/>
                <input type="text" name="phone" placeholder="Số điện thoại" required/>
            </div>
            <textarea name="message" cols="30" rows="10" placeholder="Nội dung liên hệ"></textarea>
            <input name="submit" type="submit" value="Gửi liên hệ"/>
        </form>
    </div>
</div>
@endsection