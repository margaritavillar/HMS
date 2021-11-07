<?php
class Booking {

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

  private $userId;
  public function getUserId () { return $this->userId; }
  private function setUserId ($date) { $this->userId = $userId; }

  private $date;
  public function getDate () { return $this->date; }
  private function setDate ($date) { $this->date = $date; }

  private $time;
  public function getTime () { return $this->time; }
  private function setTime ($time) { $this->time = $time; }

  private $price; 
  public function getPrice () { return $this->price; }
  public function setPrice ($price) { $this->price = $price; }

  /* No-mapped */

  private $cartUniqueId;
  public function getCartUniqueId () { return $this->cartUniqueId; }
  public function setCartUniqueId ($cartUniqueId) { $this->cartUniqueId = $cartUniqueId; }

  public function __construct(
    $code = '',
    $speciality = '',
    $doctor = '',
    $price = 0.0,
    $userId = '',
    $date = '',
    $time = '',
    $id = null
  ) {
    $this->code = $code;
    $this->speciality = $speciality;
    $this->doctor = $doctor;
    $this->price = $price;
    $this->userId = $userId;
    $this->date = $date;
    $this->time = $time;
    $this->id = $id;
    
    $this->cartUniqueId = uniqid('CART_');
  }


  /*public function ViewSpecialties()
  {
    //to populate dropdownlist with specialties
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('SELECT SPECIALTY FROM specialty');
    
    while ($row = $statement->fetch_assoc()){
      echo "<option value=\"specialty1\">" . $row['SPECIALTY'] . "</option>";
    $statement->execute();
    }

  }*/


  public function Create1 () {

      $db = (new DataBase())->CreateConnection();
      $statement = $db->prepare('INSERT INTO `SERVICES1`(`CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`, `USERID`, `DATE`, `TIME` ) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $statement->bind_param(
        'ssssiss',
        $this->code,
        $this->speciality,
        $this->doctor,
        $this->price,
        $this->userId,
        $this->date,
        $this->time
      );
      $statement->execute();
  }


public static function GetAllAppointments () {
    $models = [];
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('SELECT `CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`, USERID , `DATE`, `TIME` FROM `SERVICES1`');
    $statement->bind_result($CODE, $SPECIALITY, $DOCTOR, $PRICE, $USERID, $DATE, $TIME);
    if ($statement->execute()) {
      while ($row = $statement->fetch()) {
        $model = new Booking($CODE, $SPECIALITY, $DOCTOR, $PRICE, $USERID, $DATE, $TIME);
        array_push($models, $model);
      }
    }
    return $models;
  }


public static function GetAppointmentByDoctor ($doctor) {
    $models = [];
    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('SELECT `CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`, `USERID`, `DATE`, `TIME`,`ID` FROM `SERVICES1` WHERE `DOCTOR` = ?');
    $statement->bind_param('i', $doctor);
    $statement->bind_result($CODE, $SPECIALITY, $DOCTOR, $PRICE, $USERID, $DATE, $TIME, $ID);
    if ($statement->execute()) {
      while ($row = $statement->fetch()) {
        $model = new Booking($CODE, $SPECIALITY, $DOCTOR, $PRICE, $USERID, $DATE, $TIME, $ID);
        array_push($models, $model);
      }
    }
    return $models;
  }

  public static function GetAppointmentByUser ($userId) {
    $models = [];

    $db = (new DataBase())->CreateConnection();
    $statement = $db->prepare('SELECT `CODE`, `SPECIALITY`, `DOCTOR`, `PRICE`, `USERID`, `DATE`, `TIME`,`ID` FROM `SERVICES1` WHERE `USERID` = ?');
    $statement->bind_param('i', $userId);
    $statement->bind_result($CODE, $SPECIALITY, $DOCTOR, $PRICE, $USERID, $DATE, $TIME, $ID);
    if ($statement->execute()) {
      while ($row = $statement->fetch()) {
        $model = new Booking($CODE, $SPECIALITY, $DOCTOR, $PRICE, $USERID, $DATE, $TIME, $ID);
        array_push($models, $model);
      }
    }

    return $models;
  }
  

}
?>