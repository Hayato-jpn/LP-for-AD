{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'OSを選択して下さい')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="body">
        <br />
        <h1><span>パパ活人気が急上昇！</span></h1>
        <img src="{{ asset('/image/papa.jpg') }}" width="400px"></img>
        <br />
        <p>その中で今<span>最も会員数を伸ばしている</span>のがコチラ！</p>
        <p class="ad-center">👇👇👇</p>
        <img src="{{ asset('/image/wakuwaku.jpg') }}" width="300px"></img>
        <p>元々老舗のマッチングアプリで、<span>最近パパ活に対応した</span>んです！<br />なので、女性はまだまだ少ないんだけど、<span>男性会員が豊富なのが特徴！</span></p>
        <p>アプリ版はパパ活対応していないので、公式キャンペーンページ（👇）からの登録必須です。</p>
        <h3 class="ad-center"><span>下記より対象OSを選択して下さい。</span></h3>
        <a href="https://fam-ad.com/ad/p/r?_site=64802&_article=16345"><img src="{{ asset('/image/d_2.png') }}"></img></a>
        <p class="ad-center">※期間限定紹介になります。</p>
    </div>
@endsection