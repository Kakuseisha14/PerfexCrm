<?php

namespace app\services\messages;

defined('BASEPATH') or exit('No direct script access allowed');

use app\services\messages\AbstractMessage;

class DevelopmentEnvironment extends AbstractMessage
{
    protected $alertClass = 'warning';

    public function isVisible()
    {
        return ENVIRONMENT != 'production' && is_admin();
    }

    public function getMessage()
    {
        $html = '';
        $html .= '<h4>Environment set to ' . ENVIRONMENT . '!</h4><p></p>Don\'t forget to set back to <b>production</b> in the main <b>index.php</b> file after finishing your tests or development.</p>';
        $html .= '<p></p>Please be aware that in ' . ENVIRONMENT . ' mode <b>you may see some errors and deprecation warnings</b>, for this reason, it\'s always recommended to set the environment to "<b>production</b>" if you are not actually developing some features/modules or trying to test some code.</p>';

        return $html;
    }
}