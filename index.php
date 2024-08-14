
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">	
</head>
<body>
    <div class="container">
        <h1>Главная </h1 >			
        <form action="get_data.php" method="post">
            <input type="text" class="form-control" name="table"  placeholder="Введите название таблицы"><br>
            <button class="btn btn-success bit" type="submit">Отправить</button>
        </form>	
    </div>		
</body>
</html>