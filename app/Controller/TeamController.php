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

        $this->render("team", "listeTeam", "liste of teams", $result);

    }

    public function addteam()
    {                           

        $this->render("team", "create", "Add Users", array());

    }

    public function insertteam()
    {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            $name = $_POST['name'] ?? '';

            $description = $_POST['description'] ?? '';

            $country = $_POST['country'] ?? '';

            $team = new TeamModel();

            $res = $team->addTeam($name, $description, $country);


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
    public function destroy($id){
        $team =  new TeamModel();
        $res =  $team->deleteTeam($id);
        if($res){
              header("Location:../../");
        }else echo 'something is wrong';
    }

}