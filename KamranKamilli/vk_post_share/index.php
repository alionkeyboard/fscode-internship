<?php
include './controller/uploaddata.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <title>VK Post Share</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 justify-content-around d-flex flex-column">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    ADD ACCOUNT
                </button><a class="btn btn-primary" href="./pages/users.php">SHARE A POST</a>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                        </tr>
                        <thead>
                        <tbody>
                        <?php include './controller/fetchdataToTable.php';?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD ACCOUNT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>First click "AUTHORIZE ACCOUNT" button. Autorize your account and copy URL</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-4">
                                <a class="btn btn-primary" onclick="popup();" href="https://oauth.vk.com/authorize?client_id=<?= ID ?>&display=<?= DISPLAY ?>&redirect_uri=<?= URL ?>&scope=<?= SCOPE ?>&response_type=token&v=5.130" target="popup">AUTHORIZE ACCOUNT</a>
                            </div>
                        </div>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" placeholder="paste a link" name="token">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="./js/getacess.js"></script>
</body>

</html>