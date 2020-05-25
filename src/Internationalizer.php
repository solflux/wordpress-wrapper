<?php

namespace Wordpress;

use function _x;

class Internationalizer
{

    private $domain;

    /**
     * Internationalizer constructor.
     *
     * @param $domain
     */
    public function __construct($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @param string $text
     * @param string $context
     *
     * @return string|void
     */
    public function translateWithContext(string $text, string $context)
    {
        return _x($text, $context, $this->domain);
    }

    /**
     * @param string $text
     *
     * @return string|void
     */
    public function translate(string $text)
    {
        return __($text, $this->domain);
    }
}