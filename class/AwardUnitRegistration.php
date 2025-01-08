<?php
class AwardUnitRegistration {

    public $id;
    public $award_unit_name;
    public $address;
    public $tel;
    public $award_leader_name;
    public $personal_address;
    public $official_address;
    public $email;
    public $assistant_award_leader_name;
    public $assistant_award_leader_address;
    public $gold_members;
    public $silver_members;
    public $bronze_members;
    public $starting_date;
    public $head_of_institution_name;
    public $head_of_institution_tel;
    public $district;
    public $province;

    public function __construct($id) {
        if ($id) {
            $query = "SELECT * FROM awardunitregistration WHERE id=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->award_unit_name = $result['award_unit_name'];
            $this->address = $result['address'];
            $this->tel = $result['tel'];
            $this->award_leader_name = $result['award_leader_name'];
            $this->personal_address = $result['personal_address'];
            $this->official_address = $result['official_address'];
            $this->email = $result['email'];
            $this->assistant_award_leader_name = $result['assistant_award_leader_name'];
            $this->assistant_award_leader_address = $result['assistant_award_leader_address'];
            $this->gold_members = $result['gold_members'];
            $this->silver_members = $result['silver_members'];
            $this->bronze_members = $result['bronze_members'];
            $this->starting_date = $result['starting_date'];
            $this->head_of_institution_name = $result['head_of_institution_name'];
            $this->head_of_institution_tel = $result['head_of_institution_tel'];
            $this->district = $result['district'];
            $this->province = $result['province'];
        }
    }

    public function create() {
        $query = "INSERT INTO awardunitregistration (award_unit_name, address, tel, award_leader_name, personal_address, official_address, email, assistant_award_leader_name, assistant_award_leader_address, gold_members, silver_members, bronze_members, starting_date, head_of_institution_name, head_of_institution_tel, district, province) VALUES  ('"
                . $this->award_unit_name . "', '"
                . $this->address . "', '"
                . $this->tel . "', '"
                . $this->award_leader_name . "', '"
                . $this->personal_address . "', '"
                . $this->official_address . "', '"
                . $this->email . "', '"
                . $this->assistant_award_leader_name . "', '"
                . $this->assistant_award_leader_address . "', '"
                . $this->gold_members . "', '"
                . $this->silver_members . "', '"
                . $this->bronze_members . "', '"
                . $this->starting_date . "', '"
                . $this->head_of_institution_name . "', '"
                . $this->head_of_institution_tel . "', '"
                . $this->district . "', '"
                . $this->province . "')";
        
        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {
        $query = "SELECT * FROM awardunitregistration ORDER BY id ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {
        $query = "UPDATE awardunitregistration SET "
                . "award_unit_name ='" . $this->award_unit_name . "', "
                . "address ='" . $this->address . "', "
                . "tel ='" . $this->tel . "', "
                . "award_leader_name ='" . $this->award_leader_name . "', "
                . "personal_address ='" . $this->personal_address . "', "
                . "official_address ='" . $this->official_address . "', "
                . "email ='" . $this->email . "', "
                . "assistant_award_leader_name ='" . $this->assistant_award_leader_name . "', "
                . "assistant_award_leader_address ='" . $this->assistant_award_leader_address . "', "
                . "gold_members ='" . $this->gold_members . "', "
                . "silver_members ='" . $this->silver_members . "', "
                . "bronze_members ='" . $this->bronze_members . "', "
                . "starting_date ='" . $this->starting_date . "', "
                . "head_of_institution_name ='" . $this->head_of_institution_name . "', "
                . "head_of_institution_tel ='" . $this->head_of_institution_tel . "', "
                . "district ='" . $this->district . "', "
                . "province ='" . $this->province . "' "
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
        $query = 'DELETE FROM awardunitregistration WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}

