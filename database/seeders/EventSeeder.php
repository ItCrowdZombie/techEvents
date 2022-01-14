<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $event = Event::factory([
        'event_date'=> "2024-01-11 07:55:07",
        'img'=> "https://www.headsem.com/wp-content/uploads/2018/02/cursos-programaci%C3%B3n-para-juegos.jpg",
        'title'=> "Programación para juegos",
        'description'=> "Sumérgete en el fantabuloso mundo de los gamers en modo pro!!!",

        ])->create();

        $event10 = Event::factory([
            'event_date'=> "2025-01-11 07:55:07",
            'img'=> "https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/480/public/media/image/2016/02/150769-programacion-gratis-espanol.jpg?itok=YiDHV5TQ",
            'title'=> "Programación tomando un cafetito",
            'description'=> "Sumérgete en el maravilludo espacio de los cafeteros programadores!!!",
    
            ])->create();

        $event1 = Event::factory([
        'event_date'=> "2026-01-11 07:55:07",
        'img'=> "https://cursos.aiu.edu/images/maxresdefault.jpg",
        'title'=> "Programación JavaScript y mucho más!!!",
        'description'=> "Tranquilo, no es Java, sólo JavaSript!!!",

        ])->create();

        $event2 = Event::factory([
            'event_date'=> "2027-01-11 07:55:07",
            'img'=> "https://cursosonlinegratis.co/wp-content/uploads/2019/03/cursos-gratis-de-programacion.jpg",
            'title'=> "Programación JAVA",
            'description'=> "Tranquilo, no es JavaScript, sólo JAVA!!!!!",
    
            ])->create();

        $event3 = Event::factory([
        'event_date'=> "2028-01-11 07:55:07",
        'img'=> "https://escuela.it/storage/course_images_thumbnail/thumbnail-imagencurso-iniciacion-programacion-js-php-68.jpg",
        'title'=> "Programación FULL-STACK",
        'description'=> "No lo dudes, este es tu curso!!!",

        ])->create();


        $event4 = Event::factory([
            'event_date'=> "2029-01-11 07:55:07",
            'img'=> "https://i.blogs.es/62f583/python/1366_2000.jpg",
            'title'=> "Aprende Python",
            'description'=> "No es tan peligroso como una pitón, anímate!!!",
    
            ])->create();

        $event5 = Event::factory([
        'event_date'=> "2020-01-11 07:55:07",
        'img'=> "https://www.aprenderaprogramar.com/images/stories/Empresas/RM001/RM00107G_1_cursos_programacion.jpg",
        'title'=> "Programación vintage",
        'description'=> "¿¿¿Te acuerdas de LOGO??? Ven y disfrútalo!!!",

        ])->create();

        $event6 = Event::factory([
            'event_date'=> "2021-01-11 07:55:07",
            'img'=> "https://www.mentedidactica.com/wp-content/uploads/2021/03/10-mejores-cursos-gratis-de-programacion-de-2021-1.jpg",
            'title'=> "Curso inicial para developer total!!!",
            'description'=> "Explora nuestro entorno, te sorprenderás!!!",
    
            ])->create();

        $event7 = Event::factory([
        'event_date'=> "2021-03-11 07:55:07",
        'img'=> "https://prod-discovery.edx-cdn.org/media/course/image/e19bbbca-45b0-424a-8d7b-51ae956a9b0c-d6be5488e17d.small.jpg",
        'title'=> "Programación Matemática",
        'description'=> "Mate...qué??? ... aprende a sumar 2+2 en lenguaje binario!!!",

        ])->create();

        

        
    }


}
