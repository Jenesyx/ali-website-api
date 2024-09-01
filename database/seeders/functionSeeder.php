<?php

namespace Database\Seeders;

use App\Models\Functions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class functionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name"=>'URL/URI (Iphone / Android) | Populer',
                "description"=> "This feature allows you to program the RFID card to direct a smartphone to open a specific URL or URI when scanned. This can be a webpage, an online video, a social media profile, or any web-based resource. It's incredibly versatile, serving various purposes from marketing, information sharing, to interactive experiences."
            ],
            [
                "name" => 'Social networks (Iphone / Android)',
                'description' => 'Link directly to social media profiles or pages, making it easy for others to follow, like, or interact with your social media presence with just a scan.'
            ],
            [
                'name' => 'Search on Google (Iphone / Android)',
                'description' => 'Initiates a Google search or directs to specific results, helping share specific information or promote online content efficiently.',
            ],
            [
                'name' => 'Mail (Iphone / Android)',
                'description'=>'Automates the process of sending an email by pre-filling the recipient\'s address, subject, and even the body of the email.'
            ],
            [
                'name' => 'Contact[Phone, Website and ...] (Android)',
                'description'=> 'Instantly shares contact information, such as name, phone numbers, and websites, which can be saved directly into the phone\'s contact list.'
            ],
            [
                'name' => 'Phone Number (Iphone / Android)',
                'description'=> 'Enables a quick call function to a specified phone number, facilitating immediate voice communication.'
            ],
            [
                'name' => 'SMS (Iphone / Android)',
                'description'=> 'Automatically populates an SMS\'s recipient and content, ready to send, simplifying the process of sending predefined messages.'
            ],
            [
                'name' => 'FaceTime (Iphone)',
                'description'=> 'Starts a FaceTime video call with a predetermined Apple ID, offering a quick way to initiate visual communication.'
            ],
            [
                'name' => 'FaceTime Audio (Iphone)',
                'description'=> 'Similar to FaceTime video, but initiates an audio-only call, providing a direct line for voice chats via Apple\'s FaceTime Audio service.'
            ],
            [
                'name' => 'Location (Iphone / Android)',
                'description'=>  'Directs users to a specific geographical location, useful for events, business locations, or meeting points.'
            ],
            [
                'name' => 'Address (Iphone / Android)',
                'description'=>  'Shares physical or postal address details, making it easier for people to find a place or send mail.'
            ],
            [
                'name' => 'Bitcoin Address (Iphone / Android)',
                'description'=>  'Shares a Bitcoin wallet address for quick and easy transactions, facilitating cryptocurrency exchanges.'
            ],
            [
                'name' => 'Wi-Fi Connection (Android)',
                'description'=>  'Automatically connects to a specified Wi-Fi network, bypassing the need to manually enter passwords and network details.'
            ],

        ];

        foreach ($data as $key=>$item)
        {
            Functions::upsert([
                'id' => $key + 1,
                'name' => $item['name'],
                'description' => $item["description"]
            ],['id' ,'name', 'description']);
        }
    }
}
