<?php

namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class ShortcodeMufloneInstall extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('muflone-install', function(ShortcodeInterface $sc) {
            $output = $this->twig->processTemplate('partials/shortcode-muflone-install.html.twig', [
                'content' => $sc->getContent(),
                'type' => $sc->getParameter('type', ''),
                'name' => $sc->getParameter('name', ''),
                'package' => $sc->getParameter('package', ''),
                'github' => 'https://github.com/muflone/' . $sc->getParameter('package', '') . '/',
                'transifex' => 'https://www.transifex.com/projects/p/' . $sc->getParameter('package', '') . '/',
                'aurpackage' => $sc->getParameter('aurpackage', ''),
                'development' => $sc->getParameter('development', ''),
             ]);
            return $output;
        });
    }
}
