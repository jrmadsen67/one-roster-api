<?php

namespace Jrmadsen67\OneRosterApi;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class OneRosterApiClient implements OneRosterApi
{
    protected $client;

//    protected $token = '';  // @TODO: set up auth

    public function __construct()
    {
        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'signature_method' => Oauth1::SIGNATURE_METHOD_HMACSHA256,
            'consumer_key'    => config('consumer_key'),
            'consumer_secret' => config('consumer_secret'),
            'token'           => '',
            'token_secret'    => '',
        ]);
        $stack->push($middleware);

//        $this->client = new Client([
//            'base_uri' => 'https://or-ri.imsglobal.org/ims/oneroster/v1p1',
//            'headers' => [
////                'Authorization' => 'Bearer '.$this->token,
//                'Content-Type' => 'application/json; charset=utf-8',
//                'handler' => $stack,
//                'auth' => 'oauth'
//            ],
//        ]);

        $this->client = new Client([
            'base_uri' => 'https://or-ri.imsglobal.org/ims/oneroster/v1p1/',
            'handler' => $stack,
            'auth' => 'oauth'
        ]);
    }

    public function createParameterString($offset, $limit, $filter){
        return '?' . http_build_query(['offset' => $offset, 'limit' => $limit, 'filter' => $filter]);
    }

    public function getAllAcademicSessions($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/academicSessions' . $queryString);
    }

    public function getAcademicSession($session){
        // @TODO: error handle $response
        return $response = $this->client->get('/academicSessions/' . $session);
    }

    public function getAllClasses($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/classes' . $queryString);
    }

    public function getClass($class){
        // @TODO: error handle $response
        return $response = $this->client->get('/classes/' . $class);
    }

    public function getAllCourses($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/courses' . $queryString);
    }

    public function getCourse($course){
        // @TODO: error handle $response
        return $response = $this->client->get('/courses/' . $course);
    }

    public function getAllEnrollments($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/enrollments' . $queryString);
    }

    public function getEnrollment($enrollment){
        // @TODO: error handle $response
        return $response = $this->client->get('/enrollments/' . $enrollment);
    }

    public function getAllGradingPeriods($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/gradingPeriods' . $queryString);
    }

    public function getGradingPeriod($gradingPeriod){
        // @TODO: error handle $response
        return $response = $this->client->get('/gradingPeriods/' . $gradingPeriod);
    }

    public function getAllOrgs($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/orgs' . $queryString);
    }

    public function getAllSchools($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/schools' . $queryString);
    }

    public function getSchool($school){
        // @TODO: error handle $response
        return $response = $this->client->get('/schools/' . $school);
    }

    public function getAllStudents($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/students' . $queryString);
    }

    public function getStudent($student){
        // @TODO: error handle $response
        return $response = $this->client->get('/students/' . $student);
    }

    public function getAllTeachers($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/teachers' . $queryString);
    }

    public function getTeacher($teacher){
        // @TODO: error handle $response
        return $response = $this->client->get('/teachers/' . $teacher);
    }

    public function getAllTerms($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/terms' . $queryString);
    }

    public function getTerm($term){
        // @TODO: error handle $response
        return $response = $this->client->get('/terms/' . $term);
    }

    public function getAllUsers($offset=0, $limit=100, $filter = 'status="active"'){
        $queryString = $this->createParameterString($offset,$limit);
        // @TODO: error handle $response
        return $response = $this->client->get('/users' . $queryString);
    }

    public function getUser($user){
        // @TODO: error handle $response
        return $response = $this->client->get('/users/' . $user);
    }
}
