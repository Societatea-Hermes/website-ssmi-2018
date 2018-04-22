<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
	public function getFiltered($search = array(), $onlyTotal = false) {
    	$obj = $this;

    	// Filters here..
    	if(isset($search['team_id']) && !empty($search['team_id'])) {
    		$obj = $obj->where('team_id', $search['team_id']);
    	}

    	// End filters..

    	if($onlyTotal) {
    		return $obj->count();
    	}

    	$sOrder = (isset($search['sord']) && ($search['sord'] == 'asc' || $search['sord'] == 'desc')) ? $search['sord'] : 'asc';

    	if(isset($search['sidx'])) {
    		switch ($search['sidx']) {
    			case 'name':
    			case 'type':
    			case 'created_at':
    				$obj = $obj->orderBy($search['sidx'], $search['sord']);
    				break;
    			
    			default:
    				$obj = $obj->orderBy('name', $search['sord']);
    				break;
    		}
    	}

    	if(!isset($search['no_limit']) || !$search['no_limit']) {
    		$limit = !isset($search['limit']) || empty($search['limit']) ? 10 : $search['limit'];
    		$page = !isset($search['page']) || empty($search['page']) ? 1 : $search['page'];
    		$from = ($page - 1)*$limit;
    		$obj = $obj->take($limit)->skip($from);
    	}

    	return $obj->get();
    }
}
