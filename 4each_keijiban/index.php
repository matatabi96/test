<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>4eachblog</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script>
            $(document).ready(function(){
              $('.mainimg').bxSlider({
                auto: true,
                mode:'horizontal',
                speed:2000,
                });
            });
        </script>
	</head>
	
	<body>
	
	<img src="4eachblog_logo.jpg" width="300px">
		
		<header>
			<ul>
				<li>トップ</li>
				<li>プロフィール</li>
				<li>4eachについて</li>
				<li>登録フォーム</li>
				<li>問い合わせ</li>
				<li>その他</li>
			</ul>
		</header>
		
		<main>
			<div class="main-container">
				<div class="left">
					<h1>プログラミングに役立つ掲示板</h1>
					
						<form method="post" action="insert.php">
                            <div>
                                <label>ハンドルネーム</label>
                                <br>
                                <input type="text" class="text" size="35" name="name">
                            </div>

                            <div>
                                <label>タイトル</label>
                                <br>
                                <input type="text" class="text" size="35" name="mail">
                            </div>

                            <div>
                                <label>コメント</label>
                                <br>
                                <textarea cols="35" rows="7" name="comments"></textarea>
                            </div>

                            <div>
                                <input type="submit" class="submit" value="送信する">
                            </div>
                        </form>
				
				</div>
				
				<div class="right">
					<h3>人気の記事</h3>
					<ul class="sidemenu">
						<li>PHP オススメ本</li>
						<li>PHP Myadminの使い方</li>
						<li>今人気のエディタ Top5</li>
						<li>HTMLの基礎</li>
					</ul>
					<h3>オススメリンク</h3>
					<ul class="sidemenu">
						<li>インターノウス株式会社</li>
						<li>XAMPPのダウンロード</li>
						<li>Eclipseのダウンロード</li>
						<li>Bracketsのダウンロード</li>
					</ul>
					<h3>カテゴリ</h3>
					<ul class="sidemenu">
						<li>HTML</li>
						<li>PHP</li>
						<li>MySQL</li>
						<li>javaScript</li>
					</ul>
				</div>
			</div>
		</main>
		
		<footer>
		copyright (C) internous | 4each blog is the one which provides A to Z about programming.
		</footer>
	
	</body>





</html>