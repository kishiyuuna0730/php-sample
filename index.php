<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>映画予約サイト</title>
</head>

<body>
  <div class="container">
    <h1>映画観覧予約フォーム</h1>
    <form action="./confirm.php" method="post">
      <div class="mb-3 row">
        <label for="last_name" class="col-sm-2 col-form-label">名前(姓)</label>
        <div class="col-sm-10">
          <input type="text" name="last_name" class="form-control" id="last_name">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="first_name" class="col-sm-2 col-form-label">名前(名)</label>
        <div class="col-sm-10">
          <input type="text" name="first_name" class="form-control" id="first_name">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="last_name_kana" class="col-sm-2 col-form-label">名前(せい)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="last_name_kana" id="last_name_firigana">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="first_name_kana" class="col-sm-2 col-form-label">名前(めい)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="first_name_kana" id="first_name_hiragana">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">住所</label>
        <div class="col-sm-10">
          <input type="text" name="address" class="form-control" id="address">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="tel" class="col-sm-2 col-form-label">電話番号</label>
        <div class="col-sm-10">
          <input type="tel" name="tel" class="form-control" id="tel">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="number_1" class="col-sm-2 col-form-label">何人</label>
        <div class="col-sm-10">
          <input type="number" name="number_1" class="form-control" id="number_1">
        </div>
      </div>
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
      </div>
      <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">観覧映画</label>
        <div class="col-sm-10">
          <select class="form-select" name="book" aria-label="Default select example">
            <option value="竜とそばかすの姫">竜とそばかすの姫</option>
            <option value="アナと雪の女王２">アナと雪の女王２</option>
            <option value="ドラえもん新のび太の日本誕生">ドラえもん新のび太の日本誕生</option>
            <option value="ワンピースONE">ワンピースONE</option>
            <option value="白雪姫">白雪姫</option>
            <option value="SPYFAMIRY映画劇場版">SPYFAMIRY映画劇場版</option>
            <option value="紺青の拳">紺青の拳</option>
            <option value="ゼロの執行人">ゼロの執行人</option>
            <option value="漆黒の追跡">漆黒の追跡</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">支払い</label>
        <div class="col-sm-10">
          <select class="form-select" name="payment" aria-label="Default select example">
            <option value="カード">カード</option>
            <option value="現金">現金</option>
            <option value="交通系">交通系</option>
          </select>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="text" class="col-sm-2 col-form-label">会員証</label>
        <div class="col-sm-10">
          <input type="text1" name="text1" class="form-control" id="text1">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">職業</label>
        <div class="col-sm-10">
          <select class="form-select" name="jobs" aria-label="Default select example">
            <option value="経営者・役員">経営者・役員</option>
            <option value="会社員">会社員</option>
            <option value="契約社員・派遣社員">契約社員・派遣社員</option>
            <option value="パート・アルバイト">パート・アルバイト</option>
            <option value="公務員">公務員</option>
            <option value="教職員">医療関係者</option>
            <option value="自営業・自由業">自営業・自由業</option>
            <option value="専業主婦・主夫">専業主婦・主夫</option>
            <option value="学生">学生</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">決定</button>
    </form>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>