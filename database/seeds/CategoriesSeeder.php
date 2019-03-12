<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {


            $categoryExport = app('rinvex.categories.category')->create([
                'name' => [
                    'en' => 'Export',
                ],

                'children' => [
                    [
                        'name' => 'Habillement / Mode',

                        'children' => [
                            ['name' => 'Bijous / accessoires'],
                            ['name' => 'Cuir'],
                            ['name' => 'Habillement enfant / femme'],
                            ['name' => 'Lingerie'],
                            ['name' => 'Marquinerie'],
                        ],
                    ],
                    [
                        'name' => "Bien d'equipements",

                        'children' => [
                            ['name' => 'Décoration'],
                            ['name' => 'High-Tech'],
                            ['name' => 'Meubles'],
                            ['name' => 'Télephonie '],
                        ],
                    ],
                    [
                        'name' => "Alimentaire",

                        'children' => [
                            ['name' => 'Légumes / Fruit'],
                            ['name' => 'Viandes'],

                        ],
                    ],
                ],
            ]);

        $categoryArtisanat = app('rinvex.categories.category')->create([
            'name' => [
                'en' => 'Artisanat',
            ],

            'children' => [
                [
                    'name' => 'ACCESSOIRES ET SENTEUR',
                ],
                [
                    'name' => 'ACCESSORIES AND FRAGRANCE',
                ],
                [
                    'name' => "DÉCORATION D'INTERIEUR / D'EXTERIEUR",
                    ],
                [

                    'name' => 'HABIT TRADITIONNEL TUNISIENS',
],
[
    'name' => 'MATIÈRES PREMIÈRES',
],
[
    'name' => "METIERS DE L'ARGILE ET DE LA PIERRE",
],
[
	'name' => 'METIERS DU BOIS',
],
[
	'name' => 'METIERS DES METAUX',
],
[
	'name' => 'METIERS DU TISSAGE, TAPIS , MARGOUM TUNISIEN',
],
[
	'name' => 'METIERS DU CUIR ET DE LA CHAUSSURE',
],
            ],
        ]);
            /*
            $categoryServices = app('rinvex.categories.category')->create([
                'name' => [
                    'en' => 'Services',
                ],

                'children' => [
                    [
                        'name' => 'Financement',
                    ],
                    [
                        'name' => "Accompagnement ",
                    ],
                    [
                        'name' => "Creation des entreprises",
                    ],
                    [
                        'name' => "Coaching",
                    ],
                    [
                        'name' => "Coaching",
                    ],
                ],
            ]);
            $categoryServicesInformatiques = app('rinvex.categories.category')->create([
                'name' => [
                    'en' => 'Services Informatiques',
                ],

                'children' => [
                    [
                        'name' => 'Création des sites web',
                    ],
                    [
                        'name' => "Création des applications mobiles ",
                    ],
                    [
                        'name' => "Accompagnement numerique",
                    ],
                    [
                        'name' => "Coaching",
                    ],
                    [
                        'name' => "Coaching",
                    ],
                ],
            ]);

            */
        }

}
