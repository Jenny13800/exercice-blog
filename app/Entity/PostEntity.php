<?php

namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity {

    /**
     * renvoie l'url
     * @return string
     */
    public function getUrl(){
        return 'index.php?p=posts.show&id=' . $this->id;
    }

    /**
     * renvoie un extrait
     * @return string
     */
    public function getExtrait(){
        $html = '<p>' . substr($this->contenu,0, 300) . '...</p>';
        $html .= '<p><a href="' . $this->getURL(). '">Voir la suite</a></p>';
        return $html;
    }

}