<?php namespace Wirelab\KintPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Twig_Environment;
use Twig_NodeVisitorInterface;
use Kint;

class KintPlugin extends Plugin
{
    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array An array of filters
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter( 'd',   function ($p) {return d($p);},['is_safe' => ['html']]),
            new \Twig_SimpleFilter( 'ddd', function ($p) {return ddd($p);},['is_safe' => ['html']]),
            new \Twig_SimpleFilter( 's',   function ($p) {return s($p);},['is_safe' => ['html']]),
            new \Twig_SimpleFilter( 'sd',  function ($p) {return sd($p);},['is_safe' => ['html']]),
        ];
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction( 'd',   function ($p, $return = false) {return $return ? @d($p) : d($p);},['is_safe' => ['html']]),
            new \Twig_SimpleFunction( 'ddd', function ($p, $return = false) {return $return ? @ddd($p) : ddd($p);},['is_safe' => ['html']]),
            new \Twig_SimpleFunction( 's',   function ($p, $return = false) {return $return ? @s($p) : s($p);},['is_safe' => ['html']]),
            new \Twig_SimpleFunction( 'sd',  function ($p, $return = false) {return $return ? @sd($p) : sd($p);},['is_safe' => ['html']]),
        ];
    }

}
