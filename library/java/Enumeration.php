<?php
/*
 * Mimic Java's Enumeration
 */
interface Enumeration {
    public function hasMoreElements();

    public function nextElement();
}
?>