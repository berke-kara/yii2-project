<?php
namespace berkekaraa\project\widgets;

use yii\helpers\Html;
use yii\base\Widget;


class deneme extends Widget
{
    public $model;
    public $baslik;
    public function init()
    {
        parent::init();
    }

    public function run()
    {

      $x=$this->baslik[0];
      $y=$this->baslik[1];
      $z=$this->baslik[2];
      $berke=$this->model;

       $html  ='
       
       <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
 
  overflow: hidden;
  background-color: #4876ff;
}

.topnav a {

  float: right;
  color: #f2f2f2;
 font-size: 17px;
  padding: 14px 16px;
  margin-right: 15px;
  
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
 
  background-color: #23527c;
  color: white;
  
}
#home{
float:left;

}
</style>
</head>
<body>

<div class="topnav" style="text-align: right">
 <a id="home" href=index.php?r=project/urun>Ana Sayfa</a>
  <a href="index.php?r=project/urun">Urun</a>
  <a href="index.php?r=project/depo">Depo</a>
  <a href="index.php?r=project/satis">Siparis Gecmisi</a>
</div>


</body>
</html>
';

        return $html;
    }
}
