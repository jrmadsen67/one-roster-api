<?php

namespace Jrmadsen67\OneRosterApi;

//use App\Clients\Autopilot\Responses\ContactBulkSavedResponse;
//use App\Clients\Autopilot\Responses\ContactListResponse;
//use App\Clients\Autopilot\Responses\ContactResponse;
//use App\Clients\Autopilot\Responses\ContactSavedResponse;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class OneRosterApiMock implements OneRosterApi
{

    public function getAllAcademicSessions(){
         return json_encode([
             "academicSessions" => [
                 [
                     "children" => [
                     ],
                     "dateLastModified" => "2020-02-25T13:50:57Z",
                     "endDate" => "2020-02-25",
                     "metadata" => [
                         "number_of_counselors" => 4
                     ],
                     "parent" => [
                         "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                         "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                         "type" => "term"
                     ],
                     "schoolYear" => 2019,
                     "sourcedId" => "d99cf4c6-57d5-11ea-87aa-3a6d5a0778e8",
                     "startDate" => "2020-02-25",
                     "status" => "active",
                     "title" => "Spring semester",
                     "type" => "semester"
                 ],
                 [
                     "children" => [
                     ],
                     "dateLastModified" => "2020-02-25T13:50:57Z",
                     "endDate" => "2020-02-25",
                     "metadata" => [
                         "number_of_counselors" => 4
                     ],
                     "parent" => [
                         "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                         "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                         "type" => "term"
                     ],
                     "schoolYear" => 2019,
                     "sourcedId" => "d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                     "startDate" => "2020-02-25",
                     "status" => "active",
                     "title" => "Spring grading period",
                     "type" => "gradingPeriod"
                 ],
                 [
                     "children" => [
                         [
                             "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                             "sourcedId" => "d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                             "type" => "gradingPeriod"
                         ],
                         [
                             "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99cf4c6-57d5-11ea-87aa-3a6d5a0778e8",
                             "sourcedId" => "d99cf4c6-57d5-11ea-87aa-3a6d5a0778e8",
                             "type" => "semester"
                         ]
                     ],
                     "dateLastModified" => "2020-02-25T13:50:57Z",
                     "endDate" => "2020-02-25",
                     "metadata" => [
                         "number_of_counselors" => 4
                     ],
                     "parent" => [
                         "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                         "sourcedId" => "d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                         "type" => "schoolYear"
                     ],
                     "schoolYear" => 2019,
                     "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                     "startDate" => "2020-02-25",
                     "status" => "active",
                     "title" => "Spring Term",
                     "type" => "term"
                 ],
                 [
                     "children" => [
                         [
                             "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                             "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                             "type" => "term"
                         ]
                     ],
                     "dateLastModified" => "2020-02-25T13:50:57Z",
                     "endDate" => "2020-02-25",
                     "metadata" => [
                         "number_of_counselors" => 4
                     ],
                     "parent" => [
                     ],
                     "schoolYear" => 2019,
                     "sourcedId" => "d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                     "startDate" => "2020-02-25",
                     "status" => "active",
                     "title" => "School Year 2019",
                     "type" => "schoolYear"
                 ]
             ]
         ]);
    }

    public function getAcademicSession($session){
        return json_encode([
            "academicSession" => [
                "children" => [
                ],
                "dateLastModified" => "2020-02-25T13:50:57Z",
                "endDate" => "2020-02-25",
                "metadata" => [
                    "number_of_counselors" => 4
                ],
                "parent" => [
                    "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                    "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                    "type" => "term"
                ],
                "schoolYear" => 2019,
                "sourcedId" => $session,
                "startDate" => "2020-02-25",
                "status" => "active",
                "title" => "Spring semester",
                "type" => "semester"
            ]
        ]);
    }

    public function getAllClasses(){
        return json_encode( [
            "classes" => [
                [
                    "classCode" => "English101",
                    "classType" => "homeroom",
                    "course" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/courses/d99d95de-57d5-11ea-ab44-3a6d5a0778e8",
                        "sourcedId" => "d99d95de-57d5-11ea-ab44-3a6d5a0778e8",
                        "type" => "course"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "grades" => [
                        "PR",
                        "09",
                        "10"
                    ],
                    "location" => "room 19",
                    "metadata" => [
                        "teaching_assistant" => true
                    ],
                    "periods" => [
                        "1",
                        "3",
                        "5"
                    ],
                    "resources" => [
                        [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/resources/d9a00152-57d5-11ea-b350-3a6d5a0778e8",
                            "sourcedId" => "d9a00152-57d5-11ea-b350-3a6d5a0778e8",
                            "type" => "resource"
                        ]
                    ],
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "school"
                    ],
                    "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                    "status" => "active",
                    "subjectCodes" => [
                        "CHE-A",
                        "C-1"
                    ],
                    "subjects" => [
                        "English",
                        "basicEnglish"
                    ],
                    "terms" => [
                        [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                            "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                            "type" => "term"
                        ]
                    ],
                    "title" => "English"
                ],
                [
                    "classCode" => "Chemistry101",
                    "classType" => "homeroom",
                    "course" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/courses/d99d2586-57d5-11ea-8a63-3a6d5a0778e8",
                        "sourcedId" => "d99d2586-57d5-11ea-8a63-3a6d5a0778e8",
                        "type" => "course"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "grades" => [
                        "PR",
                        "09",
                        "10"
                    ],
                    "location" => "room 19",
                    "metadata" => [
                        "teaching_assistant" => true
                    ],
                    "periods" => [
                        "1",
                        "3",
                        "5"
                    ],
                    "resources" => [
                    ],
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "school"
                    ],
                    "sourcedId" => "d99dce28-57d5-11ea-b83f-3a6d5a0778e8",
                    "status" => "active",
                    "subjectCodes" => [
                        "CHE-A",
                        "C-1"
                    ],
                    "subjects" => [
                        "Chemistry",
                        "basicChemistry"
                    ],
                    "terms" => [
                        [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                            "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                            "type" => "term"
                        ]
                    ],
                    "title" => "Chemistry"
                ]
            ]
        ]);
    }

    public function getClass($class){
        return json_encode([
            "class" => [
                "classCode" => "English101",
                "classType" => "homeroom",
                "course" => [
                    "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/courses/d99d95de-57d5-11ea-ab44-3a6d5a0778e8",
                    "sourcedId" => $class,
                    "type" => "course"
                ],
                "dateLastModified" => "2020-02-25T13:50:57Z",
                "grades" => [
                    "PR",
                    "09",
                    "10"
                ],
                "location" => "room 19",
                "metadata" => [
                    "teaching_assistant" => true
                ],
                "periods" => [
                    "1",
                    "3",
                    "5"
                ],
                "resources" => [
                    [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/resources/d9a00152-57d5-11ea-b350-3a6d5a0778e8",
                        "sourcedId" => $class,
                        "type" => "resource"
                    ]
                ],
                "school" => [
                    "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                    "sourcedId" => $class,
                    "type" => "school"
                ],
                "sourcedId" => $class,
                "status" => "active",
                "subjectCodes" => [
                    "CHE-A",
                    "C-1"
                ],
                "subjects" => [
                    "English",
                    "basicEnglish"
                ],
                "terms" => [
                    [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                        "sourcedId" => $class,
                        "type" => "term"
                    ]
                ],
                "title" => "English"
            ]
        ]);
    }

    public function getAllCourses(){
        return json_encode( [
            "courses" => [
                [
                    "courseCode" => "CHEM101",
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "grades" => [
                        "PR",
                        "09",
                        "10"
                    ],
                    "metadata" => [
                        "duration" => "34 hours"
                    ],
                    "org" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "school"
                    ],
                    "resources" => [
                        [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/resources/d99f7890-57d5-11ea-b25f-3a6d5a0778e8",
                            "sourcedId" => "d99f7890-57d5-11ea-b25f-3a6d5a0778e8",
                            "type" => "resource"
                        ]
                    ],
                    "schoolYear" => [
                        [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                            "sourcedId" => "d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                            "type" => "schoolYear"
                        ]
                    ],
                    "sourcedId" => "d99d95de-57d5-11ea-ab44-3a6d5a0778e8",
                    "status" => "active",
                    "subjects" => "chemistry",
                    "title" => "English"
                ],
                [
                    "courseCode" => "CHEM101",
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "grades" => [
                        "PR",
                        "09",
                        "10"
                    ],
                    "metadata" => [
                        "duration" => "34 hours"
                    ],
                    "org" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "school"
                    ],
                    "resources" => [
                    ],
                    "schoolYear" => [
                        [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                            "sourcedId" => "d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                            "type" => "schoolYear"
                        ]
                    ],
                    "sourcedId" => "d99d2586-57d5-11ea-8a63-3a6d5a0778e8",
                    "status" => "active",
                    "subjects" => "chemistry",
                    "title" => "Chemistry"
                ]
            ]
        ]);
    }

    public function getCourse($course){
        return json_encode( [
            "course" => [
                "courseCode" => "CHEM101",
                "dateLastModified" => "2020-02-25T13:50:57Z",
                "grades" => [
                    "PR",
                    "09",
                    "10"
                ],
                "metadata" => [
                    "duration" => "34 hours"
                ],
                "org" => [
                    "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                    "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                    "type" => "school"
                ],
                "resources" => [
                    [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/resources/d99f7890-57d5-11ea-b25f-3a6d5a0778e8",
                        "sourcedId" => "d99f7890-57d5-11ea-b25f-3a6d5a0778e8",
                        "type" => "resource"
                    ]
                ],
                "schoolYear" => [
                    [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                        "sourcedId" => "d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                        "type" => "schoolYear"
                    ]
                ],
                "sourcedId" => "d99d95de-57d5-11ea-ab44-3a6d5a0778e8",
                "status" => "active",
                "subjects" => "chemistry",
                "title" => "English"
            ]
        ]);

    }

    public function getAllEnrollments(){
        return json_encode([
            "enrollments" => [
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9adf834-57d5-11ea-8af3-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "sourcedId" => "d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9af400e-57d5-11ea-a877-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "sourcedId" => "d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9b0c884-57d5-11ea-a9f1-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "sourcedId" => "d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9b1d0e4-57d5-11ea-bfb7-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "sourcedId" => "d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9b2bd4c-57d5-11ea-afc9-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "sourcedId" => "d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9b39eec-57d5-11ea-9c4f-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "sourcedId" => "d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9bbfd26-57d5-11ea-bbca-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "sourcedId" => "d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9bcac4e-57d5-11ea-a8cf-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "sourcedId" => "d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9bd5c66-57d5-11ea-9c2d-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "sourcedId" => "d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9be0f26-57d5-11ea-afb7-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "sourcedId" => "d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9bebe26-57d5-11ea-b692-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "sourcedId" => "d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9bf7af0-57d5-11ea-825c-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "sourcedId" => "d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9c02e00-57d5-11ea-804b-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "sourcedId" => "d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9c0ef34-57d5-11ea-939a-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "sourcedId" => "d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9c1a488-57d5-11ea-9eb5-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "sourcedId" => "d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9cb6f54-57d5-11ea-9f7e-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "sourcedId" => "d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9cc7b42-57d5-11ea-8029-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "sourcedId" => "d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9cd5f26-57d5-11ea-b70f-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "sourcedId" => "d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9ce332e-57d5-11ea-94f0-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "sourcedId" => "d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9cf2824-57d5-11ea-a334-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "sourcedId" => "d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9d04628-57d5-11ea-8cab-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "sourcedId" => "d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9d108ce-57d5-11ea-a853-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "sourcedId" => "d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9d1f4be-57d5-11ea-86ce-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "sourcedId" => "d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9da7c2e-57d5-11ea-adad-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "sourcedId" => "d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9db42d0-57d5-11ea-8df5-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "sourcedId" => "d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9dc0a6c-57d5-11ea-9e5b-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "sourcedId" => "d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9dcc0a6-57d5-11ea-b378-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "sourcedId" => "d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9de095c-57d5-11ea-bbbb-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "sourcedId" => "d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9deea52-57d5-11ea-8448-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "sourcedId" => "d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9dfb0e0-57d5-11ea-a713-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "sourcedId" => "d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9e06396-57d5-11ea-86ad-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "sourcedId" => "d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "student",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9e11746-57d5-11ea-a07e-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "sourcedId" => "d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ],
                [
                    "beginDate" => "2020-02-25",
                    "class" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                        "type" => "class"
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "endDate" => "2020-05-25",
                    "metadata" => [
                    ],
                    "primary" => "true",
                    "role" => "teacher",
                    "school" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "type" => "org"
                    ],
                    "sourcedId" => "d9ea3768-57d5-11ea-a495-3a6d5a0778e8",
                    "status" => "active",
                    "user" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "sourcedId" => "d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "type" => "user"
                    ]
                ]
            ]
        ]);
    }

    public function getEnrollment($enrollment){
        return json_encode([
            "enrollment" => [
                "beginDate" => "2020-02-25",
                "class" => [
                    "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/classes/d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                    "sourcedId" => "d99e5014-57d5-11ea-9ad0-3a6d5a0778e8",
                    "type" => "class"
                ],
                "dateLastModified" => "2020-02-25T13:50:57Z",
                "endDate" => "2020-05-25",
                "metadata" => [
                ],
                "primary" => "true",
                "role" => "student",
                "school" => [
                    "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                    "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                    "type" => "org"
                ],
                "sourcedId" => "d9adf834-57d5-11ea-8af3-3a6d5a0778e8",
                "status" => "active",
                "user" => [
                    "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/users/d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                    "sourcedId" => "d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                    "type" => "user"
                ]
            ]
        ]);
    }

    public function getAllGradingPeriods(){
        return json_encode( [
            "academicSessions" => [
                [
                    "children" => [
                    ],
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "endDate" => "2020-02-25",
                    "metadata" => [
                        "number_of_counselors" => 4
                    ],
                    "parent" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                        "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                        "type" => "term"
                    ],
                    "schoolYear" => 2019,
                    "sourcedId" => "d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                    "startDate" => "2020-02-25",
                    "status" => "active",
                    "title" => "Spring grading period",
                    "type" => "gradingPeriod"
                ]
            ]
        ]);
    }

    public function getGradingPeriod($gradingPeriod){
        return json_encode( [
            "academicSession" => [
                "children" => [
                ],
                "dateLastModified" => "2020-02-25T13:50:57Z",
                "endDate" => "2020-02-25",
                "metadata" => [
                    "number_of_counselors" => 4
                ],
                "parent" => [
                    "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                    "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                    "type" => "term"
                ],
                "schoolYear" => 2019,
                "sourcedId" => "d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                "startDate" => "2020-02-25",
                "status" => "active",
                "title" => "Spring grading period",
                "type" => "gradingPeriod"
            ]
        ]);
    }

    public function getAllOrgs(){
        return json_encode([
                "orgs" => [
                    [
                        "children" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "identifier" => "d99b4496-57d5-11ea-a691-3a6d5a0778e8",
                        "metadata" => [
                            "boarding" => "true",
                            "classification" => "private",
                            "http://www.imsglobal.org/memberLevel" => "http://www.imsglobal.org/memberLevel/associate",
                            "ncesId" => "d99b4b08-57d5-11ea-a39b-3a6d5a0778e8"
                        ],
                        "name" => "School d99b5198-57d5-11ea-b282-3a6d5a0778e8",
                        "parent" => [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99a483e-57d5-11ea-9f27-3a6d5a0778e8",
                            "sourcedId" => "d99a483e-57d5-11ea-9f27-3a6d5a0778e8",
                            "type" => "district"
                        ],
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "status" => "active",
                        "type" => "school"
                    ],
                    [
                        "children" => [
                            [
                                "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                                "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                                "type" => "school"
                            ]
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "identifier" => "d99a3524-57d5-11ea-a0c2-3a6d5a0778e8",
                        "metadata" => [
                            "boarding" => "true",
                            "classification" => "private",
                            "http://www.imsglobal.org/memberLevel" => "http://www.imsglobal.org/memberLevel/associate",
                            "ncesId" => "d99a3b96-57d5-11ea-97cd-3a6d5a0778e8"
                        ],
                        "name" => "District d99a41d6-57d5-11ea-9187-3a6d5a0778e8",
                        "parent" => [
                        ],
                        "sourcedId" => "d99a483e-57d5-11ea-9f27-3a6d5a0778e8",
                        "status" => "active",
                        "type" => "district"
                    ]
                ]
            ]);
    }

    public function getAllSchools(){
        return json_encode([
                "orgs" => [
                    [
                        "children" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "identifier" => "d99b4496-57d5-11ea-a691-3a6d5a0778e8",
                        "metadata" => [
                            "boarding" => "true",
                            "classification" => "private",
                            "http://www.imsglobal.org/memberLevel" => "http://www.imsglobal.org/memberLevel/associate",
                            "ncesId" => "d99b4b08-57d5-11ea-a39b-3a6d5a0778e8"
                        ],
                        "name" => "School d99b5198-57d5-11ea-b282-3a6d5a0778e8",
                        "parent" => [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99a483e-57d5-11ea-9f27-3a6d5a0778e8",
                            "sourcedId" => "d99a483e-57d5-11ea-9f27-3a6d5a0778e8",
                            "type" => "district"
                        ],
                        "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                        "status" => "active",
                        "type" => "school"
                    ]
                ]
            ]);
    }

    public function getSchool($school){
        return json_encode([
                "org" => [
                    "children" => [
                    ],
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "identifier" => "d99b4496-57d5-11ea-a691-3a6d5a0778e8",
                    "metadata" => [
                        "boarding" => "true",
                        "classification" => "private",
                        "http://www.imsglobal.org/memberLevel" => "http://www.imsglobal.org/memberLevel/associate",
                        "ncesId" => "d99b4b08-57d5-11ea-a39b-3a6d5a0778e8"
                    ],
                    "name" => "School d99b5198-57d5-11ea-b282-3a6d5a0778e8",
                    "parent" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/orgs/d99a483e-57d5-11ea-9f27-3a6d5a0778e8",
                        "sourcedId" => "d99a483e-57d5-11ea-9f27-3a6d5a0778e8",
                        "type" => "district"
                    ],
                    "sourcedId" => "d99b57f6-57d5-11ea-b59e-3a6d5a0778e8",
                    "status" => "active",
                    "type" => "school"
                ]
            ]);
    }

    public function getAllStudents(){
        return json_encode([
                "users" => [
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9acf04c-57d5-11ea-aae7-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "givenName" => "first_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9acfa7e-57d5-11ea-ab13-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ad0082-57d5-11ea-aad4-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9acd92c-57d5-11ea-89b3-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "givenName" => "first_name-d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ace00c-57d5-11ea-8365-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ace598-57d5-11ea-a50f-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9acc108-57d5-11ea-be6c-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "givenName" => "first_name-d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9accb1c-57d5-11ea-b993-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9acd0bc-57d5-11ea-bdcb-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "givenName" => "first_name-d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9acb3ac-57d5-11ea-baaf-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9acb92e-57d5-11ea-b471-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9ac957a-57d5-11ea-80e5-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "givenName" => "first_name-d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac9b7e-57d5-11ea-ac36-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9aca3e4-57d5-11ea-98b7-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "givenName" => "first_name-d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac8666-57d5-11ea-a653-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ac8bf2-57d5-11ea-b35f-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "givenName" => "first_name-d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac6e88-57d5-11ea-892c-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ac7400-57d5-11ea-832d-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "givenName" => "first_name-d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac5844-57d5-11ea-9eeb-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ac5de4-57d5-11ea-8e60-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "givenName" => "first_name-d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac3616-57d5-11ea-af98-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ac419c-57d5-11ea-9b13-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "givenName" => "first_name-d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a2790a-57d5-11ea-b21f-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a27e82-57d5-11ea-9b51-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a25bd2-57d5-11ea-814f-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "givenName" => "first_name-d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a261e0-57d5-11ea-9ef8-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a26974-57d5-11ea-b943-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a24692-57d5-11ea-b1a1-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "givenName" => "first_name-d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a24ce6-57d5-11ea-a0b9-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a2536c-57d5-11ea-b8e4-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "givenName" => "first_name-d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a23418-57d5-11ea-9912-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a23b48-57d5-11ea-b952-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a20cae-57d5-11ea-929b-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "givenName" => "first_name-d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a216b8-57d5-11ea-86d4-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a22234-57d5-11ea-99da-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1f6ce-57d5-11ea-807c-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1fcd2-57d5-11ea-a057-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1dffe-57d5-11ea-a0ec-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1e5da-57d5-11ea-ab09-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1c294-57d5-11ea-a93d-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1c92e-57d5-11ea-a353-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1d0e0-57d5-11ea-bf29-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1b498-57d5-11ea-8f26-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1b9e8-57d5-11ea-be9e-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a19800-57d5-11ea-8149-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "givenName" => "first_name-d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a19ec2-57d5-11ea-8175-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1a5de-57d5-11ea-8faf-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "givenName" => "first_name-d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a189dc-57d5-11ea-8384-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a18efa-57d5-11ea-a0ed-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a16cae-57d5-11ea-981e-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "givenName" => "first_name-d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1737a-57d5-11ea-b012-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a17910-57d5-11ea-991c-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a15e8a-57d5-11ea-b0fa-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a163ee-57d5-11ea-8a87-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a13fc2-57d5-11ea-beed-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "givenName" => "first_name-d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1479c-57d5-11ea-b149-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a14d6e-57d5-11ea-a2ea-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a126cc-57d5-11ea-bb82-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "givenName" => "first_name-d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a12cc6-57d5-11ea-960a-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a13540-57d5-11ea-ad30-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a11196-57d5-11ea-9f06-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "givenName" => "first_name-d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a117a4-57d5-11ea-b6c0-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a11d9e-57d5-11ea-944d-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a0fad0-57d5-11ea-a712-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "givenName" => "first_name-d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1011a-57d5-11ea-b1d2-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a10674-57d5-11ea-840f-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "givenName" => "first_name-d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0ec48-57d5-11ea-a0fb-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a0f238-57d5-11ea-b7a5-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "givenName" => "first_name-d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0d578-57d5-11ea-9153-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a0db5e-57d5-11ea-b340-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a0b782-57d5-11ea-b673-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "givenName" => "first_name-d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0c02e-57d5-11ea-9f09-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a0c650-57d5-11ea-8e1c-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a099dc-57d5-11ea-a752-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "givenName" => "first_name-d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0a094-57d5-11ea-8c0b-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a0a62a-57d5-11ea-95b3-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a07d30-57d5-11ea-acb5-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "givenName" => "first_name-d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a08488-57d5-11ea-baff-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a08aa0-57d5-11ea-9b10-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a05c42-57d5-11ea-9375-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "givenName" => "first_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0664c-57d5-11ea-b9c0-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a07060-57d5-11ea-8b3f-3a6d5a0778e8"
                    ]
                ]
            ]);
    }

    public function getStudent($student){
        return json_encode([
                "user" => [
                    "agents" => [
                    ],
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "email" => "d9acf04c-57d5-11ea-aae7-3a6d5a0778e8@test.org",
                    "enabledUser" => true,
                    "familyName" => "last_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                    "givenName" => "first_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                    "grades" => [
                        "PR",
                        "09",
                        "10"
                    ],
                    "metadata" => [
                        "honor_student" => "true"
                    ],
                    "middleName" => "middle_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                    "orgs" => [
                    ],
                    "password" => "pass-d9acfa7e-57d5-11ea-ab13-3a6d5a0778e8",
                    "phone" => "1-555-555-5555",
                    "role" => "student",
                    "sms" => "1-555-555-5555",
                    "sourcedId" => "d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                    "status" => "active",
                    "userIds" => [
                    ],
                    "username" => "user-d9ad0082-57d5-11ea-aad4-3a6d5a0778e8"
                ]
            ]);
    }

    public function getAllTeachers(){
        return json_encode([
                "users" => [
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:58Z",
                        "email" => "d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "givenName" => "first_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "grades" => [
                        ],
                        "metadata" => [
                            "married" => "true"
                        ],
                        "middleName" => "middle_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9e9c2ce-57d5-11ea-8e8a-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "teacher",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9e9c94a-57d5-11ea-a365-3a6d5a0778e8"
                    ]
                ]
            ]);
    }

    public function getTeacher($teacher){
        return json_encode([
                "user" => [
                    "agents" => [
                    ],
                    "dateLastModified" => "2020-02-25T13:50:58Z",
                    "email" => "d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8@test.org",
                    "enabledUser" => true,
                    "familyName" => "last_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                    "givenName" => "first_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                    "grades" => [
                    ],
                    "metadata" => [
                        "married" => "true"
                    ],
                    "middleName" => "middle_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                    "orgs" => [
                    ],
                    "password" => "pass-d9e9c2ce-57d5-11ea-8e8a-3a6d5a0778e8",
                    "phone" => "1-555-555-5555",
                    "role" => "teacher",
                    "sms" => "1-555-555-5555",
                    "sourcedId" => "d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                    "status" => "active",
                    "userIds" => [
                    ],
                    "username" => "user-d9e9c94a-57d5-11ea-a365-3a6d5a0778e8"
                ]
            ]);
    }

    public function getAllTerms(){
        return json_encode([
                "academicSessions" => [
                    [
                        "children" => [
                            [
                                "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                                "sourcedId" => "d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                                "type" => "gradingPeriod"
                            ],
                            [
                                "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99cf4c6-57d5-11ea-87aa-3a6d5a0778e8",
                                "sourcedId" => "d99cf4c6-57d5-11ea-87aa-3a6d5a0778e8",
                                "type" => "semester"
                            ]
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "endDate" => "2020-02-25",
                        "metadata" => [
                            "number_of_counselors" => 4
                        ],
                        "parent" => [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                            "sourcedId" => "d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                            "type" => "schoolYear"
                        ],
                        "schoolYear" => 2019,
                        "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                        "startDate" => "2020-02-25",
                        "status" => "active",
                        "title" => "Spring Term",
                        "type" => "term"
                    ]
                ]
            ]);
    }

    public function getTerm($term){
        return json_encode([
                "academicSession" => [
                    "children" => [
                        [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                            "sourcedId" => "d99cb9a2-57d5-11ea-85b8-3a6d5a0778e8",
                            "type" => "gradingPeriod"
                        ],
                        [
                            "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99cf4c6-57d5-11ea-87aa-3a6d5a0778e8",
                            "sourcedId" => "d99cf4c6-57d5-11ea-87aa-3a6d5a0778e8",
                            "type" => "semester"
                        ]
                    ],
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "endDate" => "2020-02-25",
                    "metadata" => [
                        "number_of_counselors" => 4
                    ],
                    "parent" => [
                        "href" => "https://or-ri.imsglobal.org/ims/oneroster/v1p1/academicSessions/d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                        "sourcedId" => "d99bdb90-57d5-11ea-9ac2-3a6d5a0778e8",
                        "type" => "schoolYear"
                    ],
                    "schoolYear" => 2019,
                    "sourcedId" => "d99c61e6-57d5-11ea-a767-3a6d5a0778e8",
                    "startDate" => "2020-02-25",
                    "status" => "active",
                    "title" => "Spring Term",
                    "type" => "term"
                ]
            ]);
    }

    public function getAllUsers(){
        return json_encode([
                "users" => [
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a05c42-57d5-11ea-9375-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "givenName" => "first_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0664c-57d5-11ea-b9c0-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a07060-57d5-11ea-8b3f-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a07d30-57d5-11ea-acb5-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "givenName" => "first_name-d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a08488-57d5-11ea-baff-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a07d30-57d5-11ea-acb5-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a08aa0-57d5-11ea-9b10-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a099dc-57d5-11ea-a752-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "givenName" => "first_name-d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0a094-57d5-11ea-8c0b-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a099dc-57d5-11ea-a752-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a0a62a-57d5-11ea-95b3-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a0b782-57d5-11ea-b673-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "givenName" => "first_name-d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0c02e-57d5-11ea-9f09-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a0b782-57d5-11ea-b673-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a0c650-57d5-11ea-8e1c-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "givenName" => "first_name-d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0d578-57d5-11ea-9153-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a0cf10-57d5-11ea-ab5d-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a0db5e-57d5-11ea-b340-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "givenName" => "first_name-d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a0ec48-57d5-11ea-a0fb-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a0e63a-57d5-11ea-91bc-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a0f238-57d5-11ea-b7a5-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a0fad0-57d5-11ea-a712-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "givenName" => "first_name-d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1011a-57d5-11ea-b1d2-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a0fad0-57d5-11ea-a712-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a10674-57d5-11ea-840f-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a11196-57d5-11ea-9f06-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "givenName" => "first_name-d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a117a4-57d5-11ea-b6c0-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a11196-57d5-11ea-9f06-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a11d9e-57d5-11ea-944d-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a126cc-57d5-11ea-bb82-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "givenName" => "first_name-d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a12cc6-57d5-11ea-960a-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a126cc-57d5-11ea-bb82-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a13540-57d5-11ea-ad30-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a13fc2-57d5-11ea-beed-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "givenName" => "first_name-d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1479c-57d5-11ea-b149-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a13fc2-57d5-11ea-beed-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a14d6e-57d5-11ea-a2ea-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a15e8a-57d5-11ea-b0fa-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1587c-57d5-11ea-a5d5-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a163ee-57d5-11ea-8a87-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a16cae-57d5-11ea-981e-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "givenName" => "first_name-d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1737a-57d5-11ea-b012-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a16cae-57d5-11ea-981e-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a17910-57d5-11ea-991c-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "givenName" => "first_name-d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a189dc-57d5-11ea-8384-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a183c4-57d5-11ea-b8e8-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a18efa-57d5-11ea-a0ed-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a19800-57d5-11ea-8149-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "givenName" => "first_name-d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a19ec2-57d5-11ea-8175-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a19800-57d5-11ea-8149-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1a5de-57d5-11ea-8faf-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1b498-57d5-11ea-8f26-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1aeda-57d5-11ea-bbad-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1b9e8-57d5-11ea-be9e-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1c294-57d5-11ea-a93d-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1c92e-57d5-11ea-a353-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1c294-57d5-11ea-a93d-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1d0e0-57d5-11ea-bf29-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1dffe-57d5-11ea-a0ec-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1da2c-57d5-11ea-89f3-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1e5da-57d5-11ea-ab09-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "givenName" => "first_name-d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a1f6ce-57d5-11ea-807c-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a1ee22-57d5-11ea-ad88-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a1fcd2-57d5-11ea-a057-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a20cae-57d5-11ea-929b-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "givenName" => "first_name-d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a216b8-57d5-11ea-86d4-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a20cae-57d5-11ea-929b-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a22234-57d5-11ea-99da-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "givenName" => "first_name-d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a23418-57d5-11ea-9912-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a22cfc-57d5-11ea-9f07-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a23b48-57d5-11ea-b952-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a24692-57d5-11ea-b1a1-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "givenName" => "first_name-d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a24ce6-57d5-11ea-a0b9-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a24692-57d5-11ea-b1a1-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a2536c-57d5-11ea-b8e4-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a25bd2-57d5-11ea-814f-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "givenName" => "first_name-d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a261e0-57d5-11ea-9ef8-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a25bd2-57d5-11ea-814f-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a26974-57d5-11ea-b943-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "givenName" => "first_name-d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9a2790a-57d5-11ea-b21f-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a272fc-57d5-11ea-b8fc-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9a27e82-57d5-11ea-9b51-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "givenName" => "first_name-d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac3616-57d5-11ea-af98-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9a2877e-57d5-11ea-a7c8-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ac419c-57d5-11ea-9b13-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "givenName" => "first_name-d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac5844-57d5-11ea-9eeb-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9ac4ffc-57d5-11ea-baa6-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ac5de4-57d5-11ea-8e60-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "givenName" => "first_name-d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac6e88-57d5-11ea-892c-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9ac6884-57d5-11ea-9ad4-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ac7400-57d5-11ea-832d-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "givenName" => "first_name-d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac8666-57d5-11ea-a653-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9ac7fe0-57d5-11ea-a93f-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ac8bf2-57d5-11ea-b35f-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9ac957a-57d5-11ea-80e5-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "givenName" => "first_name-d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ac9b7e-57d5-11ea-ac36-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9ac957a-57d5-11ea-80e5-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9aca3e4-57d5-11ea-98b7-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "givenName" => "first_name-d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9acb3ac-57d5-11ea-baaf-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9acad8a-57d5-11ea-9cf5-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9acb92e-57d5-11ea-b471-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9acc108-57d5-11ea-be6c-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "givenName" => "first_name-d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9accb1c-57d5-11ea-b993-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9acc108-57d5-11ea-be6c-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9acd0bc-57d5-11ea-bdcb-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9acd92c-57d5-11ea-89b3-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "givenName" => "first_name-d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9ace00c-57d5-11ea-8365-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9acd92c-57d5-11ea-89b3-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ace598-57d5-11ea-a50f-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:57Z",
                        "email" => "d9acf04c-57d5-11ea-aae7-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "givenName" => "first_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "grades" => [
                            "PR",
                            "09",
                            "10"
                        ],
                        "metadata" => [
                            "honor_student" => "true"
                        ],
                        "middleName" => "middle_name-d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9acfa7e-57d5-11ea-ab13-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "student",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9acf04c-57d5-11ea-aae7-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9ad0082-57d5-11ea-aad4-3a6d5a0778e8"
                    ],
                    [
                        "agents" => [
                        ],
                        "dateLastModified" => "2020-02-25T13:50:58Z",
                        "email" => "d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8@test.org",
                        "enabledUser" => true,
                        "familyName" => "last_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "givenName" => "first_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "grades" => [
                        ],
                        "metadata" => [
                            "married" => "true"
                        ],
                        "middleName" => "middle_name-d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "orgs" => [
                        ],
                        "password" => "pass-d9e9c2ce-57d5-11ea-8e8a-3a6d5a0778e8",
                        "phone" => "1-555-555-5555",
                        "role" => "teacher",
                        "sms" => "1-555-555-5555",
                        "sourcedId" => "d9e9b6ee-57d5-11ea-a231-3a6d5a0778e8",
                        "status" => "active",
                        "userIds" => [
                        ],
                        "username" => "user-d9e9c94a-57d5-11ea-a365-3a6d5a0778e8"
                    ]
                ]
            ]);
    }

    public function getUser($user){
        return json_encode([
                "user" => [
                    "agents" => [
                    ],
                    "dateLastModified" => "2020-02-25T13:50:57Z",
                    "email" => "d9a05c42-57d5-11ea-9375-3a6d5a0778e8@test.org",
                    "enabledUser" => true,
                    "familyName" => "last_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                    "givenName" => "first_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                    "grades" => [
                        "PR",
                        "09",
                        "10"
                    ],
                    "metadata" => [
                        "honor_student" => "true"
                    ],
                    "middleName" => "middle_name-d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                    "orgs" => [
                    ],
                    "password" => "pass-d9a0664c-57d5-11ea-b9c0-3a6d5a0778e8",
                    "phone" => "1-555-555-5555",
                    "role" => "student",
                    "sms" => "1-555-555-5555",
                    "sourcedId" => "d9a05c42-57d5-11ea-9375-3a6d5a0778e8",
                    "status" => "active",
                    "userIds" => [
                    ],
                    "username" => "user-d9a07060-57d5-11ea-8b3f-3a6d5a0778e8"
                ]
            ]);
    }
}
