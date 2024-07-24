<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PokemonController extends AbstractController {

    #[Route('/pokemons', name: 'list_pokemons')]
    public function listPokemons()
    {

        $pokemons = [[
                'id' => 1,
                'title' => 'Carapuce',
                'content' => 'Pokemon eau',
                'isPublished' => true
            ],
            [
                'id' => 2,
                'title' => 'Salamèche',
                'content' => 'Pokemon feu',
                'isPublished' => true
            ],
            [
                'id' => 3,
                'title' => 'Bulbizarre',
                'content' => 'Pokemon plante',
                'isPublished' => true
            ],
            [
                'id' => 4,
                'title' => 'Pikachu',
                'content' => 'Pokemon electrique',
                'isPublished' => true
            ],
            [
                'id' => 5,
                'title' => 'Rattata',
                'content' => 'Pokemon normal',
                'isPublished' => false
            ],
            [
                'id' => 6,
                'title' => 'Roucool',
                'content' => 'Pokemon vol',
                'isPublished' => true
            ],
            [
                'id' => 7,
                'title' => 'Aspicot',
                'content' => 'Pokemon insecte',
                'isPublished' => false
            ],
            [
                'id' => 8,
                'title' => 'Nosferapti',
                'content' => 'Pokemon poison',
                'isPublished' => false
            ],
            [
                'id' => 9,
                'title' => 'Mewtwo',
                'content' => 'Pokemon psy',
                'isPublished' => true
            ],
            [
                'id' => 10,
                'title' => 'Ronflex',
                'content' => 'Pokemon normal',
                'isPublished' => false
            ]

        ];


        return $this->render('page/listArticles.html.twig', [
            'pokemons' => $pokemons
        ]);

    }


    #[Route('/pokemon-category', name: 'pokemon_category')]
    public function listPokemonCategories()
    {
        $categories = [
            'Red', 'Green', 'Blue', 'Yellow', 'Gold', 'Silver', 'Crystal'
        ];


        $html = $this->renderView('page/pokemonCategory.html.twig', [
            'categories' => $categories
        ]);

        return new Response($html, 200);
    }



#[Route('/pokemon-show', name: 'show_pokemon')]
    public function show_pokemon()
{
    $request = Request::createFromGlobals();
    $idPokemon = $request->query->get('id');

    $pokemons = [
        [
            'id' => 1,
            'title' => 'Carapuce',
            'content' => 'Pokemon eau',
            'isPublished' => true
        ],
        [
            'id' => 2,
            'title' => 'Salamèche',
            'content' => 'Pokemon feu',
            'isPublished' => true
        ],
        [
            'id' => 3,
            'title' => 'Bulbizarre',
            'content' => 'Pokemon plante',
            'isPublished' => true
        ],
        [
            'id' => 4,
            'title' => 'Pikachu',
            'content' => 'Pokemon electrique',
            'isPublished' => true
        ],
        [
            'id' => 5,
            'title' => 'Rattata',
            'content' => 'Pokemon normal',
            'isPublished' => false
        ],
        [
            'id' => 6,
            'title' => 'Roucool',
            'content' => 'Pokemon vol',
            'isPublished' => true
        ],
        [
            'id' => 7,
            'title' => 'Aspicot',
            'content' => 'Pokemon insecte',
            'isPublished' => false
        ],
        [
            'id' => 8,
            'title' => 'Nosferapti',
            'content' => 'Pokemon poison',
            'isPublished' => false
        ],
        [
            'id' => 9,
            'title' => 'Mewtwo',
            'content' => 'Pokemon psy',
            'isPublished' => true
        ],
        [
            'id' => 10,
            'title' => 'Ronflex',
            'content' => 'Pokemon normal',
            'isPublished' => false
        ]

    ];

    $pokemonFound = null;

    foreach ($pokemons as $pokemon) {
        if($pokemon['id'] === (int)$idPokemon) {
            $pokemonFound = $pokemon;
        }
    }

    return $this->render('page/pokemon_show.html.twig', [
        'pokemon' => $pokemonFound
    ]);

}

}







