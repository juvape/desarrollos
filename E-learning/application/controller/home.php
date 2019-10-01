<?php


class Home extends Controller
{
  private $model;


    public function __construct()
    {
      $this->model = $this->LoadModel('myModel');
    }

  public function index()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/index.php';
    require APP . 'view/_templates/footer.php';
  }

  public function index2()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/index2.php';
    require APP . 'view/_templates/footer.php';
  }
}
