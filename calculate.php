<?php
if (isset($_GET['birthday']) && isset($_GET['age'])) {
	if (is_numeric($_GET['birthday']) && is_numeric($_GET['age'])) {
		$birthday = $_GET['birthday'];
		$age = $_GET['age'];
		$answer = $birthday + $age;
	} else {
		$answer = "半角数字で入力してください";
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題２０</title>
</head>
<body>
<h1>計算(足し算)</h1>
<?php if (isset($answer)): ?>
<?= $answer; ?>
<?php else: ?>
<form action="calculate.php" method="GET">
<p>誕生日<input type="text" name="birthday"></p>
<p>例)2021年11月4日生まれ→20211104</p>
<p>年齢<input type="text" name="age"></p>
<input type="submit" value="送信">
</form>
<?php endif; ?>
</body>
</html>
