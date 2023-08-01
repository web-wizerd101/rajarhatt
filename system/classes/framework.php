<?php

class framework {

    public function view($viewname, $data = array(), $pagemsg = array()) {
        if (file_exists(DOCUMENTROOT . "/application/view/" . $viewname)) {
            require_once DOCUMENTROOT . "/application/view/$viewname";
        } else {
            require_once DOCUMENTROOT . "/application/view/not_found.php";
        }
    }

    public function model($modelname) {
//takes model file name as input^^
        if (file_exists(DOCUMENTROOT . "/application/model/" . $modelname . ".php")) {
            //if               that model exists^
            require_once DOCUMENTROOT . "/application/model/$modelname.php";
            //find that model here ^^

            return new $modelname;
            //return model^^
        } else {
            echo "model not found :- " . DOCUMENTROOT . "/application/model/" . $modelname . ".php";
        }
    }

}

?>