<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 21.10.2017
 * Time: 15:47
 */

return [
    '^create/article$' => ['controller' => 'Admin\\CRUD\\Create', 'action' => 'article'],

    '^delete/article$' => ['controller' => 'Admin\\CRUD\\Delete', 'action' => 'article'],

    '^update/article$' => ['controller' => 'Admin\\CRUD\\Update', 'action' => 'article'],

    '^(admin)/articles/create$'   => ['controller' => 'Admin\\Article', 'action' => 'create'],
    '^(admin)/articles/update$'   => ['controller' => 'Admin\\Article', 'action' => 'update'],
    '^(admin)/articles/([a-z]+)$' => ['controller' => 'Admin\\Article', 'action' => 'category'],
    '^(admin)/articles$'          => ['controller' => 'Admin\\Article', 'action' => 'index'],

    '^(admin)/reviews/mark/([a-z-]+)/model/([a-z0-9-]+)$' => ['controller' => 'Admin\\Review', 'action' => 'model'],
    '^(admin)/reviews/mark/([a-z-]+)$'                    => ['controller' => 'Admin\\Review', 'action' => 'mark'],
    '^(admin)/reviews$'                                   => ['controller' => 'Admin\\Review', 'action' => 'index'],

    '^(admin)/cars/mark/([a-z-]+)$' => ['controller' => 'Admin\\Car',  'action' => 'mark'],
    '^(admin)/cars$'                => ['controller' => 'Admin\\Car',  'action' => 'index'],

    '^(admin)/users$' => ['controller' => 'Admin\\User', 'action' => 'index'],

    '^(admin)$' => ['controller' => 'Admin\\Main', 'action' => 'index'],

    '^search'                     => ['controller' => 'Main', 'action' => 'search'],

    '^forum/create/theme$'         => ['controller' => 'Forum', 'action' => 'createTheme'],
    '^(forum)/([a-z0-9-]+)/add$'   => ['controller' => 'Forum', 'action' => 'addTheme'],
    '^(forum)/theme/([a-z0-9-]+)$' => ['controller' => 'Forum', 'action' => 'theme'],
    '^forum/ajax/loadTheme$'       => ['controller' => 'Forum', 'action' => 'ajaxLoadTheme'],
    '^forum/ajax/loadComment$'     => ['controller' => 'Forum', 'action' => 'ajaxLoadComment'],
    '^forum/ajax/createComment$'   => ['controller' => 'Forum', 'action' => 'ajaxCreateComment'],
    '^(forum)/([a-z0-9-]+)$'       => ['controller' => 'Forum', 'action' => 'section'],
    '^(forum)$'                    => ['controller' => 'Forum', 'action' => 'index'],

    '^check/email$'        => ['controller' => 'Check', 'action' => 'email'],
    '^check/themeTitle$'   => ['controller' => 'Check', 'action' => 'themeTitle'],
    '^check/articleTitle$' => ['controller' => 'Check', 'action' => 'articleTitle'],
    '^check/phone$'        => ['controller' => 'Check', 'action' => 'phone'],

    '^review/create$'                               => ['controller' => 'Reviews', 'action' => 'create'],
    '^(reviews)/mark/([a-z-]+)/model/([a-z0-9-]+)$' => ['controller' => 'Reviews', 'action' => 'model'],
    '^(reviews)/mark/([a-z-]+)$'                    => ['controller' => 'Reviews', 'action' => 'mark'],
    '^(reviews)$'                                   => ['controller' => 'Reviews', 'action' => 'index'],

    '^(user)/profile$'         => ['controller' => 'User', 'action' => 'profile'],
    '^(user)/change_password$' => ['controller' => 'User', 'action' => 'changePassword'],
    '^(user)$'                 => ['controller' => 'User', 'action' => 'personalArea'],

    '^signup$' => ['controller' => 'User', 'action' => 'signUp'],
    '^login$'  => ['controller' => 'User', 'action' => 'logIn'],
    '^logout$' => ['controller' => 'User', 'action' => 'logOut'],

    '^mark/ajax/loadNews$'          => ['controller' => 'Cars', 'action' => 'showNews'],
    '^mark/([a-z-]+)/([a-z0-9-]+)$' => ['controller' => 'Cars', 'action' => 'oneModel'],
    '^mark/([a-z-]+)$'              => ['controller' => 'Cars', 'action' => 'oneMark'],

    '^(news)/page-([0-9]+)$'         => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(overviews)/page-([0-9]+)$'    => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(technologies)/page-([0-9]+)$' => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(tuning)/page-([0-9]+)$'       => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(useful)/page-([0-9]+)$'       => ['controller' => 'Main', 'action' => 'oneCategory'],

    '^(news)/([a-z0-9-]+)$'         => ['controller' => 'Main', 'action' => 'oneArticle'],
    '^(overviews)/([a-z0-9-]+)$'    => ['controller' => 'Main', 'action' => 'oneArticle'],
    '^(technologies)/([a-z0-9-]+)$' => ['controller' => 'Main', 'action' => 'oneArticle'],
    '^(tuning)/([a-z0-9-]+)$'       => ['controller' => 'Main', 'action' => 'oneArticle'],
    '^(useful)/([a-z0-9-]+)$'       => ['controller' => 'Main', 'action' => 'oneArticle'],

    '^(news)$'         => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(overviews)$'    => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(technologies)$' => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(tuning)$'       => ['controller' => 'Main', 'action' => 'oneCategory'],
    '^(useful)$'       => ['controller' => 'Main', 'action' => 'oneCategory'],

    '^$'               => ['controller' => 'Main', 'action' => 'index']
];