<?php
/**
 * Statik plugin for Craft CMS 3.x
 *
 * statik plugin
 *
 * @link      http://www.statik.be
 * @copyright Copyright (c) 2018 statik
 */

namespace statik\statik\variables;

use statik\statik\Statik;

use Craft;

/**
 * Statik Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.statik }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    statik
 * @package   Statik
 * @since     1.0.0
 */
class StatikVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.statik.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.statik.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
