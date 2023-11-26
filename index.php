<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body class="body">
    <div class="p row justify-content-center m-auto shadow mt-3 py-3 col-md-30">
        <form action="insert.php" method="post">
            <div class="container">
                <div class="row justify-content-center m-auto shadow mt-3 py-3 ">
<!-- wavy text -->
                <div class="wavy">
        <span style="--i:1;">T</span>
        <span style="--i:2;">O</span>
        <span style="--i:3;">D</span>
        <span style="--i:4;">O</span>
        <span style="--i:5;">L</span>
        <span style="--i:6;">I</span>
        <span style="--i:7;">S</span>
        <span style="--i:8;">T</span>
    </div>
                    <div class="col-8">
                        <input type="text" name="list" class="form-control shadow bg-dark text-light">
                    </div>
                    <div class="col-2">
                        <button class="tombol"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </form>

        <!-- GET DATA FROM LOCALHOST -->
        <?php
        include "config.php";
        $sql = mysqli_query($con, "SELECT * FROM `tabeltodo`");

        $i = 1;
        ?>
        <!-- TAMPILKAN DATA -->
        <div class="wrapper">
            <?php
            while ($row = mysqli_fetch_array($sql)) {
            ?>

                <div class="box">
                    <div class="number">
                    <div class="nomor"><span><?php echo $i++?></span></div>
                </div>
                    <div class="bulat"></div>
                    <div class="list"><?php echo $row["list"] ?></div>
                    <div class="bottom">
                        <div class="update"><a href="update.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square">Edit</i></a></div>
                        <div class="delete"><a href="delete.php? ID=<?php echo $row['id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can i">Delete</i></a></div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>