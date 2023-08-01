<body style="background-color: skyblue">

    <?php
    if (isset($_POST['submit'])) {
        ?>
        <div style="background-color: <?= $pagemsg['color'] ?>;color:white;"><?= $pagemsg['msg'] ?></div>
        <?php
        if ($pagemsg['msg'] == "password ok") {
//                var_dump($pagemsg);
            ?>
            <br><br>
            <a href="<?= Host; ?>home" target="_blank" style="padding: 10px;background-color: #0062cc;color:white;text-decoration: none;"><b>booking site</b></a>

            <form action="" method="post">
                <br>
                <table border="3px solid black" style="border-collapse: collapse;">
                    <tr><td><h3>id</h3></td><td><h3>Name</h3></td><td><h3>Unit-Name</h3></td><td><h3>Designation</h3></td><td><h3>Address</h3></td><td><h3>No.of people coming</h3></td><td><h3>No.of room needed</h3></td><td><h3>Check-in Date</h3></td><td><h3>Check-out Date</h3></td><td><h3>Contact number</h3></td><td><h3>Email</h3></td><td><h3>Approval status</h3></td><td><h3>room alloted</h3></td><td><h3>Approve</h3></td><td><h3>Not Approve</h3></td></tr>

                    <?php
                    foreach ($data as $result) {
                        $id = $result['id'];
                        $name = $result['name'];
                        $branch = $result['branch'];
                        $designation = $result['designation'];
                        $Address = $result['Address'];
                        $people_no = $result['people_no'];
                        $no_room = $result['no_room'];
                        $check_in = $result['check_in'];
                        $check_out = $result['check_out'];
                        $ph_no = $result['ph_no'];
                        $email = $result['email'];
                        $approval = $result['approval'];
                        $room_alloted = $result['room_alloted'];
                        ?>

                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <td><?= $branch ?></td>
                            <td><?= $designation ?></td>
                            <td><?= $Address ?></td>
                            <td><?= $people_no ?></td>
                            <td><?= $no_room ?></td>
                            <td><?= $check_in ?></td>
                            <td><?= $check_out ?></td>
                            <td><?= $ph_no ?></td>
                            <td><?= $email ?></td>
                            <td><?= $approval ?></td>
                            <td><?= $room_alloted ?></td>
                            <td><b>Allot room</b>
                                <input type="text" name="room<?= $id ?>"><br>
                                <button  type="submit" name="approve" value="<?= $id ?>">approve</button></td>
                            <td><button  type="submit" name="not_approve" value="<?= $id ?>">not approve</button></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table></form>

            <?php
        } else {
            ?>
            <form action="" method="post">
                <table>
                    <tr><td><b>Password</b></td><td><input type="password" name="password"> </td></tr>
                    <tr><td><input type="submit" value="submit password" name="submit"></td><td></td></tr>
                </table>
            </form>
            <?php
        }
        ?>
        <?php
    } elseif (isset($_POST['approve'])) {
        ?>

        <div style="background-color: <?= $pagemsg['color'] ?>;color:white;">Approval <?= $pagemsg['msg'] ?></div>
        <form action="" method="post">
            <br><br><br>
            <table border="3px solid black" style="border-collapse: collapse;">
                <tr><td><h3>id</h3></td><td><h3>Name</h3></td><td><h3>Unit-Name</h3></td><td><h3>Designation</h3></td><td><h3>Address</h3></td><td><h3>No.of people coming</h3></td><td><h3>No.of room needed</h3></td><td><h3>Check-in Date</h3></td><td><h3>Check-out Date</h3></td><td><h3>Contact number</h3></td><td><h3>Email</h3></td><td><h3>Approval status</h3></td><td><h3>room alloted</h3></td><td><h3>Approve</h3></td><td><h3>Not Approve</h3></td></tr>

                <?php
                foreach ($data as $result) {
                    $id = $result['id'];
                    $name = $result['name'];
                    $branch = $result['branch'];
                    $designation = $result['designation'];
                    $Address = $result['Address'];
                    $people_no = $result['people_no'];
                    $no_room = $result['no_room'];
                    $check_in = $result['check_in'];
                    $check_out = $result['check_out'];
                    $ph_no = $result['ph_no'];
                    $email = $result['email'];
                    $approval = $result['approval'];
                    $room_alloted = $result['room_alloted'];
                    ?>

                    <tr><td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td><?= $branch ?></td>
                        <td><?= $designation ?></td>
                        <td><?= $Address ?></td>
                        <td><?= $people_no ?></td>
                        <td><?= $no_room ?></td>
                        <td><?= $check_in ?></td>
                        <td><?= $check_out ?></td>
                        <td><?= $ph_no ?></td>
                        <td><?= $email ?></td>
                        <td><?= $approval ?></td>
                        <td><?= $room_alloted ?></td>
                        <td>
                            <b>Allot room</b>
                            <input type="text" name="room<?= $id ?>"><br>
                            <button  type="submit" name="approve" value="<?= $id ?>">approve</button></td>
                        <td><button  type="submit" name="not_approve" value="<?= $id ?>">not approve</button></td></tr>

                    <?php
                }
                ?>

            </table></form>
    <?php } elseif (isset($_POST['not_approve'])) {
        ?>

        <div style="background-color: <?= $pagemsg['color'] ?>;color:white;">Deapproval <?= $pagemsg['msg'] ?></div>
        <form action="" method="post">
            <br><br><br>
            <table border="3px solid black" style="border-collapse: collapse;">
                <tr><td><h3>id</h3></td><td><h3>Name</h3></td><td><h3>Unit-Name</h3></td><td><h3>Designation</h3></td><td><h3>Address</h3></td><td><h3>No.of people coming</h3></td><td><h3>No.of room needed</h3></td><td><h3>Check-in Date</h3></td><td><h3>Check-out Date</h3></td><td><h3>Contact number</h3></td><td><h3>Email</h3></td><td><h3>Approval status</h3></td><td><h3>room alloted</h3></td><td><h3>Approve</h3></td><td><h3>Not Approve</h3></td></tr>

                <?php
                foreach ($data as $result) {
                    $id = $result['id'];
                    $name = $result['name'];
                    $branch = $result['branch'];
                    $designation = $result['designation'];
                    $Address = $result['Address'];
                    $people_no = $result['people_no'];
                    $no_room = $result['no_room'];
                    $check_in = $result['check_in'];
                    $check_out = $result['check_out'];
                    $ph_no = $result['ph_no'];
                    $email = $result['email'];
                    $approval = $result['approval'];
                    $room_alloted = $result['room_alloted'];
                    ?>

                    <tr><td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td><?= $branch ?></td>
                        <td><?= $designation ?></td>
                        <td><?= $Address ?></td>
                        <td><?= $people_no ?></td>
                        <td><?= $no_room ?></td>
                        <td><?= $check_in ?></td>
                        <td><?= $check_out ?></td>
                        <td><?= $ph_no ?></td>
                        <td><?= $email ?></td>
                        <td><?= $approval ?></td>
                        <td><?= $room_alloted ?></td>
                        <td><b>Allot room</b>
                            <input type="text" name="room<?= $id ?>"><br>
                            <button  type="submit" name="approve" value="<?= $id ?>">approve</button></td>
                        <td><button  type="submit" name="not_approve" value="<?= $id ?>">not approve</button></td></tr>

                    <?php
                }
                ?>

            </table></form>
        <?php
    } else {
        ?>
        <form action="" method="post">
            <table>
                <tr><td><b>Password</b></td><td><input type="password" name="password"> </td></tr>
                <tr><td><input type="submit" value="submit password" name="submit"></td><td></td></tr>
            </table>
        </form>
    <?php } ?>

</body>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

