<?php

namespace Jrmadsen67\OneRosterApi;

//use App\Clients\Autopilot\Responses\ContactBulkSavedResponse;
//use App\Clients\Autopilot\Responses\ContactListResponse;
//use App\Clients\Autopilot\Responses\ContactResponse;
//use App\Clients\Autopilot\Responses\ContactSavedResponse;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class OneRosterApiClient implements OneRosterApi
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://or-ri.imsglobal.org/ims/oneroster/v1p1/',
            'headers' => [
                'onerosterapikey' => ''// @TODO  config('services.autopilot.secret'),
            ],
        ]);
    }


}
