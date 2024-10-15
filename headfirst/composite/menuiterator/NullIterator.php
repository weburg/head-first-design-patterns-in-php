<?php
require_once "java/Iterator.php";

class NullIterator implements java\Iterator {
    public function next() {
        return NULL;
    }

    public function hasNext() {
        return FALSE;
    }

    public function remove() {
        throw new BadMethodCallException();
    }
}
?>