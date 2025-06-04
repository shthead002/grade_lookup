<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            [
                'code' => 'ITS 100',
                'name' => 'Introduction to Computing',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 101',
                'name' => 'Computer Programming I',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 200',
                'name' => 'Database Management Systems I',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 201',
                'name' => 'Systems Integration and Architecture',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 202',
                'name' => 'Obect-Oriented Programming I',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 203',
                'name' => 'Intellectual Property Basic',
                'semester_id' => 1
            ],
            [
                'code' => 'BPO 1',
                'name' => 'Fundamentals of BPO I',
                'semester_id' => 1
            ],
            [
                'code' => 'SERV 100',
                'name' => 'Service Culture',
                'semester_id' => 1
            ],
            [
                'code' => 'SYS 100',
                'name' => 'Principles of Systems Thinking',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 300',
                'name' => 'Web Development I',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 301',
                'name' => 'Seminars and Fieldtrips',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 302',
                'name' => 'Data Communication and Networking II',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 303',
                'name' => 'Animation',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 304',
                'name' => 'System Analysis and Design',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 401',
                'name' => 'Internship II',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 402',
                'name' => 'Capstone Project I',
                'semester_id' => 1
            ],
            [
                'code' => 'ITS 103',
                'name' => 'Discrete Mathematics',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 104',
                'name' => 'Computer Programming II',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 105',
                'name' => 'Data Structures and Algorithms',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 204',
                'name' => 'Hardware and Software Installation',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 205',
                'name' => 'Database Management Systems II',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 206',
                'name' => 'Data Communication and Networking I',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 207',
                'name' => 'Object-Oriented Programming II',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 208',
                'name' => 'Graphics and Visual Computing',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 209',
                'name' => 'Introduction to Human Computer Interaction',
                'semester_id' => 2
            ],
            [
                'code' => 'BPO II',
                'name' => 'Fundamentals of BPO II',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 305',
                'name' => 'Application Development and Emerging Technologies',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 306',
                'name' => 'Web Development II',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 307',
                'name' => 'Platform Technologies',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 308',
                'name' => 'System Administration and Maintenance',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 309',
                'name' => 'Information Assurance and Security',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 310',
                'name' => 'Management Information System',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 311',
                'name' => 'Quantitative Method',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 403',
                'name' => 'Capstone Project II',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 404',
                'name' => 'Social and Professional Issues of IT',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 405',
                'name' => 'Multimedia',
                'semester_id' => 2
            ],
            [
                'code' => 'ITS 400',
                'name' => 'Internship I',
                'semester_id' => 3
            ]
        ]);
        Course::insert([
            [
                'code' => 'CSC 100',
                'name' => 'Introduction to Computing',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 101',
                'name' => 'Computer Programming I',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 200',
                'name' => 'Object-Oriented Design and Programming',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 201',
                'name' => 'Information Management',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 202',
                'name' => 'Discrete Structure II',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 203',
                'name' => 'Algorithms and Complexity',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 204',
                'name' => 'Programming Languages',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 300',
                'name' => 'System Analysis and Design',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 301',
                'name' => 'Seminars and Fieldtrips',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 302',
                'name' => 'Networks and Communications',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 303',
                'name' => 'Software Engineering I',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 304',
                'name' => 'Web Programming',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 401',
                'name' => 'Internship II',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 402',
                'name' => 'Thesis I',
                'semester_id' => 1
            ],
            [
                'code' => 'CSC 103',
                'name' => 'Discrete Structures I',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 104',
                'name' => 'Computer Programming II',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 105',
                'name' => 'Data Structures and Algorithms',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 205',
                'name' => 'Architecture and Organization',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 206',
                'name' => 'Human Computer Interaction',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 207',
                'name' => 'Operating Systems',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 208',
                'name' => 'Modelling and Simulation',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 209',
                'name' => 'Graphics and Visual Computing',
                'semester_id' => 2
            ],
            [
                'code' => 'MATH 102',
                'name' => 'Numerical Analysis',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 305',
                'name' => 'Application Development and Emerging Technologies',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 306',
                'name' => 'Software Engineering II',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 307',
                'name' => 'Intellectual Property Basic',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 308',
                'name' => 'Information Assurance and Security',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 309',
                'name' => 'Automata Theory and Formal Language',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 403',
                'name' => 'Thesis II',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 404',
                'name' => 'Social Issues and Professional Practice',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 405',
                'name' => 'Artificial Intelligence',
                'semester_id' => 2
            ],
            [
                'code' => 'CSC 400',
                'name' => 'Internship I',
                'semester_id' => 3
            ]
        ]);
    }
}
