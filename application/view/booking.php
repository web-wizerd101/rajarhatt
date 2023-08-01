<?php include_once HEADER_FILE; ?>
<?php include_once Head; ?>
<?php include_once Menu; ?>
<body style="background-color: skyblue;overflow-x: hidden">
    <form action="" method="post">
        <h3><b>Book rooms</b></h3>
        <?php
        if (isset($_POST['apply'])) {
            $identity = $data['id'] + 1;
            echo "<div style=background-color:$pagemsg[color];color:white><b>$pagemsg[msg] </b><b>$identity</b> please note it to see approval status</div>";
//            var_dump($data);
        }
        ?>
        <table>
            <tr><td><b>Name:</b></td><td><input type="text" name="name"> </td></tr>
            <tr><td><b>Unit Name:</b></td><td><input type="text" name="branch_name"> </td></tr>
            <tr><td><b>Designation:</b></td><td> <input type="text" name="designation"> </td></tr>
            <tr><td><b>Address:</b></td><td> <input type="text" name="address"> </td></tr>
            <tr><td><b>Number of people coming:</b></td><td><input type="number" min="1" name="ppl_num"></td></tr>
            <tr><td><b>Number of room needed:</b></td><td><input type="number" min="1" name="room_num"></td></tr>
            <tr><td><b>Check-in Date:</b></td><td><input type="Date" min="" name="chk_in"></td></tr>
            <tr><td><b>Check-Out Date:</b></td><td><input type="Date" min="" name="chk_out"></td></tr>
            <tr><td><b>Contact Number:</b></td><td><input type="number" min="1" name="ph_num"></td></tr>
            <tr><td><b>Email:</b></td><td><input type="text" name="mail"></td></tr>
            <tr><td><input type="submit" value="Apply for room" name="apply"></td><td></td></tr>
        </table>
    </form>

</body>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

