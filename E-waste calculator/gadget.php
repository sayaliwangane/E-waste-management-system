<?php
class Gadget {
  protected $name;
  protected $co2;
  protected $image;
  protected $ewaste;
  private $equipments = 0;
  
  public function __construct($name, $co2, $ewaste, $image) {
    $this->name = $name;
    $this->co2 = $co2;
    $this->ewaste = $ewaste;
    $this->image = $image;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getEquipments() {
    return $this->equipments;
  }
  
  public function setEquipments($equipments) {
    $this->equipments = $equipments;
  }

  public function getCo2() {
    return round($this->co2,2);
  }

  public function getTotalCo2() {
    return $this->getCo2() * $this->equipments;
  }
  
  public function getEwaste() {
    return round($this->ewaste,2);
  }

  public function getTotalEwaste() {
    return $this->getEwaste() * $this->equipments;
  }
  
}
?>