<?php

class Validation extends Database {

    public $error_msg;

    public function val_trim($field) {
        return trim($field);
    }

    public static function val_empty($field) {
        return empty($field);
    }

    public static function val_session($session) {
        if($session) {
            return true;
        } else {
            return false;
        }
    }
}

?>