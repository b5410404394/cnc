<?php

use Illuminate\Database\Seeder;

class ShowcaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('showcases')->delete();
    	
        DB::table('showcases')->insert([
            'title' => 'Astromega Rush',
            'desc' => 'This is endless running game. Main character is alien.
In game you should jump to increase speed to escape UFO behind you but when you jump battery will be consumed. Battery will regeneration when you run on the ground. You should avoid meteor because when you crashed meteor your speed will be decrease few seconds and consume you battery then the UFO behind you will move nearly you if the UFO above your head this game will over. You can found star in game you should collect star to upgrade your battery and shield (more battery level can increase regeneration rate and increase jump speed, more shield level can decrease battery consumed when crash meteor and decrease slow duration when crash meteor). You can found 2 item in game, The first is star-magnet(magnet star on you screen) & the second is twice-star(collect *2 star).',
            'picture' => 'images/astromega.png',
            'link' => 'https://www.google.co.th/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0CCAQFjAAahUKEwiXlZuS04fHAhUMCI4KHQV6Byk&url=http%3A%2F%2Fapps.microsoft.com%2Fwindows%2Fen-us%2Fapp%2Fastromega-rush%2Fc8508959-bf7d-4d6a-916d-3c72d308e395&ei=7Zu8VdfqJoyQuASF9J3IAg&usg=AFQjCNGLI1Dx-4JNQkxNoA7FqTL6hz65QQ&sig2=sK5q1J_hyjmU0Zhy91JU7A&bvm=bv.99261572,d.c2E'
        ]);
		
		DB::table('showcases')->insert([
			'title' => 'Bounce',
			'desc' => '“Bounce” is an interactive arcade game
presenting the new way of playing game by using hands
and gestures instead of mouse and keyboard. Bounce runs
on both Windows and Mac OS connected with Leap
Motion Controller, a motion sensing device. The main
character of the game is a hamster, bouncing around on
the screen. Scores are given, as the hamster eats sunflower
seeds. When all the seeds are eaten, the player will move
on to the next stage. What the player needs to do is to keep
the hamster bouncing using a paddle, controlled by left
hand gesture. Beneficial and detrimental items can be
grabbed and s wiped away by right hand gesture. Since
Bounce requires both left and right hand gesture, the
player must coordinate eyes with left and right hand
movements. We thus hope Bounce can entertain players as
well as help train multitasking skills.',
'picture' => 'images/bounce.jpg',
'link' => 'https://www.youtube.com/watch?v=uGQa1rHTZuY'
			]);
		
	
    }
}
