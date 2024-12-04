<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\District;
use App\Models\Institution;
use App\Models\CaseType;
use App\Models\Incident;
use App\Models\AirAmbulance;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create admin role
        $adminRole = Role::create([
            'description' => 'Administrator'
        ]);

        // Create admin user
        $admin = User::create([
            'firstName' => 'Admin',
            'lastName' => 'User',
            'contactNo' => '1234567890',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'userName' => 'admin',
            'image_path' => 'images/gov_logo.png',
            'district' => '1',
            'institution' => '1',
            'user_role' => $adminRole->id
        ]);

        // Create Districts
        $districts = [
            ['name' => 'Amajuba'],
            ['name' => 'eThekwini'],
            ['name' => 'iLembe'],
            ['name' => 'Harry Gwala'],
            ['name' => 'King Cetshwayo'],
            ['name' => 'Ugu'],
            ['name' => 'uMgungundlovu'],
            ['name' => 'uMkhanyakude'],
            ['name' => 'uMzinyathi'],
            ['name' => 'uThukela'],
            ['name' => 'Zululand']
        ];

        foreach ($districts as $district) {
            District::create($district);
        }

        // Create Institutions
        $institutions = [
            ['name' => 'Addington Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'King Edward VIII Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'Prince Mshiyeni Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'R K Khan Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'Mahatma Gandhi Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'Albert Luthuli Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'King Dinuzulu Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'Wentworth Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'St Aidans Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'McCords Hospital', 'district_id' => 2, 'type' => 'Hospital'],
            ['name' => 'KwaMashu Clinic', 'district_id' => 2, 'type' => 'Clinic'],
            ['name' => 'Inanda C Clinic', 'district_id' => 2, 'type' => 'Clinic'],
            ['name' => 'Phoenix Clinic', 'district_id' => 2, 'type' => 'Clinic'],
            ['name' => 'Tongaat Clinic', 'district_id' => 2, 'type' => 'Clinic']
        ];

        foreach ($institutions as $institution) {
            Institution::create($institution);
        }

        // Create Case Types
        $caseTypes = [
            ['type' => 'Emergency'],
            ['type' => 'Urgent'],
            ['type' => 'Non-urgent'],
            ['type' => 'Routine'],
            ['type' => 'Priority']
        ];

        foreach ($caseTypes as $caseType) {
            CaseType::create($caseType);
        }

        // Create Incidents
        $incidents = [
            ['description' => 'Motor Vehicle Accident'],
            ['description' => 'Medical Emergency'],
            ['description' => 'Trauma'],
            ['description' => 'Burns'],
            ['description' => 'Cardiac'],
            ['description' => 'Respiratory'],
            ['description' => 'Obstetric'],
            ['description' => 'Pediatric'],
            ['description' => 'Transfer'],
            ['description' => 'Other']
        ];

        foreach ($incidents as $incident) {
            Incident::create($incident);
        }

        // Create Sample Air Ambulance Request
        AirAmbulance::create([
            'reference' => 'AA' . date('Ymd') . '001',
            'user_id' => $admin->id,
            'name' => 'Dr. Sarah Johnson',
            'telephoneNo' => 312345678,
            'mobileNo' => 821234567,
            'district_id' => 2,
            'institution_id' => 1,
            'institution_type' => 'Hospital',
            'aircraft_type' => 'Rotor Wing',
            'caller_type' => 'Hot Response',
            'service_provider' => 'KZN Air Rescue',
            'incident_id' => 1,
            'motivation' => 'Multiple trauma',
            'referring_district' => 'eThekwini',
            'referring_institution' => 'Addington',
            'referring_ward' => 'Emergency',
            'referring_doctor' => 'Dr. Smith',
            'referring_telephoneNo' => 312345679,
            'referring_mobileNo' => 821234568,
            'receiving_district' => 'eThekwini',
            'receiving_institution' => 'Albert Luthuli',
            'receiving_ward' => 'ICU',
            'receiving_doctor' => 'Dr. Wilson',
            'receiving_telephoneNo' => 312345680,
            'receiving_mobileNo' => 821234569,
            'patientName' => 'John Doe',
            'gender' => 'Male',
            'age' => 35,
            'weight' => '75',
            'diagnosis' => 'Head trauma',
            'hotResponse_district' => 'eThekwini',
            'weather' => 'Clear',
            'GPS_latitude' => '-29.8587',
            'GPS_longitude' => '31.0218',
            'pickUp_point' => 'Hospital Helipad',
            'landing_area' => 'Clear area',
            'landmarks' => 'Hospital building',
            'ground_contact' => 'Security',
            'marking_devices' => 'Lights',
            'request_status' => 'Pending',
            'updated_by' => 'Admin',
            'time_authorized' => now()->format('H:i:s'),
            'reason' => 'Emergency transfer',
            'standDown_name' => '',
            'notification' => '',
            'standDown_reason' => '',
            'respiratory' => 'Normal',
            'respiratory_rate' => 16,
            'airway_methods' => 'Intubated',
            'PEEP' => '5',
            'interCoastal_drain' => 'None',
            'drug_name' => 'Morphine',
            'dose' => '5mg',
            'fluid_amount_andType' => 'NS 1000ml',
            'drugInfuse_rate' => 100,
            'drug_start' => now()->format('H:i:s'),
            'drug_stop' => now()->addHours(1)->format('H:i:s'),
            'drug_left' => '500ml',
            'pulse_rate' => 80,
            'pulse_rhythm' => 'Regular',
            'blood_pressure' => '120/80',
            'IVLine_central' => 'Yes',
            'pacemaker' => 'No',
            'IVLine_peripheral' => 'Yes',
            'arterial_line' => 'No',
            'glasgow_comaScale' => '15',
            'eyes' => 'Open',
            'motor' => 'Normal',
            'verbal' => 'Clear',
            'pupils' => 'Equal',
            'left_pupil' => '3mm',
            'right_pupil' => '3mm',
            'ph' => '7.4',
            'p02' => '98',
            'pC02' => '40',
            'Hc03' => '24',
            'Sa02' => '98',
            'Hb' => '14',
            'WWC' => '8000',
            'Napos' => '140',
            'kpos' => '4.0',
            'urea' => '5.0',
            'cardiac_enzymes' => 'Normal',
            'terpinen_T' => 'Normal',
            'CPK' => 'Normal',
            'sugar_level' => '5.5',
            'ventilator' => 'Yes',
            'ECG_monitor' => 'Yes',
            'capnograph' => 'Yes',
            'cervical_traction' => 'No',
            'incubator' => 'No',
            'hot_box' => 'No',
            'other' => 'None',
            'time_mobile' => now()->format('H:i:s'),
            'ETD' => now()->addMinutes(15)->format('H:i:s'),
            'arrive_refuel' => now()->addMinutes(30)->format('H:i:s'),
            'place' => 'Base',
            'depart_refuel' => now()->addMinutes(45)->format('H:i:s'),
            'ETA_toScene' => now()->addHours(1)->format('H:i:s'),
            'arrive_scene' => now()->addHours(1)->addMinutes(15)->format('H:i:s'),
            'scenePerson_informed' => 'Dr. Smith',
            'depart_scene' => now()->addHours(1)->addMinutes(30)->format('H:i:s'),
            'ETA_toDestination' => now()->addHours(2)->format('H:i:s'),
            'arrive_destination' => now()->addHours(2)->addMinutes(15)->format('H:i:s'),
            'destPerson_informed' => 'Dr. Wilson',
            'depart_destination' => now()->addHours(2)->addMinutes(30)->format('H:i:s'),
            'ETA_toBase' => now()->addHours(3)->format('H:i:s'),
            'arrive_base' => now()->addHours(3)->addMinutes(15)->format('H:i:s'),
            'total_airtime' => '03:15',
            'additional_info' => 'None',
            'status' => 'Pending',
            'caseType_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
