<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL NOMER 1 | UAP PEMOGRAMAN WEB</title>

    <!-- style css -->
    <style>
    #table1,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    #table1,
    th,
    td {
        padding: 5px;
        text-align: left;
    }
    </style>
</head>


<body>

    <div class="container">
        <table style="width:100%" id="table1">
            <caption>CUSTOME ROW AND COLUMN</caption>
            <tr>
                <th style="text-align:center"><span>INPUT</span></th>
                <th style="text-align:center"><span>OUTPUT</span></th>
            </tr>
            <tr>
                <td>

                    <form action="index.php" method="POST">
                        <p>Masukan Jumlah Baris : <input type="text" name="baris"></p>
                        <p>Masukan Jumlah Kolom : <input type="text" name="kolom"></p>

                        <p><input type="submit" name="submit" value="mulai"></p>
                    </form>
                </td>
                <td>
                    <table style="border: 1px solid black">
                        <?php
                            if (isset($_POST['submit'])) {
                                # code...
                                $npm = 201843502274;
                                $baris = $_POST['baris'];
                                $kolom = $_POST['kolom'];
                                for($i=1;$i<=$baris;$i++)
                                {
                                echo "<tr>";
                                for ($j=1;$j<=$kolom;$j++)
                                {
                                echo "<td>$npm
                                </td>";
                                }
                                echo "</tr>";
                                }
                            }
                            ?>
                    </table>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>