<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Container\Container;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
	protected  $token;


	public function newToken(){
		$client = new Client;
        $res = $client->request('POST', 'https://api.intraffic.com.ve/oauth2/token', [
            'headers' => [
                'user-agent' => 'develop',
                'Content-Type' => 'application/x-www-form-urlencoded;charset=UTF-8',
                'Content-Length' => 29,
                'Authorization' => 'Basic aW50cmFmZmljLXdlYjpmMDczODkwOWI2OWE3ZDYwNjQ1MzNhYzM4NWMyYTNkNDQ1M2YwNGUy'
            ],
            'form_params' => [
                
                'grant_type' => 'client_credentials'
            ]
        ]);
        $res = json_decode($res->getBody(),true);
        $token = $res['access_token'];
        $this->token = $token;
	}
	public function searchToken(){
		if ($this->token == null) {
			newToken();
			searchToken();
		}
		else {
			return $this->token;
		}
	}
				
}