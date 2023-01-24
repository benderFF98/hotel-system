<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassportSeeder extends Seeder
{
    public function run()
    {
        DB::table('oauth_clients')->where('id', '984bcf8e-bd19-454d-900d-28c35c04279f')->updateOrInsert([
            'id' => '984bcf8e-bd19-454d-900d-28c35c04279f',
            'name' => 'Laravel Password Grant Client',
            'secret' => 'foU3XAvKqReQX60JXpmVZ4aWG2HJqT3X4gFjJyQ0',
//            'provider' => 'users',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
        ]);

        DB::table('oauth_clients')->where('id', '984bcf8e-c0e9-412e-a2b2-39b729df94cb')->updateOrInsert([
            'id' => '984bcf8e-c0e9-412e-a2b2-39b729df94cb',
            'name' => 'Laravel Password Grant Client',
            'secret' => 'mAodgxZ47S7Q0AsHKRnKIOtmgH5qVbfha2V5EiG3',
            'provider' => 'users',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
        ]);
    }
}
