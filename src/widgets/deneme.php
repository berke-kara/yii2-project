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
      print_r("berke");
      $x=$this->baslik[0];
      $y=$this->baslik[1];
      $z=$this->baslik[2];
      $berke=$this->model;

       $html = "<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2></h2>

<table>
  <tr>
    <th>a</th>
    <th>b</th>
    <th>c</th>
    
           
    </tr>
    <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  
  
  
  
</table>

</body>
</html>";
       return $html;
    }
}
