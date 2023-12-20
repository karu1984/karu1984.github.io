<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カルロスのポートフォリオ</title>

    <link href="style.css" rel="stylesheet" media="all" />

</head>

<body>
    <header>
        <h1>Carlos Portfolio</h1>
        <nav class="gnav">
            <ul>
                <li><a href="index.html">TOP</a></li>
                <li><a href="introduction.html">自己紹介</a></li>
                <li><a href="portfolio.html">制作物（Laravelでの掲示板サイト）</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <h2>制作物紹介</h2>
    <h4>Laravelでの掲示板サイト</h4>
    <p>ソースコードは</p>
    <a href="https://github.com/karu1984/testkeijiban">こちら</a>です。
<ul id="bodymenu">
    <li id="label"> <a id="menu" href="portfolio.html">機能設計</a></li>
    <li id="label"> <a id="menu" href="portfoliotable.html">テーブル設定</a></li>
    <li id="label"> <a id="menu" href="portfoliomock.html">モック</a></li>
    <li id="label"> <a id="menu" href="portfoliologin.html">ログイン周り</a></li>
    <li id="label"> <a id="menu" href="portfoliotop.html">トップページ</a></li>
    <li id="label"> <a id="menu" href="portfoliomypage.html">マイページ</a></li>
    <li id="label"> <a id="menu" href="portfolioshow.html">レスポンシブ対応</a></li>
</ul>

<?php include "test.html" ?>


    <div class="center">
        <h2>機能設計</h2>
        <ul id="flex">
            <li><img id="portfolioImg" src="portfolio_image/gaiyou.png" alt=""></li>
        </ul>

        
    </div>
    <footer>
        <address>

        </address>
    </footer>
</body>

</html>