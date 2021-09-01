@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@if (Auth::check())
        <h1>ようこそマネマチ(インフルエンサー)へ</h1>
    <div class="step2">
        <h1 style="text-align:center">使い方</h1>
        <h3 style="text-align:center">step1</h3>
        <h6 style="text-align:center">マネージャー一覧ボタンで新しく登録した順にマネージャーが並びます。</h6>
        <h3 style="text-align:center">step2</h3>
        <h6 style="text-align:center">そこから気になるマネージャーをフォローすることができます。</h6>
        <h3 style="text-align:center">step3</h3>
        <h6 style="text-align:center">フォローした人からフォローを返されるとマッチング成立です。</h6>
        <h3 style="text-align:center">step4</h3>
        <h6 style="text-align:center">LINEなどでやりとりしながら仕事を手伝ってもらうのもよし、実際にあって仕事を手伝ってもらうのもよし、そこからは、個々で自由にしてください。</h6>
        <h3 style="text-align:center">もちろんその逆もあります。</h3>
        <h6 style="text-align:center">もしあなたのことが気になるマネージャーフォローされ、フォローを返せばマッチング成立です。</h6>
    </div>
    <p style="text-align:center">{!! link_to_route('users.index', 'マネージャー一覧を見る！', [], ['class' => 'btn btn-lg btn-warning']) !!}
    
    
@else 
    <div class="main_visual">
        <p style="text-align:center"><img src="{{ secure_asset('マネマチ.png')}}"></p>
        <p style="text-align:center">{!! link_to_route('manaup.get', 'マネージャー会員登録！', [], ['class' => 'btn btn-lg btn-warning']) !!}
        <p style="text-align:center">{!! link_to_route('signup.get', 'インフルエンサー会員登録！', [], ['class' => 'btn btn-lg btn-warning']) !!}
        </p>
    </div>
<div class="oll">
    <div class="step1">
        <h1 style="text-align:center">マネージャーstep</h1>
        <h3 style="text-align:center">step1</h3>
        <h6 style="text-align:center">マネージャーとして会員登録します。</h6>
        <h3 style="text-align:center">step2</h3>
        <h6 style="text-align:center">会員登録時に入力した情報が公開されます。(変更可能)</h6>
        <h3 style="text-align:center">step3</h3>
        <h6 style="text-align:center">その情報から、フォローしたり、されたりします。</h6>
        <h3 style="text-align:center">step4</h3>
        <h6 style="text-align:center">もしどちらもフォローすればマッチングマッチング成立です。</h6>
    </div>
    <br>
    <div class="step2">
        <h1 style="text-align:center">インフルエンサーステップstep</h1>
        <h3 style="text-align:center">step1</h3>
        <h6 style="text-align:center">インフルエンサーとして会員登録します。</h6>
        <h3 style="text-align:center">step2</h3>
        <h6 style="text-align:center">会員登録時に入力した情報が公開されます。(変更可能)</h6>
        <h3 style="text-align:center">step3</h3>
        <h6 style="text-align:center">その情報から、フォローしたり、されたりします。</h6>
        <h3 style="text-align:center">step4</h3>
        <h6 style="text-align:center">もしどちらもフォローすればマッチングマッチング成立です。</h6>
    </div>
</div>
@endif
    <footer>
        <small>&copy; 2021 マネマチ.</small>
    </footer>