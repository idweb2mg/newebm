<?php

return  [

      'pannels' => [
          [
              'color' => 'primary',
              'icon' => 'envelope',
              'model' => \App\Models\frmatrice::class,
              'name' => 'back/admin.new-messages',
              'url' => 'contact',
              'total' => 'back/admin.frmatrice',
          ],
          [
              'color' => 'green',
              'icon' => 'user',
              'model' => \App\Models\User::class,
              'name' => 'back/admin.new-registers',
              'url' => 'user/sort',
              'total' => 'back/admin.users',
          ],
          [
              'color' => 'yellow',
              'icon' => 'pencil',
              'model' => \App\FRProjet::class,
              'name' => 'back/admin.new-posts',
              'url' => 'blog',
              'total' => 'back/admin.projets',
          ],

      ],
  ];
