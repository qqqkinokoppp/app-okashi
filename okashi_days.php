<?php
$images = scandir('./img');//指定ディレクトリ内にあるファイルとディレクトリの取得　ファイル名、ディレクトリ名が配列が返ってきてる
$img = array();//画像を入れる配列を初期化
//var_dump($images);
foreach($images as $i)
{
    if(is_file("./img/$i"))//$images内の要素のうち、ファイルであるもののみ、$imgに入れていく！！覚書　ダブルクォーテーション内の変数は展開される
    {
        $img[] = $i;
    }
}
//var_dump($img);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="./css/normalize.css">
<link rel="stylesheet" href="./css/main.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script><!--swiperのライブラリ、スタイルシート読み込み-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
<title>お菓子な日々</title>
</head>
<body>
<div class="bg-test">
    <div class="swiper-container" style="background-image:url(../okashi_back.png)">
        <div class="swiper-wrapper">
            <?php foreach($img as $a):?><!--スライドさせる画像をforeachで回す-->
            <div class="swiper-slide" align="center">
            <img src="<?php print './img/'.$a?>">
            </div>
            <?php endforeach;?>
        </div>
        <div class="swiper-pagination"></div><!--ページネーション-->
            <div class="swiper-button-prev"></div><!--右へ左へボタン-->
            <div class="swiper-button-next"></div>
    </div>
</div>
<script>
var mySwiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 3000,
    autoplay: {
    delay: 3000,
    disableOnInteraction: false
    },
    pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true
	},
    navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	}

});
</script>
</body>
