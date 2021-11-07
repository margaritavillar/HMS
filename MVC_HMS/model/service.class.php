<?php
class Service {

  /* Mapped */
  
  private $id;
  public function getId () { return $this->id; }
  private function setId ($id) { $this->id = $id; }

  private $code; 
  public function getCode () { return $this->code; }
  public function setCode ($code) { $this->code = $code; }

  private $speciality; 
  public function getSpeciality () { return $this->speciality; }
  public function setSpeciality ($speciality) { $this->speciality = $specility; }

  private $doctor; 
  public function getDoctor () { return $this->doctor; }
  public function setDoctor ($doctor) { $this->doctor = $doctor; }

  private $price; 
  public function getPrice () { return $this->price; }
  public function setPrice ($price) { $this->price = $price; }

  // private $quantity; 
  // public function getQuantity () { return $this->quantity; }
  // public function setQuantity ($quantity) { $this->quantity = $quantity; }

  /* No-mapped */

  private $cartUniqueId;
  public function getCartUniqueId () { return $this->cartUniqueId; }
  public function setCartUniqueId ($cartUniqueId) { $this->cartUniqueId = $cartUniqueId; }

  public function __construct(
    $code = '',
    $speciality = '',
    $doctor = '',
    $price = 0.0,
   // $quantity = 0,
    $id = null
  ) {
    $this->code = $code;
    $this->speciality = $speciality;
    $this->doctor = $doctor;
    $this->price = $price;
    //$this->quantity = $quantity;
    $this->id = $id; 
    
    $this->cartUniqueId = uniqid('CART_');
  }

  public static function GetServiceById ($id) {
    $model = null;
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('SELECT `CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`,`ID` FROM `SERVICES` WHERE `ID` = ?');
    $statement->bind_param('i', $id);
    $statement->bind_result($CODE, $SPECIALITY, $DOCTOR, $PRICE, $ID);
    if ($statement->execute()) {
      while ($row = $statement->fetch()) {
        $model = new Service($CODE, $SPECIALITY, $DOCTOR, $PRICE, $ID);
      }
    }
    return $model;
  }

  public static function GetAllServices () {
    $models = [];
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('SELECT `CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`, `ID` FROM `SERVICES`');
    $statement->bind_result($CODE, $SPECIALITY, $DOCTOR, $PRICE, $ID);
    if ($statement->execute()) {
      while ($row = $statement->fetch()) {
        $model = new Service($CODE, $SPECIALITY, $DOCTOR, $PRICE, $ID);
        array_push($models, $model);
      }
    }
    return $models;
  }

  public function Create () {
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('INSERT INTO `SERVICES`(`CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`) VALUES (?, ?, ?, ?)');
    $statement->bind_param(
      'sssd',
      $this->code,
      $this->speciality,
      $this->doctor,
      $this->price
      //$this->quantity
    );
    $statement->execute();
  }

  public function Edit () {
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare(
      'UPDATE `services` SET 
        `CODE` = ?,
        `SPECIALITY` = ?,
        `DOCTOR` = ?,
        `PRICE` = ?
      WHERE `ID` = ?'
    );
    $statement->bind_param(
      'sssdi',
      $this->code,
      $this->speciality,
      $this->doctor,
      $this->price,
      $this->id
    );
    $statement->execute();
    
  }

  public function Delete () {
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('DELETE FROM `services` WHERE `ID` = ?');
    $statement->bind_param('i', $this->id);
    $statement->execute();
  }

   public static function GetAllSpecialties () {
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('SELECT `ID`, `SPECIALTY` FROM `specialty`');
    if ($statement->execute()) {
      $statement->bind_result($ID, $SPECIALTY);
      while ($statement->fetch()) {
        echo "<option value=$SPECIALTY> $ID. $SPECIALTY</option>"; 
        }
      }
    }


    public static function GetDrNames () {
      $db = (new DataBase())->CreateConnection();
      $statement = $db->prepare('SELECT `NAME`, `LASTNAME` FROM `users` WHERE `ROLE` = `DOCTOR`');
      if ($statement->execute()) {
        $statement->bind_result($NAME, $LASTNAME);
        while ($statement->fetch()) {
          echo "<option value=$LASTNAME> $LASTNAME</option>"; 
        }
      }
    }


}
?>