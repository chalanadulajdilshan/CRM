<?php

class AssessorRegistration
{

    public $id;
    public $full_name;
    public $personal_address;
    public $tel;
    public $nic_number;
    public $official_address;
    public $date_of_birth;
    public $sex;
    public $designation_of_present_employment;
    public $educational_qualifications;
    public $professional_qualifications;
    public $award_units_supported;
    public $categories_assess;

    public function __construct($id)
    {
        if ($id) {
            $query = "SELECT * FROM assessorregistration WHERE id=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->full_name = $result['full_name'];
            $this->personal_address = $result['personal_address'];
            $this->tel = $result['tel'];
            $this->nic_number = $result['nic_number'];
            $this->official_address = $result['official_address'];
            $this->date_of_birth = $result['date_of_birth'];
            $this->sex = $result['sex'];
            $this->designation_of_present_employment = $result['designation_of_present_employment'];
            $this->educational_qualifications = $result['educational_qualifications'];
            $this->professional_qualifications = $result['professional_qualifications'];
            $this->award_units_supported = $result['award_units_supported'];
            $this->categories_assess = $result['categories_assess'];
        }
    }

    public function create()
    {
        $query = "INSERT INTO assessorregistration (full_name, personal_address, tel, nic_number, official_address, date_of_birth, sex, designation_of_present_employment, educational_qualifications, professional_qualifications, award_units_supported, categories_assess) VALUES  ('"
            . $this->full_name . "', '"
            . $this->personal_address . "', '"
            . $this->tel . "', '"
            . $this->nic_number . "', '"
            . $this->official_address . "', '"
            . $this->date_of_birth . "', '"
            . $this->sex . "', '"
            . $this->designation_of_present_employment . "', '"
            . $this->educational_qualifications . "', '"
            . $this->professional_qualifications . "', '"
            . $this->award_units_supported . "', '"
            . $this->categories_assess . "')";

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
        $query = "SELECT * FROM assessorregistration ORDER BY id ASC";
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
        $query = "UPDATE assessorregistration SET "
            . "full_name ='" . $this->full_name . "', "
            . "personal_address ='" . $this->personal_address . "', "
            . "tel ='" . $this->tel . "', "
            . "nic_number ='" . $this->nic_number . "', "
            . "official_address ='" . $this->official_address . "', "
            . "date_of_birth ='" . $this->date_of_birth . "', "
            . "sex ='" . $this->sex . "', "
            . "designation_of_present_employment ='" . $this->designation_of_present_employment . "', "
            . "educational_qualifications ='" . $this->educational_qualifications . "', "
            . "professional_qualifications ='" . $this->professional_qualifications . "', "
            . "award_units_supported ='" . $this->award_units_supported . "', "
            . "categories_assess ='" . $this->categories_assess . "' "
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
        $query = 'DELETE FROM assessorregistration WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}

?>