<?php

class example extends framework {

    public function __construct() {
        define("APPLICATION_NAME", "My first project");
        $this->mysql = $this->model('model');
    }

    public function index() {
        $this->view("not_found.php");
    }

    public function home() {
        $this->view("home.php");
    }

    public function contact() {
        $this->view("contact.php");
    }

    public function review() {
        $pagemsg = $data = [];
        if (isset($_POST['rv'])) {
            $name = $_POST['name'];
            $branch_name = $_POST['branch_name'];
            $designation = $_POST['designation'];
            $review = $_POST['review'];
            $data_of_model = array('name' => $name, 'branch_name' => $branch_name, 'designation' => $designation, 'review' => $review,);
            $quary = $this->mysql->reviews($data_of_model);
            if ($quary == "SUCCESS") {
                $msg = "review posted";
                $color = "green";
            } else {
                $msg = "review unsuccessful";
                $color = "red";
            }
            $pagemsg = array('msg' => $msg, 'color' => $color);
        }
        $data = $this->mysql->show_reviews();
        $this->view("review.php", $data, $pagemsg);
    }

    public function approvl_sts() {
        $data = $pagemsg = [];
        if (isset($_POST['sb_id'])) {
            $id = $_POST['id'];
            $data = $this->mysql->approval($id);
            $pagemsg = $_POST['id'];
        }
        $this->view("approvl_sts.php", $data, $pagemsg);
    }

    public function booking() {
        $pagemsg = $data = [];
        if (isset($_POST['apply'])) {
            $data_for_modal = array('name' => $_POST['name'], 'branch_name' => $_POST['branch_name'], 'designation' => $_POST['designation'], 'address' => $_POST['address'], 'ppl_num' => $_POST['ppl_num'], 'room_num' => $_POST['room_num'], 'chk_in' => $_POST['chk_in'], 'chk_out' => $_POST['chk_out'], 'ph_num' => $_POST['ph_num'], 'mail' => $_POST['mail']);
            $data = $this->mysql->fill_data($data_for_modal);
            //data[quary]=success/failiure
            //data[id]=application_id
            $msg = "applicaion done your id is";
            if ($data['quary'] == "SUCCESS") {
                $color = "green";
            } else {
                $color = "red";
            }


            $pagemsg = array('msg' => $msg, 'color' => $color);
        }

        $this->view("booking.php", $data, $pagemsg);
        //print  background-color=pagemsg[color](data[quarry] <br> pagemsg[msg] data[id]
    }

    public function admin() {
        $pagemsg = $data = $quary = [];
        $msg = $color = [];
        if (isset($_POST['submit'])) {
            if ($_POST['password'] == "Data123") {
                $msg = "password ok";
                $color = "green";
                $pagemsg = array('msg' => $msg, 'color' => $color);
                $data = $this->mysql->admin();
            } else {
                $msg = "password not ok";
                $color = "red";
                $pagemsg = array('msg' => $msg, 'color' => $color);
            }
        }
        if (isset($_POST['approve'])) {
            $id = $_POST['approve'];
            $approval = "approved";
            $vat = 'room' . $id;
            $room = $_POST[$vat];
            $model_data = array('id' => $id, 'approval' => $approval, 'room' => $room);
            $msg = $this->mysql->admin_fill($model_data);
            if ($msg == 'SUCCESS') {
                $color = 'green';
            } else {
                $color = 'red';
            }
            $pagemsg = array('msg' => $msg, 'color' => $color);
            $data = $this->mysql->admin();
        }
        if (isset($_POST['not_approve'])) {
            $id = $_POST['not_approve'];
            $approval = "not approved";
            $room = " ";
            $model_data = array('id' => $id, 'approval' => $approval, 'room' => $room);
            $msg = $this->mysql->admin_fill($model_data);
            if ($msg == 'SUCCESS') {
                $color = 'green';
            } else {
                $color = 'red';
            }
            $pagemsg = array('msg' => $msg, 'color' => $color);
            $data = $this->mysql->admin();
        }

        $this->view("admin.php", $data, $pagemsg);
    }

    public function photo_galary() {
        $this->view("photo_galary.php");
    }

}
