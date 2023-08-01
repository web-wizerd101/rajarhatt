<?php

class database {

    public function __construct() {
        try {
            $this->con = new PDO("mysql:host=localhost;dbname=doo;port=3306;", "shri", "shri123");
            $this->con->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
            $this->con->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
        } catch (PDOException $e) {
            echo "Database connection Error:" . $e->getMessage();
        }
    }

    //adding database here

    public function Query($qry) {
        //this is an array
        $max_sql = count($qry);
        //number of array
        $sqlerror = 0;
        $begin_res = $this->con->query("begin work");
        for ($i = 0; $i < $max_sql; $i++) {
            $qry_res = $this->con->query($qry[$i]);
            if ($qry_res == false) {
                $error = $this->con->errorInfo();
                $rol_rs = $this->con->query("rollback work");
                return $error[2];
            }
        }
        if ($sqlerror == 0) {
            $com_rs = $this->con->query("commit work");
            return "SUCCESS";
        }
    }

    public function Fetch_all($qry) {
        //return $qry;
        $result = $this->con->query($qry)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}
