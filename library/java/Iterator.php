<?php
/*
 * Mimic Java's Iterator
 */

namespace java;

interface Iterator {
    public function hasNext();

    public function next();

    public function remove();
}
?>