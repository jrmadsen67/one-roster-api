<?php

namespace Jrmadsen67\OneRosterApi;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class OneRosterApiClient implements OneRosterApi
{
    protected $client;

    protected $token = '';  // @TODO: set up auth

    public function __construct()
    {

        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'consumer_key'    => 'my_key',
            'consumer_secret' => 'my_secret',
        ]);
        $stack->push($middleware);

        $this->client = new Client([
            'base_uri' => 'https://or-ri.imsglobal.org/ims/oneroster/v1p1',
            'headers' => [
//                'Authorization' => 'Bearer '.$this->token,
                'Content-Type' => 'application/json; charset=utf-8',
                'handler' => $stack,
                'auth' => 'oauth'
            ],
        ]);
    }

    public function createParameterString($offset, $limit){
        return '?' . http_build_query(['offset' => $offset, 'limit' => $limit]);
    }

    public function getAllAcademicSessions($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/academicSessions' . $queryString);
    }

    public function getAcademicSession($session){
        $response = $this->client->get('/academicSessions/' . $session);
    }

    public function getAllClasses($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/classes' . $queryString);
    }

    public function getClass($class){
        $response = $this->client->get('/classes/' . $class);
    }

    public function getAllCourses($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/courses' . $queryString);
    }

    public function getCourse($course){
        $response = $this->client->get('/courses/' . $course);
    }

    public function getAllEnrollments($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/enrollments' . $queryString);
    }

    public function getEnrollment($enrollment){
        $response = $this->client->get('/enrollments/' . $enrollment);
    }

    public function getAllGradingPeriods($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/gradingPeriods' . $queryString);
    }

    public function getGradingPeriod($gradingPeriod){
        $response = $this->client->get('/gradingPeriods/' . $gradingPeriod);
    }

    public function getAllOrgs($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/orgs' . $queryString);
    }

    public function getAllSchools($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/schools' . $queryString);
    }

    public function getSchool($school){
        $response = $this->client->get('/schools/' . $school);
    }

    public function getAllStudents($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/students' . $queryString);
    }

    public function getStudent($student){
        $response = $this->client->get('/students/' . $student);
    }

    public function getAllTeachers($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/teachers' . $queryString);
    }

    public function getTeacher($teacher){
        $response = $this->client->get('/teachers/' . $teacher);
    }

    public function getAllTerms($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/terms' . $queryString);
    }

    public function getTerm($term){
        $response = $this->client->get('/terms/' . $term);
    }

    public function getAllUsers($offset=0, $limit=100){
        $queryString = $this->createParameterString($offset,$limit);
        $response = $this->client->get('/users' . $queryString);
    }

    public function getUser($user){
        $response = $this->client->get('/users/' . $user);
    }
}
