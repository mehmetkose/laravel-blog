<?php

use App\Article;
use App\Profile;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

use App\Permission;
use App\Role;
use App\User;

class ConstantsTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {

        $faker = Faker::create('en_US');

        /*
         * Base User Accounts
         */
        // Mike's account
        $michael = User::create([
            'name'       => 'Michael Norris',
            'email'      => 'mstnorris@gmail.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $michaelProfile = Profile::create([
            'user_id' => $michael->id,
            'facebook_username' => 'mstnorris',
            'twitter_username' => 'mstnorris',
            'instagram_username' => 'mstnorris'
        ]);

        $michael->profile()->save($michaelProfile);

        // Sezer's account
        $sezer = User::create([
            'name'       => 'Sezer Tunca',
            'email'      => 'sezertunca@gmail.com',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $sezerProfile = Profile::create([
            'user_id' => $sezer->id,
            'facebook_username' => 'sezertunca',
            'twitter_username' => 'sezertunca',
            'instagram_username' => 'sezertunca'
        ]);

        $sezer->profile()->save($sezerProfile);

        // Holly's account
        $holly = User::create([
            'name'       => 'Holly McNicol',
            'email'      => 'holly.mcnicol@live.co.uk',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $hollyProfile = Profile::create([
            'user_id' => $holly->id,
            'facebook_username' => 'hjm',
            'twitter_username' => 'hjm',
            'instagram_username' => 'hjm'
        ]);

        $holly->profile()->save($hollyProfile);

        // Super Administrator (User)
        $superU = User::create([
            'name'       => 'Super Administrator',
            'email'      => 'super@laravel-ums.dev',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $superUProfile = Profile::create([
            'user_id' => $superU->id,
            'facebook_username' => 'superadmin',
            'twitter_username' => 'superadmin',
            'instagram_username' => 'superadmin'
        ]);

        $superU->profile()->save($superUProfile);

        // Administrator (User)
        $adminU = User::create([
            'name'       => 'Administrator',
            'email'      => 'admin@laravel-ums.dev',
            'password'   => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $adminUProfile = Profile::create([
            'user_id' => $adminU->id,
            'facebook_username' => 'admin',
            'twitter_username' => 'admin',
            'instagram_username' => 'admin'
        ]);

        $adminU->profile()->save($adminUProfile);

        /*
         * Roles
         */
        // Super Administrator (Role)
        $superR = Role::create([
            'name'       => 'Super Administrator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Administrator (Role)
        $adminR = Role::create([
            'name'       => 'Administrator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // User (Role)
        $basicUserR = Role::create([
            'name'      => 'Basic User',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Permissions
         */

        // Super Administrator (Permission)
        $superP = Permission::create([
            'name'       => 'Super Administrator (Permission)',
            'level'      => '1000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Administrator (Permission)
        $adminP = Permission::create([
            'name'       => 'Administrator (Permission)',
            'level'      => '500',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 200 (Permission)
        $p200 = Permission::create([
            'name'       => 'Level 200 (Permission)',
            'level'      => '200',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 100 (Permission)
        $p100 = Permission::create([
            'name'       => 'Level 100 (Permission)',
            'level'      => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 50 (Permission)
        Permission::create([
            'name'       => 'Level 50 (Permission)',
            'level'      => '50',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 20 (Permission)
        Permission::create([
            'name'       => 'Level 20 (Permission)',
            'level'      => '20',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 10 (Permission)
        Permission::create([
            'name'       => 'Level 10 (Permission)',
            'level'      => '10',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 5 (Permission)
        Permission::create([
            'name'       => 'Level 5 (Permission)',
            'level'      => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 2 (Permission)
        Permission::create([
            'name'       => 'Level 2 (Permission)',
            'level'      => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 1 (Permission)
        Permission::create([
            'name'       => 'Level 1 (Permission)',
            'level'      => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Level 0 (Permission)
        Permission::create([
            'name'       => 'Level 0 (Permission)',
            'level'      => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Can create a new Article
        Permission::create([
            'name'       => 'create an article',
            'level'      => '10',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Detailed User Accounts with Roles and Permissions
         */

        $superU->roles()->attach($superR);

        $adminU->roles()->attach($adminR);

        $superR->permissions()->attach($superP);

        $adminR->permissions()->attach($adminP);

        $michael->roles()->attach($superR);

        factory(User::class, 50)
            ->create()
            ->each(function($u) use ($basicUserR) {
                $u->roles()->attach($basicUserR);
                $u->profile()->save(factory(Profile::class)->create());
        });


        factory(Article::class, 50)->create();

    }
}
