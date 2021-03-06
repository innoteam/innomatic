<?php
/**
 * Innomatic
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.
 *
 * @copyright  1999-2014 Innoteam Srl
 * @license    http://www.innomatic.io/license/ New BSD License
 * @link       http://www.innomatic.io
 * @since      Class available since Release 5.0
 */
namespace Shared\Wui;

/**
 * @package WUI
 */
class WuiEmpty extends \Innomatic\Wui\Widgets\WuiContainerWidget
{
    public function __construct (
        $elemName,
        $elemArgs = '',
        $elemTheme = '',
        $dispEvents = ''
    )
    {
        parent::__construct(
            $elemName, $elemArgs, $elemTheme, $dispEvents
        );
    }
    protected function generateSourceBegin()
    {
        return ($this->mComments ? '<!-- begin ' . $this->mName
            . " empty container -->\n" : '');
    }
    protected function generateSourceEnd()
    {
        return ($this->mComments ? '<!-- end ' . $this->mName
            . " empty container -->\n" : '');
    }
}
