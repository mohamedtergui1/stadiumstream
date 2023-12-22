<?php

namespace App\Controller;
use App\Model\TeamModel;
use App\Controller\Controller;

class TeamController extends Controller
{

    public function index()
    {

        $teams = new TeamModel();
        $result = $teams->allTeams();
        $this->render("user", "listeUser", "liste of teams", $result);

    }

    public function adduser()
    {

        $this->render("user", "create", "Add Users", array());

    }

    public function insertteam()
    {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $country  = $_POST['country'] ?? '';

            $team = new TeamModel();
            $res = $team->addTeam($name, $description,$country);


            if ($res) {

                header('Location:../');
                exit;
            } else {

                echo "Failed to add user.";
            }
        } else {

            echo "Invalid request method.";
        }
    }

}