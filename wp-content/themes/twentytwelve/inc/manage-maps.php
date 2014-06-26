<?php
/**
 * Created by PhpStorm.
 * User: israel
 * Date: 22/06/14
 * Time: 16:49
 */

class Manage_Maps extends WP_Widget {
    public function Manage_Maps()
    {
          parent::WP_Widget(false, $name = 'Manage Maps');
    }

    public function widget($argumentos, $instancia) {
        echo "HTML aqui nessa porra";
    }
}

