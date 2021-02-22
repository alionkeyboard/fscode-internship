<?php
include './controller/regex.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <title>Regex</title>
</head>

<body>
    <div id="container">
        <header>
            <div class="row">
                <div class="col-md-12">
                    <h1 id="title">Regex Find Pattern</h1>
                </div>
            </div>
        </header>
        <section>

            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-4">
                                <select class="input" name="delimiters" id="delimiters">
                                    <option value="" hidden select>Delimiters</option>
                                    <option value="/">/</option>
                                    <option value="~">~</option>
                                    <option value="@">@</option>
                                    <option value=";">;</option>
                                    <option value="%">%</option>
                                    <option value=".">.</option>
                                    <option value="#">#</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="input" placeholder="pattern" name="pattern">
                            </div>
                            <div class="col-md-4">
                                <div class="multipleSelection">
                                    <div class="selectBox" onclick="showCheckboxes()">
                                        <select>
                                            <option>Regex Options</option>
                                        </select>
                                        <div class="overSelect"></div>
                                    </div>
                                    <div id="checkBoxes">
                                        <label for="global">
                                            <input type="checkbox" name="global" value="g" id="global" />
                                            global (g)
                                        </label>
                                        <label for="multilines">
                                            <input type="checkbox" name="check_list[]" value="m" id="multilines" />
                                            multi lines (m)
                                        </label>
                                        <label for="insensitive">
                                            <input type="checkbox" name="check_list[]" value="i" id="insensitive" />
                                            insensitive (i)
                                        </label>
                                        <label for="extended">
                                            <input type="checkbox" name="check_list[]" value="x" id="extended" />
                                            extended (x)
                                        </label>
                                        <label for="singleline">
                                            <input type="checkbox" name="check_list[]" value="s" id="singleline" />
                                            signle line (s)
                                        </label>
                                        <label for="unicode">
                                            <input type="checkbox" name="check_list[]" value="u" id="unicode" />
                                            unicode (u)
                                        </label>
                                        <label for="Ungreedy">
                                            <input type="checkbox" name="check_list[]" value="U" id="Ungreedy" />
                                            Ungreedy (U)
                                        </label>
                                        <label for="Anchored">
                                            <input type="checkbox" name="check_list[]" value="A" id="Anchored" />
                                            Anchored (A)
                                        </label>
                                        <label for="Jchanged">
                                            <input type="checkbox" name="check_list[]" value="J" id="Jchanged" />
                                            Jchanged (J)
                                        </label>
                                        <label for="Dollarendonly">
                                            <input type="checkbox" name="check_list[]" value="D" id="Dollarendonly" />
                                            Dollar end only (D)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-4">
                                <div class="textArea">
                                    <textarea name="textarea" placeholder="text" rows="4" cols="55"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-4">
                                <button id="checkbutton" type="submit" name="submit">Check</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <span class="help-block"><?php echo $error; ?></span>
        <div id="result">
            <ol>
                <?php foreach ($matches as $match) : ?>
                    <?php foreach ($match as $m) : ?>
                        <li><?php echo $m ?></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ol>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="./js/checkbox.js"></script>
</body>

</html>