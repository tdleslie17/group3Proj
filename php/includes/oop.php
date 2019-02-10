<?php
/***************************************
* Authors: Ibraheem Kolawole
* Date: February 11, 2019
* Purpose: Object Oriented Programming (OOP), Inheritance demonstration
* Requires: internal php methods. __contruct() & __toString()
****************************************/

class Person {
    public $id;
    public $firstName;
    public $lastName;
    public $busPhone;
    public $email;


    public function __construct($id, $fname, $lname, $phone, $email){
        $this->id = $id;
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->busPhone = $phone;
        $this->email = $email;
    }

    public function __toString() {
        return $this->firstName . " " . $this->lastName;
    }
}

class Customer extends Person {
    public $address;
    public $city;
    public $prov;
    public $postal;
    public $country;
    public $homePhone;
    public $agentId;

    public function __construct($id, $fname, $lname, $add, $city, $prov, $post, $country, $hphone, $phone, $email, $agtId) 
    {

        parent::__construct($id, $fname, $lname, $phone, $email);

        $this->address = $add;
        $this->city = $city;
        $this->prov = $prov;
        $this->postal = $post;
        $this->country = $country;
        $this->homePhone = $hphone;
        $this->agentId = $agtId;
    }  
}

// Agent Class for last Assignment
class Agent {
    // protected $id;
    protected $agtFirstName;
    protected $agtMiddleInitial;
    protected $agtLastName;
    protected $agtBusPhone;
    protected $agtEmail;
    protected $agtPosition;
    protected $agencyId;

    public function __construct($fname, $mini, $lname, $bphone, $email, $position, $aId) {
        // $this->id = $id;
        $this->agtFirstName = $fname;
        $this->agtMiddleInitial = $mini;
        $this->agtLastName = $lname;
        $this->agtBusPhone = $bphone;
        $this->agtEmail = $email;
        $this->agtPosition = $position;
        $this->agencyId = $aId;
    }

    // Getters
    // public function getAgtId() {
    //     return $this->id;
    // }

    public function getAgtFirstName() {
        return $this->agtFirstName;        
    }

    public function getAgtMiddleIni() {
        return $this->agtMiddleInitial;
    }

    public function getAgtLastName() {
        return $this->agtLastName;
    }

    public function getAgtBusPhone() {
        return $this->agtBusPhone;
    }

    public function getAgtEmail() {
        return $this->agtEmail;
    }

    public function getAgtPosition() {
        return $this->agtPosition;
    }

    public function getAgencyId() {
        return $this->agencyId;
    }

    // Setters

    // Not setting the Id because it is autogenerated 
    // by the server DB

    public function setAgtFirstName($fname) {
        $this->agtFirstName = $fname;        
    }

    public function setAgtMiddleIni($mini) {
        $this->agtMiddleInitial = $mini;
    }

    public function setAgtLastName($lname) {
        $this->agtLastName = $lname;
    }

    public function setAgtBusPhone($bphone) {
        $this->agtBusPhone = $bphone;
    }

    public function setAgtEmail($email) {
        $this->agtEmail = $email;
    }

    public function setAgtPosition($position) {
        $this->agtPosition = $position;
    }

    public function setAgencyId($aId) {
        $this->agencyId = $aId;
    }

    // CSV values from proerties

    public function __toString() {
        $csv = $this->getAgtFirstName() . ", " . $this->getAgtMiddleIni() . ", " . $this->getAgtLastName() . ", " . $this->getAgtBusPhone() . ", " . $this->getAgtEmail() . ", " . $this->getAgtPosition() . ", " . $this->getAgencyId(); 
        return $csv;
    }

}

?>


