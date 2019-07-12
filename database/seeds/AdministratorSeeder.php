<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $administrator = new \App\User;
        $administrator->username = "admin";
        $administrator->name = "Site Administrator";
        $administrator->email = "admin@admin.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("admin");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
