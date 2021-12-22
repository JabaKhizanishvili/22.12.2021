<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/14fa96d7be.js" crossorigin="anonymous"></script>
</head>

<body>
    <form action="action.php" method="post">
        სახელი :<br>
        <input type="text" id="fname" name="fname"><br>
        გვარი :<br>
        <input type="text" id="lname" name="lname"><br>
        ასაკი: <br>
        <input type="text" id="age" name="age"><br>
        ქულა: <br>
        <input type="text" id="point" name="point"><br><br>

        <input type="submit" value="Submit">
    </form>
    <br>

    <table border="1" style=" text-align:center;">
        <tr>
            <th>სახელი</th>
            <th>გვარი</th>
            <th>ასაკი</th>
            <th>ქულა</th>
            <th> ჩარიცხვა </th>
        </tr>



        <?php
        session_start();
        $avg = [];
        $above = array();
        foreach ($_SESSION['student'] as $key => $value) {
            if ($value['point'] > 71) {
                array_push($above, $value['point']);
            }
            array_push($avg, $value['point']);
        ?>
            <tr>
                <?php foreach ($value as $v) { ?>
                    <td>
                        <?= $v ?>
                    </td>
                <?php
                }

                if ($value["point"] >= 51) {
                    echo "<td> <i class='fas fa-check' style='color:green;'></i> </td>";
                } else {
                    echo "<td> <i class='fas fa-times' style='color:red;'></i> </td>";
                }

                echo "<td><a href='del.php?id=$key'><button>Del</button></a></td>";

                ?>
            </tr>
        <?php
        } ?>
    </table>
    <br>
    <?= "საშუალო ქულა : " . array_sum($avg) / ++$key; ?>
    <br>
    <?= "71 ზე მაღალი აქვს : " . count($above) ?>

</body>

</html>