<?php include_once HEADER_FILE; ?>
<?php include_once Head; ?>
<?php include_once Menu; ?>
<body style="background-color: skyblue;overflow-x: hidden">
    <h3><b>Give your review</b></h3>
    <?php
    if (isset($_POST['rv'])) {
        ?>
        <div><?= $pagemsg['msg'] ?></div>
        <?php
    }
    ?>
    <form action="" method="post">
        <table>
            <tr><td><b>NAME:</b></td><td><input type="text" name="name"> </td></tr>
            <tr><td><b>Unit NAME:</b></td><td><input type="text" name="branch_name"> </td></tr>
            <tr><td><b>DESIGNATION:</b></td><td> <input type="text" name="designation"> </td></tr>
            <tr><td><b>REVIEW:</b></td><td> <textarea cols="40" name="review" placeholder="Review" style="resize: none; width:70vw;"></textarea> </td></tr>
            <tr><td><input type="submit" value="Post review" name="rv"></td><td></td></tr>
        </table>
        <hr style="border: 2px solid black;border-radius: 5px">
        <h3><b>Reviews</b></h3>
        <?php
        foreach ($data as $result) {
            $name = $result['name'];
            $branch = $result['branch'];
            $designation = $result['designation'];
            $review = $result['review'];
            ?>
            <div style="background-color: rgb(74,201,255);">
                <table>
                    <tr><td><h3><b><?= $name ?></b></h3></td></tr>
                    <tr><td><h5><b><?= $designation ?> at <?= $branch ?></b></h5></td></tr>
                </table>
                <div><?= $review ?></div>
            </div>
            <br><br><br>
            <?php
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

