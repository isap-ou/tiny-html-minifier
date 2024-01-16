<?php

namespace Jenstornell\Minifier;

class TinyMinify
{
    public static function html(string $html, array $options = []) : string
    {
        return (new TinyHtmlMinifier($options))->minify($html);
    }
}
