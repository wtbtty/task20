<?php
if (!empty($_GET['name'])) {
	$ans = $_GET['name'];
} else {
	$ans = '名前を入力してください';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題２０受取</title>
</head>
<body>
<?php
echo $ans;
?>
</body>
</html>
