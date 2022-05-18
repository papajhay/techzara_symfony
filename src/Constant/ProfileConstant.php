<?php

namespace App\Constant;



class ProfileConstant
{
    public const MY_PROFILE = [
        'name' => 'RAKOTO',
        'prenom' => 'RASOA',
        'dateDeNaissance' => '23/12/2025',
        'age' => 22,
        'parents' => [
            'pere' => [
                'nom' => 'RABE',
                'prenom' => 'KOTO'
            ],
            'mere' => [
                'nom' => 'RASOA',
                'prenom' => 'ZANANY'
            ],
        ],
        'etudes' => [
            [
                'etablissement' => 'VONTOVORONA',
                'diplome' => 'Licence en Inforamtique'
            ],
             [
                'etablissement' => 'ANKATSO',
                'diplome' => 'Master en mathématique'
            ],
        ],
        'experiences' => [
            [
                'societe' => 'Techzara',
                'poste' => 'Informaticien'
            ],
             [
                'societe' => 'Novity',
                'poste' => 'Dev Web'
            ],
        ]
        ];

    public const NUMBER_TO_FLAT = [
          1,
          [
         2,3,4,5,6,7,8
          ],
          [9],
          10,
          [11,
          [
              12,13
          ],
          [14,15],
          16,
          [17,18]]
        ];
}
     




