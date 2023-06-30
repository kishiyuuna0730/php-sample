<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
extract($_POST);
$errors = [];

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'test';

$mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);

// 接続成功時の処理
$query  = "SELECT id, last_name, first_name, tel, number_1 FROM form ORDER BY id ASC";
$stmt   = $mysqli->prepare($query);

if (!empty($name)) {
  $where  = implode(" AND ", $name);
  $query  = "SELECT id, last_name, first_name, tel, number_1, number_2 FROM form WHERE {$name} ORDER BY id ASC";
  $stmt   = $mysqli->prepare($name);
}

$wheres = [];
if (!empty($name)) {
  $wheres[] = "(first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%')";
}

// 開始と終了がどちらも入っている時
if(!empty($created_at_start) && !empty($created_at_end)){
    $wheres[] = "create_at >= '($created_at_start)'";
    $wheres[] = "create_at <= '($created_at_end)'"; 

    $wheres[] = "(create_at BETWEEN '%{$created_at_start}%' AND '%{$created_at_end}%')";
}

// 開始しか入っていない時
else if(!empty($created_at_start)){
    $wheres[] = "create_at >= '($created_at_start)'";
}

// 終了しか入っていない時
else if(!empty($created_at_end)){  
    $wheres[] = "create_at <= '($created_at_end)'"; 
}

if ($mysqli->connect_error) {
    $errors[] = "[{$mysqli->connect_errno}]::MySQLのエラーです";
} else {
    // 接続成功時の処理
    $query  = "SELECT * FROM form";
    $stmt   = $mysqli->prepare($query);
    try {
        $stmt->execute();

        $rows = [];
        $result = $stmt->get_result();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $rows[] = $row;
        }
    } catch (Exception $e) {
        $errors[] = "[99999]::{$e->getMessage()}";
    }
}

$mysqli->close();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>映画予約サイト</title>
</head>

<body>
    <div class="container">
        <h1>映画観覧予約フォーム</h1>
        <form method="post" action="list.php">
            <legend>検索フォーム</legend>
            <div class="mb-3 row">
                <label for="number_2" class="col-sm-2 col-form-label">席</label>
                <div class="col-sm-10">
                <input type="number" name="number_2" class="form-control" id="number_2">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="time" class="col-sm-2 col-form-label">時間</label>
                <div class="col-sm-10">
                <input type="time" name="time" class="form-control" id="time">
            </div>
            <legend>検索</legend>
      </div>
        </form>
        <?php if (empty($errors)) { ?>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>名前(姓)</th>
                        <th>ID</th>
                        <th>住所</th>
                        <th>会員証番号</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo "{$row['first_name']}"; ?></td>
                            
                            <td><?php echo ( $row['id'] ); ?></td>
                            <td><?php echo ( $row['address'] ); ?></td>
                            <td><?php echo ( $row['text1'] );  ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo implode("<br>", $errors); ?>
            </div>
        <?php } ?>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>