<?php
require_once "java/Enumeration.php";
require_once "java/Iterator.php";

class IteratorEnumeration implements Enumeration {
    /**
     * @var java\Iterator
     */
    protected $iterator;

    public function __construct(java\Iterator $iterator) {
        $this->iterator = $iterator;
    }

    public function hasMoreElements() {
        return $this->iterator->hasNext();
    }

    public function nextElement() {
        return $this->iterator->next();
    }
}
?>