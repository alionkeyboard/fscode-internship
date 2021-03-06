<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task - 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="shadow p-3 mt-5 bg-body rounded">
        <form onsubmit="return false">
            <div class="delimeterList" data-view="off">
                <ul class="list-group">
                    <li class="list-group-item delimeterItem">/</li>
                    <li class="list-group-item delimeterItem">~</li>
                    <li class="list-group-item delimeterItem">@</li>
                    <li class="list-group-item delimeterItem">;</li>
                    <li class="list-group-item delimeterItem">%</li>
                    <li class="list-group-item delimeterItem">`</li>
                    <li class="list-group-item delimeterItem">#</li>
                </ul>
            </div>
            <div class="flagsList" data-view="off">
                <ul class="list-group">
                    <!-- <li class="list-group-item flagItem" data = "g">global <i class="fa fa-check float-right" id="g" data-view="off"></i></li> -->
                    <li class="list-group-item flagItem" data = "m">multi line <i class="fa fa-check float-right" id="m" data-view="off"></i></li>
                    <li class="list-group-item flagItem" data = "i">insensitive <i class="fa fa-check float-right" id="i" data-view="off"></i></li>
                    <li class="list-group-item flagItem" data = "x">extended <i class="fa fa-check float-right" id="x" data-view="off"></i></li>
                    <li class="list-group-item flagItem" data = "s">single line <i class="fa fa-check float-right" id="s" data-view="off"></i></li>
                    <li class="list-group-item flagItem" data = "u">unicode <i class="fa fa-check float-right" id="u" data-view="off"></i></li>
                    <li class="list-group-item flagItem" data = "U">Ungreedy <i class="fa fa-check float-right" id="U" data-view="off"></i></li>
                    <li class="list-group-item flagItem" data = "A">Anchored <i class="fa fa-check float-right" id="A" data-view="off"></i></li>
                    <li class="list-group-item flagItem" data = "J">Jchanged <i class="fa fa-check float-right" id="J" data-view="off"></i></li>
                    <li class="list-group-item flagItem" data = "D">Dollar end only <i class="fa fa-check float-right" id="D" data-view="off"></i></li>
                </ul>
            </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text delimeterDiv"><i class="fa fa-ellipsis-v ellipsis"></i>&nbsp; <span class="delimeter">@</span></div>
            </div>
            <input type="text" class="form-control" id="pattern" placeholder="insert your regular expression here">
            <button type="button" class="delimeterRightBtn" id="delimeter"><span class="delimeter" id="delimeterRight">@</span><span id="existFlags"></span></button>
        </div>
        <div class="form-group mt-4">
            <label for="string">TEST STRING</label>
            <textarea class="form-control" id="string" rows="3" placeholder="insert your test string here"></textarea>
        </div>
        <div class="form-group mb-5">
            <button type="button" class="btn btn-secondary float-right" value="checker" id="checker">Check</button>
        </div>
        </form>
            <div class="rounded p-2 text-white col-12" id="result"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>