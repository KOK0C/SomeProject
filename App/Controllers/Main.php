<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 19.10.2017
 * Time: 17:46
 */

namespace App\Controllers;

use App\View;

class Main extends \App\Controller
{
    protected $mainPage;

    public function __construct()
    {
        parent::__construct();
        $this->mainPage = new View('/App/templates/main_page.phtml');
    }

    public function actionIndex()
    {
        $this->mainPage->news = \App\Models\Article::findAll();
        View::display([$this->header, $this->mainPage, $this->sideBar, $this->footer]);
    }
}