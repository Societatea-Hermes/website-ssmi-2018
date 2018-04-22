<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddTeamRequest;

use App\Models\Participant;
use App\Models\Team;

use DB;

class TeamController extends Controller
{
    public function saveTeam(AddTeamRequest $req, Team $team) {
    	DB::beginTransaction();
    	$team->name = $req->input('name');
    	$team->type = $req->input('type');
    	$team->save();

    	$participants = $req->input('participants', []);
    	if(count($participants) == 0) {
    		$toReturn = array(
    			'success'	=>	0,
    			'message'	=>	'Echipa trebuie sa contina cel putin un membru!'
    		);
    		DB::rollback();
    		return $this->returnJsonResponse($toReturn);
    	} elseif($team->type == 3 && count($participants) > 1) { // hs..
    		$toReturn = array(
    			'success'	=>	0,
    			'message'	=>	'Echipa poate contine doar un membru!'
    		);
    		DB::rollback();
    		return $this->returnJsonResponse($toReturn);
    	} elseif($team->type < 3 && (count($participants) > 6 || count($participants) < 5)) {
    		$toReturn = array(
    			'success'	=>	0,
    			'message'	=>	'Echipa poate contine intre 5 si 6 membrii!'
    		);
    		DB::rollback();
    		return $this->returnJsonResponse($toReturn);
    	}

    	foreach($participants as $participant) {
    		$tmpParticipant = new Participant();
    		$tmpParticipant->full_name = $participant['full_name'];
    		$tmpParticipant->phone = $participant['phone'];
    		$tmpParticipant->email = $participant['email'];
    		$tmpParticipant->team_id = $team->id;
    		$tmpParticipant->is_lead = $participant['is_lead'];
    		$tmpParticipant->save();
    	}

    	DB::commit();
    	$toReturn = array(
			'success'	=>	1
		);
		return $this->returnJsonResponse($toReturn);
    }

    public function getTeams(Request $req, Team $team) {
    	$search = array(
    		'sidx'	=>	$req->input('sidx'),
    		'sord'	=>	$req->input('sord'),
    		'limit'	=>	$req->input('limit', 10),
    		'page'	=>	$req->input('page', 1)
    	);

    	$teamCount = $team->getFiltered($search, true);
    	$teams = $team->getFiltered($search);

    	if($teamCount == 0) {
    		$numPages = 0;
    	} else {
    		if($teamCount % $search['limit'] > 0) {
    			$numPages = ($teamCount - ($teamCount % $search['limit'])) / $search['limit'] +1;
    		} else {
    			$numPages = $teamCount / $search['limit'];
    		}
    	}

    	$toReturn = array(
    		'rows'		=>	array(),
    		'records'	=>	$teamCount,
    		'page'		=>	$search['page'],
    		'total'		=>	$numPages
    	);

    	foreach($teams as $team) {
    		$toReturn['rows'][] = array(
    			'id'	=>	$team->id,
    			'cell'	=>	array(
    				'name'		=>	$team->name,
    				'type'		=>	$team->type,
    				'is_paid'	=>	(!empty($team->is_paid) ? true : false)
    			)
    		);
    	}

    	return $this->returnJsonResponse($toReturn);
    }

    public function getTeamMembers(Request $req, Participant $participant, $team_id) {
    	$search = array(
    		'team_id' 	=>	$team_id,
    		'sidx'		=>	$req->input('sidx'),
    		'sord'		=>	$req->input('sord'),
    		'limit'		=>	$req->input('limit', 10),
    		'page'		=>	$req->input('page', 1)
    	);

    	$participantCount = $participant->getFiltered($search, true);
    	$participants = $participant->getFiltered($search);

    	if($participantCount == 0) {
    		$numPages = 0;
    	} else {
    		if($participantCount % $search['limit'] > 0) {
    			$numPages = ($participantCount - ($participantCount % $search['limit'])) / $search['limit'] +1;
    		} else {
    			$numPages = $participantCount / $search['limit'];
    		}
    	}

    	$toReturn = array(
    		'rows'		=>	array(),
    		'records'	=>	$participantCount,
    		'page'		=>	$search['page'],
    		'total'		=>	$numPages
    	);

    	foreach($participants as $participant) {
    		$toReturn['rows'][] = array(
    			'id'	=>	$participant->id,
    			'cell'	=>	array(
    				'full_name'		=>	$participant->full_name,
    				'phone'			=>	$participant->phone,
    				'email'			=>	$participant->email,
    				'is_lead'		=>	(!empty($participant->is_lead) ? true : false)
    			)
    		);
    	}

    	return $this->returnJsonResponse($toReturn);
    }
}
