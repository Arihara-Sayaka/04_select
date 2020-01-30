
<?php
$keywords = $_GET['keywords'];
$keyword = '%'.$keyword.'%';

//確認動作あとで消す
echo $_GET;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ペットショップアプリ検索</title>
</head>
<body>
  <h1>本日のご紹介ペット！</h1>
  <p>
    <form action="http://localhost/exercise/04_select/select.php?$_GET['keywords']" method="get">
      キーワード:
    <input type="text" placeholder="キーワードの入力" name="keywords">
    <input type="submit" value="検索">
  </p>

</body>
</html>

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

$sql2 = "select * from animals";
$keyword = "SELECT * FROM animals WHERE [id, description, type, classifcation, birthplace,birthday] LIKE :keyword ";

$stmt = $dbh->prepare($sql2);

$stmt->execute();

$animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($animals as $animal) {
  
  if ($keywords == $keyword)

  echo $animal['type'] .  'の' . $animal['classifcation'] . 'ちゃん' . '<br>' . 
  $animal['description'] . '<br>' . 
  $animal['birthday'] . ' 生まれ' . '<br>' . 
  '出身地 ' . $animal['birthplace'] . 
  '<hr>';
};

?>