<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="../bootstrap-4.6.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    
    <?php
        $var = ["PHP ", 1];
        $var2 = [
            [
                "hewan" => "ayam",
                "harga" => "5000"
            ],
            [
                "hewan" => "ikan",
                "harga" => "5500"
            ],
            [
                "hewan" => "angsa",
                "harga" => "6000"
            ],
            [
                "hewan" => "lele",
                "harga" => "6500"
            ],
            [
                "hewan" => "udang",
                "harga" => "10000"
            ],
            [
                "hewan" => "sapi",
                "harga" => "17.000.000"
            ]
        ];
        $var3 = [
            [
                "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlLxbkDa5ejVZdWNSTkNanUJx1mhIqaIohow&usqp=CAU",
                "nama" => "ayam"
            ],
            [
                "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWt4p7TKZDYolhxshL4N1JUCMqWsHPabMjMQ&usqp=CAU",
                "nama" => "ikan"
            ],
            [
                "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTecm3ZYlJ7IZcRw67n7Hi0FbknkogQ05t94Q&usqp=CAU",
                "nama" => "angsa"
            ],
            [
                "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu8ImDo-EfUxmZQtkUakm2BeEtWwmCgRfMRQ&usqp=CAU",
                "nama" => "lele"
            ],
            [
                "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmiaAapUTeBlWzJN_pWgipyUD6pEFm1ifnkw&usqp=CAU",
                "nama" => "udang"
            ],
            [
                "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw8kisbxz6mmvVT_TZi8knz9AExT0BGmUlbQ&usqp=CAU",
                "nama" => "sapi"
            ]
        ];
    ?>
    <h1 class="mt-5 text-center" style="font-size: 100px;"><?php 
        foreach ($var as $v) {
            echo($v);
        };
    ?></h1>
    <?php foreach($var2 as $v2) {?>
        <ul>
            <li>
                <?php echo ($v2['hewan']) ?>
            </li>
            <li>
                <?php echo ($v2['harga']) ?>
            </li>
        </ul>
    <?php }; ?>
    <?php foreach($var3 as $v3) {?>
        <div class="container-fluid d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-4">
                <img src="<?php echo ($v3['gambar']) ?>" alt="" style="margin-left: -100px;" width="200px">
            </div>
        </div>
    </div>
    <?php }; ?>
    <button><a href="kotak.php" target="_blank" rel="noopener noreferrer">Pencet Ini</a></button>
    <script src="sidebar.js"></script>
    <script src="../bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM8KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>