<?php

use Illuminate\Database\Seeder;

class semilla extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'    => 'Juan Jose Gonzalez',
        //     'email' => 'juanjoelmono31@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);

        DB::table('blog')->insert([
            'id_usuario'    => '1',
            'titulo_blog' => 'Animatec',
            'contenido_blog' => 'Anime, ​ también escrito como ánime y animé en español, ​ es un término que engloba a la animación tradicional o por computadora de procedencia japonesa',
        ]);
    }
}
