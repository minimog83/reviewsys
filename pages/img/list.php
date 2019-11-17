<?php
require_once("restaurants.php");

$res1 = new Restaurants("Wine Bar ENOTECA","常時10種類以上の赤・白ワインをご用意しています。<br />記念日にご来店ください。");
$res2 = new Restaurants("スペイン料理 ポルファボール！","味が自慢。スペイン現地で学んだシェフが出す味は本物です。");
$res3 = new Restaurants("パス・パスタ","本当のパスタを味わうならパス・パスタで！<br />休日の優雅なランチタイムに是非どうぞ。");
$res4 = new Restaurants("レストラン「有閑」","広い店内で、お昼の優雅なひと時を過ごしませんか？");
$res5 = new Restaurants("ビストロ「ルーヴル」","高層ビル42階のビストロで、県内が一望できる。恋人とのひと時をここで過ごしませんか");
$res6 = new Restaurants("海沿いのレストラン La Mer","海が見える、海沿いのレストランです。");
$res7 = new Restaurants("レストラン さくら","四季折々の自然を楽しむ伊豆市に、ひっそりと佇む隠れ家レストラン。<br />旅行でいらっしゃった方も、お近くの方も、お気軽にお立ち寄りください。");



?>




<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>レストラン一覧 - レストラン・レビュ・サイト</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/list.css" />
</head>

<body id="list">
	<header>
		<h1><a href="list.php">レストラン・レビュ・サイト</a></h1>
	</header>
	<main>
		<div class="clearfix">
			<h2>レストラン一覧</h2>
			<form action="list.php" name="search_form" method="get">
				<!-- 地域選択リストボックス -->
				<select name="area" onchange ="location = this.value;">
					<option value="0"> -- 地域を選んで下さい -- </option>
					<option value="1"><?=$res1->getName() ?></option>
					<option value="2"><?=$res2->getName() ?></option>
					<option value="3"><?=$res3->getName() ?></option>
					<option value="4"><?=$res4->getName() ?></option>
					<option value="5"><?=$res5->getName() ?></option>
					<option value="6"><?=$res6->getName() ?></option>
					<option value="7"><?=$res7->getName() ?></option>
				</select>
				<input type="submit" value="検索" />
			</form>
		</div><!-- /.clearfix -->
		<table class="list">
			<tr>
				<td class="photo"><img width="110" alt="「Wine Bar ENOTECA」の写真" src="../pages/img/restaurant_1.jpg" /></td>
				<td class="info">
					<dl>
						<dt><?=$res1->getName() ?></dt>
						<dd><?=$res1->getProfile() ?></dd>
					</dl>
				</td>
				<td class="detail"><a href="detail.php?id=1">詳細</a></td>
			</tr>
			<tr>
				<td class="photo"><img width="110" alt="「スペイン料理 ポルファボール！」の写真" src="../pages/img/restaurant_2.jpg" /></td>
				<td class="info">
					<dl>
						<dt><?=$res2->getName() ?></dt>
						<dd><?=$res2->getProfile() ?></dd>
					</dl>
				</td>
				<td class="detail"><a href="detail.php?id=2">詳細</a></td>
			</tr>
			<tr>
				<td class="photo"><img width="110" alt="「パス・パスタ」の写真" src="../pages/img/restaurant_3.jpg" /></td>
				<td class="info">
					<dl>
						<dt><?=$res3->getName() ?></dt>
						<dd><?=$res3->getProfile() ?></dd>
					</dl>
				</td>
				<td class="detail"><a href="detail.php?id=3">詳細</a></td>
			</tr>
			<tr>
				<td class="photo"><img width="110" alt="「レストラン有閑」の写真" src="../pages/img/restaurant_4.jpg" /></td>
				<td class="info">
					<dl>
						<dt><?=$res4->getName() ?></dt>
						<dd><?=$res4->getProfile() ?></dd>
					</dl>
				</td>
				<td class="detail"><a href="detail.php?id=4">詳細</a></td>
			</tr>
			<tr>
				<td class="photo"><img width="110" alt="「ビストロ　ルーヴル」の写真" src="../pages/img/restaurant_5.jpg" /></td>
				<td class="info">
					<dl>
						<dt><?=$res5->getName() ?></dt>
						<dd><?=$res5->getProfile() ?></dd>
					</dl>
				</td>
				<td class="detail"><a href="detail.php?id=5">詳細</a></td>
			</tr>
			<tr>
				<td class="photo"><img width="110" alt="「海沿いのレストラン La Mer」の写真" src="../pages/img/restaurant_6.jpg" /></td>
				<td class="info">
					<dl>
						<dt><?=$res6->getName() ?></dt>
						<dd><?=$res6->getProfile() ?></dd>
					</dl>
				</td>
				<td class="detail"><a href="detail.php?id=6">詳細</a></td>
			</tr>
			<tr>
				<td class="photo"><img width="110" alt="「レストラン さくら」の写真" src="../pages/img/restaurant_7.jpg" /></td>
				<td class="info">
					<dl>
						<dt><?=$res7->getName() ?></dt>
						<dd><?=$res7->getProfile() ?></dd>
					</dl>
				</td>
				<td class="detail"><a href="detail.php?id=7">詳細</a></td>
			</tr>
		</table>
	</main>
	<footer>
		<div id="copyright">(C) 2019 The Web System Development Course</div>
	</footer>
</body>

</html>