<?php
require_once("./php/operations.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Book Store</title>
  <link rel="stylesheet" href="Src/CSS/all.min.css" />
  <link rel="stylesheet" href="Src/CSS/bootstrap.min.css" />
  <link rel="stylesheet" href="Src/CSS/style.css" />
</head>

<body>
  <main>
    <div class="container text-center">
      <h1 class="py-4 bg-dark text-light rounded">
        <i class="fas fa-swatchbook"></i>
        Book Store
      </h1>
      <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50">
          <div class="pt-2">
            <?php inputElement("fa fa-id-badge", "ID", "book_id"); ?>
          </div>
          <div class="pt-2">
            <?php inputElement("fas fa-book", "BookName", "book_name"); ?>
          </div>
          <div class="row pt-2">
            <div class="col">
              <?php inputElement("fa fa-people-carry", "Publisher", "book_publisher"); ?>
            </div>
            <div class="col">
              <?php inputElement("fa fa-dollar-sign", "Price", "book_price"); ?>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <?php buttonElment("btn-create", "create", "btn btn-success", "<i class='fas fa-plus'></i>", "data-toggle='tooltip'data-placement='bottom'title='Create'"); ?>
            <?php buttonElment("btn-read", "read", "btn btn-primary", "<i class='fas fa-sync'></i>", "data-toggle='tooltip'data-placement='bottom'title='Read'"); ?>
            <?php buttonElment("btn-update", "update", "btn btn-light border", "<i class='fas fa-pen-alt'></i>", "data-toggle='tooltip'data-placement='bottom'title='Update'"); ?>
            <?php buttonElment("btn-delete", "delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "data-toggle='tooltip'data-placement='bottom'title='Delete'"); ?>
          </div>
        </form>
      </div>
      <!-- Table bootstrap -->
      <div class="d-flex table-data">
        <table class="table table-striped table-dark">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Book Name</th>
              <th>Publisher</th>
              <th>Book Price</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="tbody">
            <?php
            if (isset($_POST["read"])) {
              $result =   getData();
              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr class="">
                    <td> <?php echo $row["id"] ?> </td>
                    <td> <?php echo $row["book_name"] ?> </td>
                    <td> <?php echo $row["book_publisher"] ?> </td>
                    <td> <?php echo $row["book_price"] ?> R$ </td>
                    <td><a class="btnedit"><i class="fas fa-edit "></i></a></td>
                  </tr>
            <?php
                }
              }
            }
            ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <script src="Src/JS/jquery-3.3.1.slim.min.js"></script>
  <script src="Src/JS/bootstrap.min.js"></script>
  <script src="Src/JS/popper.min.js"></script>
  <script src="Src/JS/all.min.js"></script>
  <script src="Src/JS/main.js"></script>
</body>

</html>