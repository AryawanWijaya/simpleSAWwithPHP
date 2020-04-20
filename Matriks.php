<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include 'connection.php';
    include 'Navigasi.php';
    ?>
    <div class="container">
        <div class="jumbotron mt-3">
        <table class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td>Alternatif</td>
                    <td>C1</td>
                    <td>C2</td>
                    <td>C3</td>
                </tr>
                <?php
                echo "<h3>Data Matriks</h3>";
                $sql1 = mysqli_query($conn, "SELECT * from tb_alternative");
                while ($r1 = mysqli_fetch_array($sql1, MYSQLI_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $r1['id'] ?></td>
                        <td><?php echo $r1['alternative'] ?></td>
                        <td><?php echo $r1['c1'] ?></td>
                        <td><?php echo $r1['c2'] ?></td>
                        <td><?php echo $r1['c3'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>