<?php
include '../controller/wallpost.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <title>VK Post Share</title>
</head>

<body>
    <div class="container-fluid">
        <form action="" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-primary" role="button" href='../index.php'>Go back</a>
                    </div>
                </div>
            </div>
            <div class="form-group" style="margin-top:20px;width:200px;">
                <div class="row">
                    <div class="col">
                        <select class="form-select" name="users[]" id="selectbox">
                            <option value="" hidden>Select a user</option>
                            <?php include '../controller/fetchdataToSelectBox.php'; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group w-50">
                <div class="row">
                    <div class="col">
                        <textarea class="form-control" name="message" placeholder="write a post"></textarea>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" style="height:auto;" type="submit" name="post">POST</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>