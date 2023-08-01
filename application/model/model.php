<?php

class model extends database {

//my sql

    function fill_data($data) {

        $sql = "SELECT MAX(id) AS largestid FROM bookingapplication;";
        $maxdata = $this->Fetch_all($sql);
//        var_dump($maxdata);
        $id_finder = $maxdata[0];
        $id = $id_finder['largestid'];
        $name = $data['name'];
        $branch_name = $data['branch_name'];
        $designation = $data['designation'];
        $address = $data['address'];
        $ppl_num = $data['ppl_num'];
        $room_num = $data['room_num'];
        $chk_in = $data['chk_in'];
        $chk_out = $data['chk_out'];
        $ph_num = $data['ph_num'];
        $mail = $data['mail'];
        $ss[] = "insert into bookingapplication (name,branch,designation,Address,people_no,no_room,check_in,check_out,ph_no,email) values ('$name','$branch_name','$designation','$address','$ppl_num','$room_num','$chk_in','$chk_out','$ph_num','$mail')";
        //var_dump($ss);
        $qury = $this->Query($ss);
//        if ($qury == "SUCCESS") {
//            $id = $id++;
//        }
        $k = array('id' => $id, 'quary' => $qury);

        return $k;
    }

    function approval($data) {
//        var_dump($data);
        $sql = "select * from bookingapplication";
        return $this->Fetch_all($sql);
    }

    function admin() {
        $sql = "select * from bookingapplication";
        return $this->Fetch_all($sql);
    }

    function admin_fill($data) {
        $aproval = $data['approval'];
        $room = $data['room'];
        $id = $data['id'];
        $sql[] = "UPDATE bookingapplication SET approval='$aproval', room_alloted='$room' WHERE id='$id'; ";
        return $this->Query($sql);
    }

    function reviews($data) {
        $name = $data['name'];
        $branch_name = $data['branch_name'];
        $designation = $data['designation'];
        $review = $data['review'];
        $sql[] = "insert into review (name,branch,designation,review) values ('$name','$branch_name','$designation','$review')";
        return $this->Query($sql);
    }

    function show_reviews() {
        $sql = "select * from review";
        return $this->Fetch_all($sql);
    }

}
