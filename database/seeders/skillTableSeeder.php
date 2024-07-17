<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class skillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $id =1;
        $skills = [
            [
                'id'        => $id ++,
                'skill_name' => 'CNC Milling',
                'skill_type' => 'Manufacturing and Engineering Technology',
                'skill_desc' => 'CNC Milling involves the use of computer-controlled machines to cut and shape materials.',
                'skill_image' => 'skill_1.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Welding',
                'skill_type' => 'Manufacturing and Engineering Technology',
                'skill_desc' => 'Welding is the process of joining materials, usually metals or thermoplastics, by using high heat to melt the parts together.',
                'skill_image' => 'skill_2.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Mechatronics',
                'skill_type' => 'Manufacturing and Engineering Technology',
                'skill_desc' => 'Mechatronics combines mechanical engineering, electronics, computer science, and control engineering to design and create smart systems and products.',
                'skill_image' => 'skill_3.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Web Technologies',
                'skill_type' => 'Information and Communication Technology',
                'skill_desc' => 'Nowadays, the job of a web developer is important because we live in an era where the internet is becoming indispensable. It is also one of the most complex and diversified professions.

Web developers first establish a professional relationship with their customers in order to fully understand the needs of their website. Strong design and communication skills, combined with a good knowledge of target audiences, markets and trends, are a must. During the development process, the web developer creates databases, develops programs, tests, and debugs websites.',
                'skill_image' => 'skill_4.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'IT Network Systems Administration',
                'skill_type' => 'Information and Communication Technology',
                'skill_desc' => 'The computer systems and network administrator is required to work with data centers, network operations centers, server rooms with controlled environments or for Internet service providers. They must be able to communicate and solve problems, but also keep up to date with the latest developments in the industry.

It provides a wide range of services, including user support, and designs, repairs, installs, configures, and updates operating systems and network equipment.',
                'skill_image' => 'skill_5.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Cyber Security',
                'skill_type' => 'Information and Communication Technology',
                'skill_desc' => "It is typically employed by IT service providers, government agencies, or companies in the banking, financial, and medical industries.

Their work most often involves installing firewalls and data encryption software to protect confidential information. The analyst monitors their company's network to detect security vulnerabilities and determine the cause of possible breaches. They can also help design and execute a company's disaster recovery plan, which is the steps and procedures to restore computer systems and networks after an attack.

The cyber security analyst must always stay one step ahead of potential cybercriminals. This means keeping abreast of the latest methods used to infiltrate computer systems, as well as new security technologies being developed to counter these threats.

Online shopping, the Internet of Things (IoT), and cloud computing have grown dramatically in recent years. In the face of increasingly complex and frequent security threats, cybersecurity professionals are now in high demand around the world.",
                'skill_image' => 'skill_6.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'IT Business Software Solutions',
                'skill_type' => 'Information and Communication Technology',
                'skill_desc' => 'Software solution specialists are now among the most sought-after professionals in the world of work.

They create new IT systems or modify existing ones, working as part of a team responsible for analyzing, designing, developing, testing, and maintaining these software solutions.

This is a constantly evolving field, and it is therefore necessary to keep up with the latest advances in order to best meet the needs of customers.',
                'skill_image' => 'skill_7.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Mobile App Development',
                'skill_type' => 'Information and Communication Technology',
                'skill_desc' => 'Mobile Development focuses on creating applications for mobile devices such as smartphones and tablets.',
                'skill_image' => 'skill_8.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Bricklaying',
                'skill_type' => 'Construction and Building Technology',
                'skill_desc' => 'Bricklaying involves constructing walls, partitions, fireplaces, and other structures using bricks and other masonry units.',
                'skill_image' => 'skill_9.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Automotive Technology',
                'skill_type' => 'Transportation and Logistics',
                'skill_desc' => 'Automotive Technology focuses on the repair and maintenance of vehicles.',
                'skill_image' => 'skill_10.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Aircraft Maintenance',
                'skill_type' => 'Transportation and Logistics',
                'skill_desc' => 'Aircraft Maintenance involves the inspection, repair, and maintenance of aircraft to ensure safe and efficient operation.',
                'skill_image' => 'skill_11.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Heavy Vehicle Maintenance',
                'skill_type' => 'Transportation and Logistics',
                'skill_desc' => 'Heavy Vehicle Maintenance focuses on the repair and maintenance of large vehicles such as trucks, buses, and construction equipment.',
                'skill_image' => 'skill_12.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Graphic Design Technology',
                'skill_type' => 'Creative Arts and Fashion',
                'skill_desc' => 'Graphic Design Technology involves creating visual content for various media.',
                'skill_image' => 'skill_13.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Beauty Therapy',
                'skill_type' => 'Social and Personal Services',
                'skill_desc' => 'Beauty Therapy includes various treatments to improve personal appearance and well-being.',
                'skill_image' => 'skill_14.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Hairdressing',
                'skill_type' => 'Social and Personal Services',
                'skill_desc' => 'Hairdressing involves cutting, styling, and treating hair to enhance its appearance and health.',
                'skill_image' => 'skill_15.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Cabling for very high-speed networks',
                'skill_type' => 'Information and Communication Technology',
                'skill_desc' => 'Essential professional services, from cable TV to telephone and broadband, all depend on wiring ultra-high-speed networks.

The Network Cabling Technician uses his or her knowledge to design and install wide area networks (WANs), local area networks (LANs) and cable television. They need to know the different types of cables and how they work together to create an efficient network.',
                'skill_image' => 'skill_16.png'
            ],
            [
                'id'        => $id ++,
                'skill_name' => 'Cloud Computing',
                'skill_type' => 'Information and Communication Technology',
                'skill_desc' => 'Cloud engineers help businesses migrate their physical IT activities, such as file storage and on-premises servers, to a virtual environment. Cloud engineers typically work in technology companies or large enterprises with significant infrastructure.

To do this job, you need to be able to design and implement IT infrastructure in a public cloud. Cloud computing encompasses multiple professions, including systems engineers, database administrators, network engineers, storage administrators, systems/network/solutions/enterprise architects, programmers/developers, and other similar technology-focused occupations.

Cloud engineers help design these infrastructures, collaborate with customer service and analysts at different stages of the project, analyze system vulnerabilities, and then suggest improvements. They must be proficient in the components of system architecture, such as networks and software. In addition to strong technical skills, they must also be able to work in a team and have good analytical skills in order to effectively determine the strengths and weaknesses of a project.',
                'skill_image' => 'skill_17.png'
            ],
        ];

        DB::table('skills')->insert($skills);

        $faker = Faker::create();

        for ($i = 1; $i <= 60; $i++) {
            DB::table('photo')->insert([
                'id'=> $i,
                'link' => "photo_{$i}.png",
                'popularity' => $faker->numberBetween(0, 1000),
                'view' => $faker->numberBetween(0, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
