<?php 
session_start();

if (isset($_POST['table'])) {
    $table = filter_var(trim($_POST['table']), FILTER_SANITIZE_STRING);

    $servername = "localhost";
    $username = "alphadelta_w5";
    $password = "yS1tSIG_dhwf";
    $dbname = "alphadelta_w5";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if (!$mysql) {
        die(json_encode(["error" => "Connection failed: " . mysqli_connect_error()]));
    }

    
    $table = mysqli_real_escape_string($mysql, $table);
    
    
    $query = "SELECT * FROM `$table`"; 
    $result = $mysql->query($query);

    if ($result) {
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row; 
        }
        echo json_encode($data); 
    } else {
        echo json_encode([
            "error" => "Такой таблицы не найдено",
            "button" => '<button onclick="window.location.href=\'index.php\'">Вернуться на главную</button>'
        ]);
    }

    // Закрываем соединение
    $mysql->close();
} else {
    echo json_encode(["error" => "Не указано имя таблицы"]);
}
