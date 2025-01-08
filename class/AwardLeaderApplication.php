<?php
class AwardLeaderApplication {

    public $id;
    public $full_name;
    public $contact_tel;
    public $contact_email;
    public $date_of_birth;
    public $nic;
    public $qualifications;
    public $present_role;
    public $youth_activities_involvement;

    public function __construct($id) {
        if ($id) {
            $query = "SELECT * FROM awardleaderapplication WHERE id=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->full_name = $result['full_name'];
            $this->contact_tel = $result['contact_tel'];
            $this->contact_email = $result['contact_email'];
            $this->date_of_birth = $result['date_of_birth'];
            $this->nic = $result['nic'];
            $this->qualifications = $result['qualifications'];
            $this->present_role = $result['present_role'];
            $this->youth_activities_involvement = $result['youth_activities_involvement'];
        }
    }

    public function create() {
        $query = "INSERT INTO awardleaderapplication (full_name, contact_tel, contact_email, date_of_birth, nic, qualifications, present_role, youth_activities_involvement) VALUES  ('"
                . $this->full_name . "', '"
                . $this->contact_tel . "', '"
                . $this->contact_email . "', '"
                . $this->date_of_birth . "', '"
                . $this->nic . "', '"
                . $this->qualifications . "', '"
                . $this->present_role . "', '"
                . $this->youth_activities_involvement . "')";
        
        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {
        $query = "SELECT * FROM awardleaderapplication ORDER BY id ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {
        $query = "UPDATE awardleaderapplication SET "
                . "full_name ='" . $this->full_name . "', "
                . "contact_tel ='" . $this->contact_tel . "', "
                . "contact_email ='" . $this->contact_email . "', "
                . "date_of_birth ='" . $this->date_of_birth . "', "
                . "nic ='" . $this->nic . "', "
                . "qualifications ='" . $this->qualifications . "', "
                . "present_role ='" . $this->present_role . "', "
                . "youth_activities_involvement ='" . $this->youth_activities_involvement . "' "
                . "WHERE id = '" . $this->id . "'";

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {
        $query = 'DELETE FROM awardleaderapplication WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
