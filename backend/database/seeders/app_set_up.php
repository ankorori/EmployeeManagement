<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PCos;
use App\Models\Web_account_category;
use App\Models\Office;
use App\Models\department;
use App\Models\employee;
use App\Models\pc_account;
use App\Models\Web_browser;
use App\Models\Mailer;
use App\Models\AntivirusSoftware;

class app_set_up extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'てすとたろう',
            'email' => 'test@test.co.jp',
            'password' => '$2y$10$KTtt5eXAZkLJn/KpbcVVDuOY9F65XY4yU.qstTY.IszDYUwHDKRIC',
        ]);
        PCos::create([
            'id' => 1,
            'name' => 'Windows',
        ]);
        PCos::create([
            'id' => 2,
            'name' => 'Mac',
        ]);
        Web_account_category::create([
            'id' => 1,
            'name' => 'googleアカウント'
        ]);
        Web_account_category::create([
            'id' => 2,
            'name' => 'skypeアカウント(microsoft)'
        ]);
        Web_account_category::create([
            'id' => 3,
            'name' => 'slackアカウント'
        ]);
        Web_account_category::create([
            'id' => 4,
            'name' => 'adobeアカウント'
        ]);
        department::create([
            'id' => 1,
            'name' => 'WEBシステム課',
        ]);
        department::create([
            'id' => 2,
            'name' => '名古屋デザイン課',
        ]);
        department::create([
            'id' => 3,
            'name' => '金沢デザイン課',
        ]);
        department::create([
            'id' => 4,
            'name' => '管理課',
        ]);
        department::create([
            'id' => 5,
            'name' => '営業課',
        ]);
        Office::create([
            'id' => 1,
            'name' => '本社',
        ]);
        Office::create([
            'id' => 2,
            'name' => '名古屋',
        ]);
        Office::create([
            'id' => 3,
            'name' => '金沢',
        ]);
        employee::create([
            'id' => 1,
            'name' => 'web作成 市太郎',
            'department_id' => 1,
        ]);
        pc_account::create([
            'id' => 1,
            'employee_id' => 1,
            'password' => 'testpassword',
            'settingdate' => new \DateTime(),
            'account_name' => 'PCaccountTest',
        ]);
        web_browser::create([
            'id' => 1,
            'name' => 'Microsoft Edge',
        ]);
        web_browser::create([
            'id' => 2,
            'name' => 'Google Chrome',
        ]);
        web_browser::create([
            'id' => 3,
            'name' => 'Mozilla Fire fox',
        ]);
        Mailer::create([
            'id' => 1,
            'name' => 'Mozilla Thunderbird',
        ]);
        AntivirusSoftware::create([
            'id' => 1,
            'name' => 'Avast Antivirus',
        ]);
    }
}
