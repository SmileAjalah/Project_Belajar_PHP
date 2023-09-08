<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
    <link rel="stylesheet" href="../bootstrap-4.6.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <?php
    for ($no = 1; $no <= 9; $no++) : ?>
        <div class="row">
            <?php if ($no % 2 == 0) : ?>
                <div class="col-3 border" style="width: 150px;height:150px;color: red;"><?php echo "$no" ?></div>
            <?php else : ?>
                <div class="col-3 border" style="width: 150px;height:150px;color: blue;"><?php echo "$no" ?></div>
            <?php endif; ?>
        </div>
    <?php endfor; ?>

    <table>
        <?php for( $i = 1; $i <= 3; $i++) : ?>
            <?php if($i %2 == 2) : ?>
                <tr>
            <?php else: ?>
                <tr>
                    <?php endif; ?>
                    <?php for( $j = 1; $j <= 3; $j++ ) : ?>
                        
                    <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>

    <div class="container-fluid" style="width: 200px;">
        <div class="row">
            <?php for($i = 1; $i <= 9; $i++) : ?>
                <?php if($i % 2 == 1) : ?>
                <div class="col-4 border border-dark" style="background-color: salmon;">
                    <?php echo($i); ?>
                </div>
                <?php else : ?>
                    <div class="col-4 border border-dark" style="background-color: blue;">
                    <?php echo($i); ?>
                </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>

    <script src="sidebar.js"></script>
    <script src="../bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM8KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>