<?php

declare (strict_types=1);

ini_set ('display_errors', '1');
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WatchTV Anketa</title>
    <link rel="stylesheet" href="style_ques.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
  <body class="bg-dark">
    <header>
        <nav class="navbar navbar-expand-lg bg-dark bg-opacity-75 mb-3">
            <div class="container">
                <a class="navbar-brand text-warning fs-3 fw-semibold" href="index.html">WatchTV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-warning fw-medium" aria-current="page" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning fw-medium" href="menu.html">Yangilari</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning fw-medium" href="ques.html">So'rovnoma</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 bg-dark-subtle" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="wrapper text-warning">
                <form class="border border-2 border-warning rounded p-3" action="">
                    <h1 class="text-center">Anketa</h1>
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault01" class="form-label">Ismingiz:</label>
                        <input type="text" class="form-control border-2 border-warning rounded-pill" name="givenName" id="validationDefault01" placeholder="Name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault02" class="form-label">Familyangiz:</label>
                        <input type="text" class="form-control border-2 border-warning rounded-pill" name="familyName" id="validationDefault02" placeholder="Surname">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault03" class="form-label">Sharifingiz:</label>
                        <input type="text" class="form-control border-2 border-warning rounded-pill" name="fatherName" id="validationDefault03" placeholder="Sharif">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault05" class="form-label">Manzil:</label>
                        <input type="text" class="form-control border-2 border-warning rounded-pill" name="address" id="validationDefault05" placeholder="City">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationDefault06" class="form-label">Telefon:</label>
                        <input type="tel" class="form-control border-2 border-warning rounded-pill" name="phone" id="validationDefault06" placeholder="+123456789">
                    </div>
                    <div class="row">
                        <label class="form-label">Uylanganmisiz?</label>
                        <div class="btn-group mb-3 col-md-2" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" value="yes" id="btnradio1" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btnradio1">Ha</label>
                        
                            <input type="radio" class="btn-check" name="btnradio" value="no" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btnradio2">Yo'q</label>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="form-label">Qaysi sport turiga qiziqasiz?</label>
                        <div class="btn-group col-md-2" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" name="football" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck1">Futbol</label>
                        
                            <input type="checkbox" class="btn-check" name="chess" id="btncheck2" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck2">Shaxmat</label>
                        
                            <input type="checkbox" class="btn-check" name="tennis" id="btncheck3" autocomplete="off">
                            <label class="btn btn-outline-warning" for="btncheck3">Tennis</label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agree" value="checked" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Shartlarga rozilik bildiring
                            </label>
                        </div>
                    </div> 
                        <div class="col-12 text-center">
                            <button class="btn btn-success" type="submit">Submit form</button>
                            <button class="btn btn-danger" type="reset">Clear</button>
                        </div>
                </form>
                
                <div class="php border border-2 border-success rounded p-3 mt-3 mb-3">
                    <?php


// if (isset($_GET['givenName'], $_GET['familyName'], $_GET['fatherName'], $_GET['address'], $_GET['phone'])) {
//     print "Ismingiz: " . $_GET['givenName'] . '<br />';
//     print "Familyangiz: " . $_GET['familyName'] . '<br />';
//     print "Sharifingiz: " . $_GET['fatherName'] . '<br />';
//     print "Manzilingiz: " . $_GET['address'] . '<br />';
//     print "Telefon raqamingiz: " . $_GET['phone'] . '<br />';
// } else {
//     print "So'rovnomani to'ldiring! <br />";
// }

                    if (!empty($_GET['givenName']) && !empty($_GET['familyName']) && !empty($_GET['fatherName']) && !empty($_GET['address']) && !empty($_GET['phone'])) {
                        print "Ismingiz: " . $_GET['givenName'] . '<br />';
                        print "Familyangiz: " . $_GET['familyName'] . '<br />';
                        print "Sharifingiz: " . $_GET['fatherName'] . '<br />';
                        print "Manzilingiz: " . $_GET['address'] . '<br />';
                        print "Telefon raqamingiz: " . $_GET['phone'] . '<br />';
                    } else {
                        print "So'rovnomani to'ldiring! <br />";
                    }

                    if (isset($_GET['btnradio'])){
                        if ($_GET['btnradio'] === 'yes') {
                            print "Bo'ydoq <br />";
                        } else {
                            print "Oilali <br />";
                        }
                    }

                    if (isset($_GET['football'])) {
                        print "Futbolga qiziqar ekansiz! <br />";
                    }

                    if (isset($_GET['chess'])) {
                        print "Shaxmatga qiziqar ekansiz! <br />";
                    }

                    if (isset($_GET['tennis'])) {
                        print "Tennisga qiziqar ekansiz! <br />";
                    }

                    ?>
                </div>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>