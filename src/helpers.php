<?php

if (!function_exists('str_replace_array')) {
    function str_replace_array(array $array, string $str)
    {
        foreach ($array as $search => $replacement) {
            $str = str_replace($search, $replacement, $str);
        }
        return $str;
    }
}

if (!function_exists('element')) {
    function element($tag): \Elemental\Element
    {
        return \Elemental\Factory::build($tag);
    }
}