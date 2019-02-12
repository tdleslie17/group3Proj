<?php
/***************************************
* Authors: Ibraheem Kolawole,
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

class Package {
    protected $PackageId;
    protected $PkgName;
    protected $PkgStartDate;
    protected $PkgEndDate;
    protected $PkgDesc;
    protected $PkgBasePrice;
    protected $PkgAgencyCommission;

//        public function __construct($id, $fname, $lname, $phone, $email) {
    public function __construct($id, $pname, $pstart, $pend, $pdesc, $pbaseprice, $pcommiss) {
            //Over-riding default constructor
        $this->PackageId            = $id;
        $this->PkgName              = $pname;
        $this->PkgStartDate         = $pstart;
        $this->PkgEndDate           = $pend;
        $this->PkgDesc              = $pdesc;          
        $this->PkgBasePrice         = $pbaseprice;          
        $this->PkgAgencyCommission  = $pcommiss;          
    }
    public function __toString() {
        return $this->PackageId . ", " . $this->PkgName . ", " . $this->PkgStartDate . ", " . $this->PkgEndDate . ", "
        . $this->PkgDesc . ", " . $this->PkgBasePrice . ", " . $this->PkgAgencyCommission;
    }
    public function getPackageId() {
        return $this->PackageId;
    }    
    public function setAgentId ($id) {
        $this->PackageId = $id;
    }
    public function getPackageName() {
        return $this->PkgName;
    }    
    public function setPackageName ($pname) {
        $this->PkgName = $pname;
    }
    public function getPkgStartDate() {
        return $this->PkgStartDate;
    }    
    public function setPkgStartDate ($pstart) {
        $this->PkgStartDate= $pstart;
    }
    public function getPkgEndDate() {
        return $this->PkgEndDate;
    }    
    public function setPkgEndDate ($pend) {
        $this->PkgEndDate= $pend;
    }
    public function getPkgDesc() {
        return $this->PkgDesc;
    }    
    public function setPkgDesc ($pdesc) {
        $this->Email= $pdesc;
    }
    public function getPkgBasePrice() {
        return $this->PkgBasePrice;
    }    
    public function setPkgBasePrice ($pbaseprice) {
        $this->Email= $pbaseprice;
    }
    public function getPkgAgencyCommission() {
        return $this->PkgAgencyCommission;
    }    
    public function setPkgAgencyCommission ($pcommiss) {
        $this->PkgAgencyCommission= $pcommiss;
    }
}


?>
