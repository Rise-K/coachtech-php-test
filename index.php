<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
	<style type="text/css">
		table {
		border-collapse : collapse;
		}
		tr,td {
		border : solid 1px black;
		}
	</style>
</head>
<body>
  <table>
  <?php
  for ($a = 1; $a <= 9; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 9; $b++) {
      echo '<td>' . $a * $b . '</td>';
    }
    echo '</tr>';
  }
  ?>
</table>
</body>
</html>

