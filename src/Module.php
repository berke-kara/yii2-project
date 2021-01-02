<?php
namespace berkekaraa\project;

class Module extends \yii\base\Module{

    public function init()
    {


        $berke = $this->db->dsn;
        print($berke);
        exit;
        parent::init();

    }
}