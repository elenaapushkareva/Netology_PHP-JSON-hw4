<?php
$data = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'document.json');
$phonebook = json_decode($data, true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Телефонный справочник из файла JSON</title>
</head>
<body>
<table>
	<tr>
		<td>Имя</td>
		<td>Фамилия</td>
		<td>Адрес</td>
		<td>Телефон</td>
	</tr>
	<?php foreach ($phonebook as $item) { ?>
	<tr>
		<td><?php echo $item['firstName']?></td>
		<td><?php echo $item['lastName'] ?></td>
		<td><?php echo $item['address'] ?></td>
		<td><?php echo $item['phoneNumber'] ?></td>

	</tr><?php } ?>
</table>
</body>
</html>