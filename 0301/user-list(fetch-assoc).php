<?php
require_once("db_connect.php"); //要求重複執行一次上一支程式碼//
$sql = "SELECT * FROM users ORDER BY id ASC";  //選擇從表單USERS把資料提取出來//
//要記得加上 * 字號//
$result = $conn->query($sql); //這裡產生物件//
?>


<!doctype html>
<html lang="en">

<head>
  <title>user-list</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="py-2">
      <a href="./create-user.php" class="btn btn-info">
        新增使用者</a>

      <?php
      $data = $result->fetch_all(MYSQLI_ASSOC);
      //var_dump($data);//
      //var_dump($data); 檢查資料有沒有以方式陣列出現//
      ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>account</th>
            <th>gender</th>
            <th>phones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result->num_rows > 0) :
            while ($row = $result->fetch_assoc()) :
          ?>
              <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["account"] ?></td>
                <td><?= $row["gender"] ?></td>
                <td><?= $row["phones"] ?></td>
                <td><a class="btn btn-info " href="user.php?
                id=<?= $row["id"] ?>">詳細資料</a></td>

              </tr>
            <?php endwhile; ?>
          <?php else : ?>
            <tr>
              <td colspan="4">沒有資料</td>
            </tr>
          <?php endif; ?>

        </tbody>

      </table>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>