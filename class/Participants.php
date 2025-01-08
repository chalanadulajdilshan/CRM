<?php

class Participants
{

    public $id;
    public $participant_name;
    public $nic_number;
    public $home_address;
    public $district;
    public $gender;
    public $date_of_birth;
    public $age;
    public $contact_home;
    public $contact_mobile;
    public $email;
    public $licensed_operator;
    public $level_of_entry;
    public $registration_fee_applicable;
    public $parent_guardian_full_name;
    public $parent_guardian_address;
    public $parent_guardian_contact_home;
    public $parent_guardian_contact_mobile;
    public $parent_guardian_email;
    public $parent_guardian_consent;
    public $assigned_award_leader;

    public function __construct($id)
    {
        if ($id) {
            $query = "SELECT * FROM participantregistration WHERE id=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->participant_name = $result['participant_name'];
            $this->nic_number = $result['nic_number'];
            $this->home_address = $result['home_address'];
            $this->district = $result['district'];
            $this->gender = $result['gender'];
            $this->date_of_birth = $result['date_of_birth'];
            $this->age = $result['age'];
            $this->contact_home = $result['contact_home'];
            $this->contact_mobile = $result['contact_mobile'];
            $this->email = $result['email'];
            $this->licensed_operator = $result['licensed_operator'];
            $this->level_of_entry = $result['level_of_entry'];
            $this->registration_fee_applicable = $result['registration_fee_applicable'];
            $this->parent_guardian_full_name = $result['parent_guardian_full_name'];
            $this->parent_guardian_address = $result['parent_guardian_address'];
            $this->parent_guardian_contact_home = $result['parent_guardian_contact_home'];
            $this->parent_guardian_contact_mobile = $result['parent_guardian_contact_mobile'];
            $this->parent_guardian_email = $result['parent_guardian_email'];
            $this->parent_guardian_consent = $result['parent_guardian_consent'];
            $this->assigned_award_leader = $result['assigned_award_leader'];
        }
    }

    public function create()
    {
        $query = "INSERT INTO participantregistration (participant_name, nic_number, home_address, district, gender, date_of_birth, age, contact_home, contact_mobile, email, licensed_operator, level_of_entry, registration_fee_applicable, parent_guardian_full_name, parent_guardian_address, parent_guardian_contact_home, parent_guardian_contact_mobile, parent_guardian_email, parent_guardian_consent, assigned_award_leader) VALUES  ('"
            . $this->participant_name . "', '"
            . $this->nic_number . "', '"
            . $this->home_address . "', '"
            . $this->district . "', '"
            . $this->gender . "', '"
            . $this->date_of_birth . "', '"
            . $this->age . "', '"
            . $this->contact_home . "', '"
            . $this->contact_mobile . "', '"
            . $this->email . "', '"
            . $this->licensed_operator . "', '"
            . $this->level_of_entry . "', '"
            . $this->registration_fee_applicable . "', '"
            . $this->parent_guardian_full_name . "', '"
            . $this->parent_guardian_address . "', '"
            . $this->parent_guardian_contact_home . "', '"
            . $this->parent_guardian_contact_mobile . "', '"
            . $this->parent_guardian_email . "', '"
            . $this->parent_guardian_consent . "', '"
            . $this->assigned_award_leader . "')";

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all()
    {
        $query = "SELECT * FROM participantregistration ORDER BY id ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update()
    {
        $query = "UPDATE participantregistration SET "
            . "participant_name ='" . $this->participant_name . "', "
            . "nic_number ='" . $this->nic_number . "', "
            . "home_address ='" . $this->home_address . "', "
            . "district ='" . $this->district . "', "
            . "gender ='" . $this->gender . "', "
            . "date_of_birth ='" . $this->date_of_birth . "', "
            . "age ='" . $this->age . "', "
            . "contact_home ='" . $this->contact_home . "', "
            . "contact_mobile ='" . $this->contact_mobile . "', "
            . "email ='" . $this->email . "', "
            . "licensed_operator ='" . $this->licensed_operator . "', "
            . "level_of_entry ='" . $this->level_of_entry . "', "
            . "registration_fee_applicable ='" . $this->registration_fee_applicable . "', "
            . "parent_guardian_full_name ='" . $this->parent_guardian_full_name . "', "
            . "parent_guardian_address ='" . $this->parent_guardian_address . "', "
            . "parent_guardian_contact_home ='" . $this->parent_guardian_contact_home . "', "
            . "parent_guardian_contact_mobile ='" . $this->parent_guardian_contact_mobile . "', "
            . "parent_guardian_email ='" . $this->parent_guardian_email . "', "
            . "parent_guardian_consent ='" . $this->parent_guardian_consent . "', "
            . "assigned_award_leader ='" . $this->assigned_award_leader . "' "
            . "WHERE id = '" . $this->id . "'";

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete()
    {
        $query = 'DELETE FROM participantregistration WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
?>