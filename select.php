<?php

define('DSN', 'mysql:host=mysql;dbname=pet_shop;charset=utf8;');
define('USER', 'staff');
define('PASSWORD', '9999');

try {
  $dbh = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}

$sql = "INSERT INTO animals(description, type, classifcation, birthplace, birthday) VALUES (:description, :type, :classifcation, :birthplace, :birthday)";

$stmt = $dbh->prepare($sql);

$stmt->bindParam(":description", $description);
$stmt->bindParam(":type", $type);
$stmt->bindParam(":classifcation", $classifcation);
$stmt->bindParam(":birthplace", $birthplace);
$stmt->bindParam(":birthday", $birthday);


$description = "しわしわお顔にぺちゃ鼻くりくりぱっちり大きな目、愛嬌たっぷり元気な子です！短毛で色はホワイト系にブラックの混色のブルドックです。";
$type = "犬";
$classifcation = "ブルドッグ";
$birthplace = "神奈川県";
$birthday = "2019/11/30";
$stmt->execute();

$description = "非常に美人なノルウェージャンフォレストキャットです！色はホワイト系のブルータービーでふわふわ長毛でおっとりとした性格をしています！";
$type = "猫";
$classifcation = "ノルウェージャンフォレストキャット";
$birthplace = "東京都";
$birthday = "2019/12/03";
$stmt->execute();

$description = "臆病ですが、人馴れしています！ベタ慣れしています。ぱっちり目のピグミーヘッジホッグです。おっとりした性格ですが、食いしん坊で食欲旺盛、活発な赤ちゃんです。";
$type = "小動物";
$classifcation = "ハリネズミ";
$birthplace = "タイ";
$birthday = "2020/01/02";
$stmt->execute();

$description = "まだ人馴れしていない赤ちゃんヒョウモントカゲモドキです！ぱっちり大きな目で食欲旺盛。なつくとしっぽをふりふりしてくれます。人気のハイポタンジェリンです。";
$type = "小動物";
$classifcation = "爬虫類";
$birthplace = "アメリカ";
$birthday = "2019/01/01";
$stmt->execute();

$description = "なつくと主人に忠実な柴犬です！くりくりぱっちり目で元気いっぱい愛嬌のよい子です！色はブラウン系のレッドカラーです！遊ぶことが大好きなかわいい子です";
$type = "犬";
$classifcation = "柴犬";
$birthplace = "静岡県";
$birthday = "2019/10/29";
$stmt->execute();

$description = "非常におっとりした性格のネザーランドドワーフラビットです！ベタ慣れしています。オレンジ系のふわふわ毛の美人さん。";
$type = "小動物";
$classifcation = "ウサギ";
$birthplace = "秋田県";
$birthday = "2019/12/25";
$stmt->execute();

$description = "元気いっぱいのチワワです！愛嬌たっぷり人馴れしていて遊ぶことが大好きです。うるうるの大きな目でみつめてきます！色はブラウン系の長毛チョコレートタンです。";
$type = "犬";
$classifcation = "チワワ";
$birthplace = "岩手県";
$birthday = "2019/11/30";
$stmt->execute();

$description = "ふわふわおっとりとした性格で食欲旺盛なかわいい子です！愛嬌たっぷり人馴れしています。色はシルバータビーにホワイトグレイ系の短毛です！";
$type = "猫";
$classifcation = "スコティッシュフォールド";
$birthplace = "神奈川県";
$birthday = "2019/12/01";
$stmt->execute();

$description = "くりくりぱっちり大きな目の元気いっぱいなパグです！とにかく遊ぶことが大好きでしっぽをふりふりしておもちゃをもってきます。食欲旺盛！ぺちゃ鼻でもご飯はもりもり！クリーム系フォーンの短毛です。";
$type = "犬";
$classifcation = "パグ";
$birthplace = "静岡県";
$birthday = "2019/11/29";
$stmt->execute();

$description = "ぺちゃ鼻にくりくりぱっちりうるうる大きな目をした子です！おっとりした性格で癒やしてくれます。人馴れしていてとにかく懐っこいです。しっぽをふりふりしてついて来る姿がかわいい！短毛のつやつやブラック。";
$type = "犬";
$classifcation = "パグ";
$birthplace = "北海道";
$birthday = "2019/10/20";
$stmt->execute();

$description = "元気いっぱい活発な子です！イケメン君でキリッとしています、短毛でしっぽはふわふわです！遊ぶことが大好きで人馴れしています。ブラウン系ルディ。";
$type = "猫";
$classifcation = "ソマリ";
$birthplace = "香川県";
$birthday = "2019/10/1";
$stmt->execute();

$description = "特有のぺちゃ鼻おっとり顔ですが元気いっぱい活発な子です！いつもお気に入りのおもちゃで遊んでいます。エキゾチックの中でも長毛のホワイト系シルバータビーです";
$type = "猫";
$classifcation = "エキゾチック";
$birthplace = "東京都";
$birthday = "2019/10/15";
$stmt->execute();

$description = "目鼻立ちの整った美人さんです。食欲旺盛でぱっちり大きな目おっとりした性格でマイペースなかわいい子です！ふわふわのブラウン系長毛で非常に大きく育ちます。";
$type = "猫";
$classifcation = "メイクーン";
$birthplace = "香川県";
$birthday = "2019/10/16";
$stmt->execute();

$description = "まだ人馴れしていない活発なジャンガリアンハムスターの赤ちゃんです！ふわふわの毛でおしりふりふりぱっちり目でいつも頬袋にひまわりの種でいっぱいな姿がかわいいです。";
$type = "小動物";
$classifcation = "ハムスター";
$birthplace = "神奈川県";
$birthday = "2019/12/31";
$stmt->execute();

$description = "鎧のような鱗がかっこいい人気のアルマジロトカゲです！警戒すると丸くなる姿がかわいい。人馴れしているので手に乗ります。おっとりした性格マイペースでよく寝るので暖かい部屋をよういしてあげてください。";
$type = "小動物";
$classifcation = "爬虫類";
$birthplace = "南アフリカ";
$birthday = "2017/05/08";
$stmt->execute();


$sql2 = "select * from animals";

$stmt = $dbh->prepare($sql2);

$stmt->execute();

$animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($animals as $animal) {
  echo $animal['type'] .  'の' . $animal['name'] . 'さん<br>' . 
  $animal['description'] . '<br>' . $animal['birthplace'] . '<br>' . 
  $animal['birthday'];
}
