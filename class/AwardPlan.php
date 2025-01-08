<?php
class AwardPlan {

    public $id;
    public $participant_name;
    public $award_level;
    public $voluntary_service_goal;
    public $voluntary_service_assessor;
    public $physical_recreation_goal;
    public $physical_recreation_assessor;
    public $skill_goal;
    public $skill_assessor;
    public $adventurous_journey_optional;
    public $registration_id;
    public $next_level_starting_date;
    public $new_voluntary_service_goal;
    public $new_physical_recreation_goal;
    public $new_skill_goal;
    public $new_voluntary_service_assessor;
    public $new_physical_recreation_assessor;
    public $new_skill_assessor;

    public function __construct($id) {
        if ($id) {
            $query = "SELECT * FROM awardplan WHERE id=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->participant_name = $result['participant_name'];
            $this->award_level = $result['award_level'];
            $this->voluntary_service_goal = $result['voluntary_service_goal'];
            $this->voluntary_service_assessor = $result['voluntary_service_assessor'];
            $this->physical_recreation_goal = $result['physical_recreation_goal'];
            $this->physical_recreation_assessor = $result['physical_recreation_assessor'];
            $this->skill_goal = $result['skill_goal'];
            $this->skill_assessor = $result['skill_assessor'];
            $this->adventurous_journey_optional = $result['adventurous_journey_optional'];
            $this->registration_id = $result['registration_id'];
            $this->next_level_starting_date = $result['next_level_starting_date'];
            $this->new_voluntary_service_goal = $result['new_voluntary_service_goal'];
            $this->new_physical_recreation_goal = $result['new_physical_recreation_goal'];
            $this->new_skill_goal = $result['new_skill_goal'];
            $this->new_voluntary_service_assessor = $result['new_voluntary_service_assessor'];
            $this->new_physical_recreation_assessor = $result['new_physical_recreation_assessor'];
            $this->new_skill_assessor = $result['new_skill_assessor'];
        }
    }

    public function create() {
        $query = "INSERT INTO awardplan (participant_name, award_level, voluntary_service_goal, voluntary_service_assessor, physical_recreation_goal, physical_recreation_assessor, skill_goal, skill_assessor, adventurous_journey_optional, registration_id, next_level_starting_date, new_voluntary_service_goal, new_physical_recreation_goal, new_skill_goal, new_voluntary_service_assessor, new_physical_recreation_assessor, new_skill_assessor) VALUES  ('"
                . $this->participant_name . "', '"
                . $this->award_level . "', '"
                . $this->voluntary_service_goal . "', '"
                . $this->voluntary_service_assessor . "', '"
                . $this->physical_recreation_goal . "', '"
                . $this->physical_recreation_assessor . "', '"
                . $this->skill_goal . "', '"
                . $this->skill_assessor . "', '"
                . $this->adventurous_journey_optional . "', '"
                . $this->registration_id . "', '"
                . $this->next_level_starting_date . "', '"
                . $this->new_voluntary_service_goal . "', '"
                . $this->new_physical_recreation_goal . "', '"
                . $this->new_skill_goal . "', '"
                . $this->new_voluntary_service_assessor . "', '"
                . $this->new_physical_recreation_assessor . "', '"
                . $this->new_skill_assessor . "')";
        
        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all() {
        $query = "SELECT * FROM awardplan ORDER BY id ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {
        $query = "UPDATE awardplan SET "
                . "participant_name ='" . $this->participant_name . "', "
                . "award_level ='" . $this->award_level . "', "
                . "voluntary_service_goal ='" . $this->voluntary_service_goal . "', "
                . "voluntary_service_assessor ='" . $this->voluntary_service_assessor . "', "
                . "physical_recreation_goal ='" . $this->physical_recreation_goal . "', "
                . "physical_recreation_assessor ='" . $this->physical_recreation_assessor . "', "
                . "skill_goal ='" . $this->skill_goal . "', "
                . "skill_assessor ='" . $this->skill_assessor . "', "
                . "adventurous_journey_optional ='" . $this->adventurous_journey_optional . "', "
                . "registration_id ='" . $this->registration_id . "', "
                . "next_level_starting_date ='" . $this->next_level_starting_date . "', "
                . "new_voluntary_service_goal ='" . $this->new_voluntary_service_goal . "', "
                . "new_physical_recreation_goal ='" . $this->new_physical_recreation_goal . "', "
                . "new_skill_goal ='" . $this->new_skill_goal . "', "
                . "new_voluntary_service_assessor ='" . $this->new_voluntary_service_assessor . "', "
                . "new_physical_recreation_assessor ='" . $this->new_physical_recreation_assessor . "', "
                . "new_skill_assessor ='" . $this->new_skill_assessor . "' "
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
        $query = 'DELETE FROM awardplan WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}

