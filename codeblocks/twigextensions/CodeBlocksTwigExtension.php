<?php

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class CodeBlocksTwigExtension extends Twig_Extension
{
    public function getName()
    {
        return 'codeblocks';
    }

    public function getFilters()
    {
        return array(
            'parse_twig' => new Twig_Filter_Method($this, 'parseTwigFilter'),
        );
    }

    /**
     * The "parse_twig" filter parses Twig code so you don't have to pass the content
     * through the {% include template_from_string() %} function in your templates.
     *
     * Usage: {{ entry.codeBlocksFieldHandle | parse_twig }}
     */
    public function parseTwigFilter($content)
    {
        return craft()->templates->renderString($content);
    }
}
