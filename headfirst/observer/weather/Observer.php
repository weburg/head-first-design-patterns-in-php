<?php
interface Observer {
    public function update($temp, $humidity, $pressure);
}
?>