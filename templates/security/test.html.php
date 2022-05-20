<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT.'bootstrap-5.1.3/dist/css/bootstrap.min.css'?>"> 
    <title>Document</title>
</head>
<body>
    <div class="dropdown open">
        <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                    Dropdown
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item disabled" href="#">Disabled action</a>
        </div>
    </div>
<script src="<?= $Constantes::WEB_ROOT.'bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js' ?>"></script>
</body>
</html>