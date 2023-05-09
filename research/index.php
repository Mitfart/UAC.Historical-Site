<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
</head>
<body class="bg-info">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-8 mx-auto bg-light rounded p-4">
                    <h5 class="text-center font-weight-bold">AutoComplete Search Using Bootstrap 4, PHP, PDO - MySQL & Ajax</h5>
                    <hr class="my-1">
                    <h5 class="text-center text-secondary">Write any country name in the search box</h5>
                    <form action="details.php" method="post" class="p-3">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
                            <div class="input-group-append">
                                <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
                    <div class="list-group" id="show-list">

                    </div>
                </div> 
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>