<?php

extract($_POST);
$errors = [];

// 名前
if (empty($last_name)){
    $errors['Last_name'] = "名前(姓)が未入力です";
}

if (empty($first_name)){
    $errors['first_name'] = "名前(名)が未入力です";
}

if (empty($last_name_kana)){
    $errors['last_name_firigana'] = "名前(せい)が未入力です";
}

if (empty($first_name_kana)){
    $errors['first_name_hiragana'] = "名前(めい)が未入力です";
}
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
      <?php if(empty($errors)) { ?>
        <form action="./complate.php" method="post">
      <?php } else { ?>
      <div class="alert alert-danger" role="alert">
            <?php echo implode("<br>", $errors); ?>
      </div>
      <?php } ?>
      <form action="./complate.php" method="post">
      <div class="mb-3 row">
    <label for="last_name" class="col-sm-2 col-form-label">名前(姓)</label>
    <div class="col-sm-10">
      <input
        type="text"
        name="last_name"
        readonly
        class="form-control-plaintext"<?php echo in_array("last_name", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="last_name"
        value="<?php echo $_POST['last_name']; ?>"
        >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="first_name" class="col-sm-2 col-form-label">名前(名)</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="first_name"
        readonly
        class="form-control-plaintext"<?php echo in_array("first_name", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="first_name"
        value="<?php echo $_POST['first_name']; ?>"
        >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="last_name_kana" class="col-sm-2 col-form-label">名前(せい)</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="last_name_kana"
        readonly
        class="form-control-plaintext"<?php echo in_array("last_name_kana", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="last_name_kana"
        value="<?php echo $_POST['last_name_kana']; ?>"
        >
    </div>
  </div>
  <div class="mb-3 row">
    <label for="first_name_kana" class="col-sm-2 col-form-label">名前(めい)</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="first_name_kana"
        readonly
        class="form-control-plaintext"<?php echo in_array("first_name_kana", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="first_name_kana"
        value="<?php echo $_POST['first_name_kana']; ?>"
        >
    </div>
  </div>
    <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">住所</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="address"
        readonly
        class="form-control-plaintext"<?php echo in_array("address", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="address"
        value="<?php echo $_POST['address']; ?>"
        >
    </div>
    </div><div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">電話番号</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="tel"
        readonly
        class="form-control-plaintext"<?php echo in_array("tel", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="tel"
        value="<?php echo $_POST['tel']; ?>"
        >
    </div>
    </div><div class="mb-3 row">
    <label for="number_1" class="col-sm-2 col-form-label">何人</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="number_1"
        readonly
        class="form-control-plaintext"<?php echo in_array("number_1", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="number_1"
        value="<?php echo $_POST['number_1']; ?>"
        >
    </div>
    </div><div class="mb-3 row">
    <label for="number_2" class="col-sm-2 col-form-label">席</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="number_2"
        readonly
        class="form-control-plaintext"<?php echo in_array("number_2", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="number_2"
        value="<?php echo $_POST['number_2']; ?>"
        >
    </div>
    </div><div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">時間</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="time"
        readonly
        class="form-control-plaintext"<?php echo in_array("time", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="time"
        value="<?php echo $_POST['time']; ?>"
        >
    </div>
    </div>
    <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">観覧映画</label>
    <div class="col-sm-10">
        <?php echo $_POST['book']; ?>
        <input type="hidden" name="book" value="<?php echo $_POST['book']; ?>">
    </div>
    </div>
    <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">支払い</label>
    <div class="col-sm-10">
        <?php echo $_POST['payment']; ?>
        <input type="hidden" name="payment" value="<?php echo $_POST['payment']; ?>">
    </div>
    </div>
    <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">会員証</label>
    <div class="col-sm-10">
    <input
        type="text"
        name="text1"
        readonly
        class="form-control-plaintext"<?php echo in_array("text1", array_keys($errors)) ? "is-invalid" : "" ?>"
        id="text1"
        value="<?php echo $_POST['text1']; ?>"
        >
    </div>
    </div>
    <div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">職業</label>
    <div class="col-sm-10">
    <?php echo $_POST['jobs']; ?>
        <input type="hidden" name="jobs" value="<?php echo $_POST['jobs']; ?>">
    </div>
    </div>
  <button type="submit" class="btn btn-primary">決定</button>
      </form>

      <body>
      <div class="container">
      <?php if(empty($errors)) { ?>
        <form action="./complate.php" method="post">
      </form>
      <?php } else { ?>
      <div class="alert alert-danger" role="alert">
            <?php echo implode("<br>", $errors); ?>
      </div>
      <?php } ?>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </body>
  </body>
</html>