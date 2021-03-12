<?php

namespace Jrmadsen67\OneRosterApi;

interface OneRosterApi
{
    public function getAllAcademicSessions();
    public function getAcademicSession($session);
    public function getAllClasses();
    public function getClass($class);
    public function getAllCourses();
    public function getCourse($course);
    public function getAllEnrollments();
    public function getEnrollment($enrollment);
    public function getAllGradingPeriods();
    public function getGradingPeriod($gradingPeriod);
    public function getAllOrgs();
    public function getAllSchools();
    public function getSchool($school);
    public function getAllStudents();
    public function getStudent($student);
    public function getAllTeachers();
    public function getTeacher($teacher);
    public function getAllTerms();
    public function getTerm($term);
    public function getAllUsers();
    public function getUser($user);
}
