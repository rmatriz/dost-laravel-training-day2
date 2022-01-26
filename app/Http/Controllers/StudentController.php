<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * This function will return a view with dummy subject data
     *
     * @return 
     */
    public function enrolledSubjects()
    {
        $subjects_data = [
            [
                'id' => '1',
                'subject_name' => 'Mathematics',
                'daily_sched' => 'MWF',
                'time' => '8:00 - 9:00 AM',
                'room' => 'RM01',
                'instructor' => 'Blaise Pascal'
            ],
            [
                'id' => '2',
                'subject_name' => 'English',
                'daily_sched' => 'MWF',
                'time' => '9:00 - 10:00 AM',
                'room' => 'RM02',
                'instructor' => 'Robert Langdon'
            ],
            [
                'id' => '3',
                'subject_name' => 'Science',
                'daily_sched' => 'MWF',
                'time' => '10:00 - 11:00 AM',
                'room' => 'RM03',
                'instructor' => 'Nikola Tesla'
            ],
            [
                'id' => '4',
                'subject_name' => 'Filipino',
                'daily_sched' => 'MWF',
                'time' => '11:00 - 12:00 AM',
                'room' => 'RM04',
                'instructor' => 'Jose Rizal'
            ],
            [
                'id' => '5',
                'subject_name' => 'Python',
                'daily_sched' => 'TTH',
                'time' => '01:00 - 02:00 PM',
                'room' => 'RM05',
                'instructor' => 'Guido Van Rossum'
            ],
            [
                'id' => '6',
                'subject_name' => 'PHP',
                'daily_sched' => 'TTH',
                'time' => '02:00 - 03:00 PM',
                'room' => 'RM06',
                'instructor' => 'Rasmus Lerdorf'
            ],
            [
                'id' => '7',
                'subject_name' => 'Java',
                'daily_sched' => 'TTH',
                'time' => '03:00 - 04:00 PM',
                'room' => 'RM07',
                'instructor' => 'James Gosling'
            ],
            [
                'id' => '8',
                'subject_name' => 'HTML',
                'daily_sched' => 'TTH',
                'time' => '04:00 - 05:00 PM',
                'room' => 'RM07',
                'instructor' => 'Tim Berners Lee'
            ],
             [
                'id' => '9',
                'subject_name' => 'CSS',
                'daily_sched' => 'TTH',
                'time' => '05:00 - 06:00 PM',
                'room' => 'RM07',
                'instructor' => 'Tim Berners Lee'
            ],

        ];

        return $subjects_data;

    }

    /**
     * This function will return a view with dummy student data
     *
     * @return \Illuminate\Http\Response
     */
    public function myProfile()
    {

        $profile_data = [
            [
                'student_name' => 'Isaac Newton',
                'student_avatar' => 'storage\public\avatar\avatar-male-1.png',
                'student_id' => 'SID01',
                'course' => 'Electrical Engineering',
                'birthdate' => '01-14-1643',
                'address' => 'UK',
                'contact_info' => '030307113'
            ],
        
        ];

        $subjects = $this->enrolledSubjects();
        $grades = $this->grades();

        return view('students.profile', [
            'profiles' => $profile_data,
            'subjects' => $subjects,
            'grades' => $grades

        ]);
    }

    /**
     *  This function must return a view with dummy grade data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function grades()
    {

        $grades = [
            [
                'subject' => 'Mathematics',
                'midterm' => 1.0,
                'finalterm' => 1.5,
                'average' => 1.25
            ],

            [
                'subject' => 'English',
                'midterm' => 2.0,
                'finalterm' => 1.5,
                'average' => 1.75
            ],
            [
                'subject' => 'Science',
                'midterm' => 2.1,
                'finalterm' => 1.7,
                'average' => 1.9
            ],
            [
                'subject' => 'Filipino',
                'midterm' => 1.2,
                'finalterm' => 1.5,
                'average' => 1.35
            ],
            [
                'subject' => 'Python',
                'midterm' => 1.0,
                'finalterm' => 1.1,
                'average' => 1.05
            ],
            [
                'subject' => 'PHP',
                'midterm' => 1.0,
                'finalterm' => 1.2,
                'average' => 1.1
            ],
            [
                'subject' => 'Java',
                'midterm' => 2.0,
                'finalterm' => 1.5,
                'average' => 1.75
            ],
            [
                'subject' => 'HTML',
                'midterm' => 1.0,
                'finalterm' => 1.2,
                'average' => 1.1
            ],
            [
                'subject' => 'CSS',
                'midterm' => 1.0,
                'finalterm' => 1.3,
                'average' => 1.15
            ],
        ];

        return $grades;

    }

   
}
