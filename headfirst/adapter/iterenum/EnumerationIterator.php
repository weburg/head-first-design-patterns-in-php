<?php
require_once "java/Enumeration.php";
require_once "java/Iterator.php";

class EnumerationIterator implements java\Iterator {
    /**
     * @var Enumeration
     */
    protected $enumeration;

    public function __construct(Enumeration $enumeration) {
        $this->enumeration = $enumeration;
    }

    public function hasNext() {
        return $this->enumeration->hasMoreElements();
    }

    public function next() {
        return $this->enumeration->nextElement();
    }

    public function remove() {
        throw new UnsupportedOperationException();
    }
}
?>