
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


// もしREQUEST_METHODがGETだったら
// キーワードを変数に代入
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $keyword = $_GET['keyword']; 
// もし変数(キーワード)が空の場合
// animalsテーブルから全件データを取得し変数(配列)に代入
  if ($keyword == '') { 
    $sql = "select * from animals";
    $stmt = $dbh->prepare($sql);
} else {
// キーワードが空以外の場合
// animalsテーブルからキーワードを含んだデータのみをlikeで取得し変数(配列)に代入
$sql = "select * from animals where description like :keyword";
$stmt = $dbh->prepare($sql);
$keyword_param = "%" . $keyword . "%";
$stmt->bindParam(":keyword", $keyword_param);
  }
  $stmt->execute();
  $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ペットショップアプリ検索</title>
</head>

<body>
  <h1>本日のご紹介ペット！</h1>
  <p>
    <form action="" method="get">
    <label for="keyword">キーワード:
      <input type="text" placeholder="キーワードの入力" name="keyword">
    </label> 
    <input type="submit" value="検索">
    </form>
    <ul>
      <?php foreach ($animals as $animal)  : ?>
        <li>
          <?php echo $animal['type'] .  'の' . $animal['classifcation'] . 'ちゃん' . '<br>' . 
  $animal['description'] . '<br>' . 
  $animal['birthday'] . ' 生まれ' . '<br>' . 
  '出身地 ' . $animal['birthplace'] . 
  '<hr>'; ?>
    </li>
    <?php endforeach; ?>
</ul>
<hr>

</p>
</body>
</html>
