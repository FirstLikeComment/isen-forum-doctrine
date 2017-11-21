<?php
namespace Isen\Controller;

abstract class AbstractController
{

    public function render($template, $variables)
    {
        // expose les variables dans le tableau dans le scope local
        extract($variables);
        
        // détermine le chemin des templates
        $directory = dirname(__FILE__) . '/../../../resources/view/';
        
        // appelle le template
        require $directory . $template;
    }
}