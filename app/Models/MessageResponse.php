<?php

namespace  App\Models;

class MessageResponse {

    public function __get($name) {

        return $this->$name;
    }

    public function __set($name, $value) {

        $this->$name = $value;
    }

}