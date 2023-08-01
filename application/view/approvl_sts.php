<?php include_once HEADER_FILE; ?>
<?php include_once Head; ?>
<?php include_once Menu; ?>
<body style="background-color: skyblue;overflow-x: hidden">
    <form action="" method="post">
        <h3><b>Approval Status</b></h3>
        <table>
            <tr><td><b>Give id:</b></td><td><input type="number" min="1" name="id"></td></tr>
            <tr><td><input type="submit" value="Submit id" name="sb_id"></td><td></td></tr>
        </table>

        <?php
        $k = 0;
        if (isset($_POST['sb_id'])) {
            $color = $bg = [];
            $name = $arpv = $id = [];
            foreach ($data as $result) {
                $name = $result['name'];
                $apv = $result['approval'];
                $id = $result['id'];
                if ($id == $pagemsg) {
                    $k = 1;
                    break;
                }
            }
            if ($apv == "approved") {
                $bg = "green";
                $color = "white";
            } elseif ($apv == "pending") {
                $bg = "yellow";
                $color = "black";
            } else {
                $bg = "red";
                $color = "white";
            }
            ?>
            <?php
            if ($k == 1) {
                ?>
                <center>
                    <table border="3">
                        <tr><td><h3>Name</h3></td><td><h3>Approval Status</h3></td></tr>
                        <tr><td><h3><?= $name ?></h3></td><td style="background-color:<?= $bg ?>; color:<?= $color ?>"><h3><?= $apv ?></h3></td></tr>
                    </table>
                </center>
                <?php
                //            var_dump($data);
                //            var_dump($pagemsg);
            } else {
                echo '<h3><center><b>id not found </b></center></h3>';
            }
        }
        ?>



    </form>
</body>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

