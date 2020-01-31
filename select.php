
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

$keywords = $_GET['keywords'];
$keyword = '%'.$keyword.'%';

$sql2 = "SELECT * FROM animals WHERE description LIKE $keyword = :keywords";

$stmt = $dbh->prepare($sql2);
$stmt->bindParam(":keywords", $keywords);
$stmt->execute();

$animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $keywords = $_GET['keywords'];
  $errors = [];

  if ($keywords == '') {
    $errors = ['検索ワードを入力して下さい'];
  }
  if (empty($errors)) {
  $sql = "update animals set keywords = :keywords, update_at";

  $stmt = $dbh->prepare($sql2);
  $stmt->bindParam(":keywords", $keywords);
  $stmt->execute();
  }
}

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

</body>
</html>




<?php

//あとで復習のため取っておく

// foreach ($animals as $animal) {
//   echo $animal['type'] .  'の' . $animal['classifcation'] . 'ちゃん' . '<br>' . 
//   $animal['description'] . '<br>' . 
//   $animal['birthday'] . ' 生まれ' . '<br>' . 
//   '出身地 ' . $animal['birthplace'] . 
//   '<hr>';
// };

?>