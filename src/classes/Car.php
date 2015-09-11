<?php


/**
 * Description of Car
 *
 * @author def
 */
namespace src\classes;


class Car extends Product{
    
   private $vinnumber;
   private $color;
   private $engine;
   private $mileage;
   
   public function __construct($vinnumber,$color, $engine, $mileage) {
       parent::__construct();
       $this->vinnumber = $vinnumber;
       $this->color = $color;
       $this->engine = $engine;
       $this->mileage = $mileage;
   }
   
   function getColor() {
       return $this->color;
   }

   function getEngine() {
       return $this->engine;
   }

   function getMileage() {
       return $this->mileage;
   }

   function setColor($color) {
       $this->color = $color;
   }

   function setEngine($engine) {
       $this->engine = $engine;
   }

   function setMileage($mileage) {
       $this->mileage = $mileage;
   }

      
   function getVinnumber() {
       return $this->vinnumber;
   }

   function setVinnumber($vinnumber) {
       $this->vinnumber = $vinnumber;
   }
   public function getBrandname() {
       return parent::getBrandname();
   }

   public function getPrice() {
       return parent::getPrice();
   }

   public function getProdname() {
       return parent::getProdname();
   }

   public function getProdtype() {
       return parent::getProdtype();
   }

   public function getYear() {
       return parent::getYear();
   }

   public function setBrandname($brandname) {
       parent::setBrandname($brandname);
   }

   public function setPrice($price) {
       parent::setPrice($price);
   }

   public function setProdname($prodname) {
       parent::setProdname($prodname);
   }

   public function setProdtype($prodtype) {
       parent::setProdtype($prodtype);
   }

   public function setYear($year) {
       parent::setYear($year);
   }

  public function __destruct() {
       $this->vinnumber = null;
       $this->color = null;
       $this->engine = null;
       $this->mileage = null;
  }
}
