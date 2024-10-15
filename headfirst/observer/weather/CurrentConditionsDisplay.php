<?php
class CurrentConditionsDisplay implements Observer, DisplayElement {
    private $temperature;
    private $humidity;
    /**
     * @var Subject
     */
    private $weatherData;

    public function __construct(Subject $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display() {
        println("Current conditions: " . number_format($this->temperature, 1) .
                "F degrees and " . number_format($this->humidity, 1) . "% humidity");
    }
}
?>