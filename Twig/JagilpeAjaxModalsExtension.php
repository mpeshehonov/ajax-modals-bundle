<?php

namespace Jagilpe\AjaxModalsBundle\Twig;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 *
 * @author Javier Gil Pereda <javier.gil@module-7.com>
 */
class JagilpeAjaxModalsExtension extends AbstractExtension
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'jagilpe_ajax_modals_bundle_extension';
    }

    /**
     * {@inheritDoc}
     */
    public function getFunctions()
    {
        $functions = [];
        $functions[] = new TwigFunction(
            'jgp_modal_container',
            [$this, 'renderModalContainer'],
            [
                'is_safe' => ['html'],
                'needs_environment' => true,
            ]
        );

        return $functions;
    }

    /**
     * Returns the html structure required by all the modal functionality
     *
     * @return string
     */
    public function renderModalContainer(Environment $environment, array $options = [])
    {
        return $environment->render('JagilpeAjaxModalsBundle:Modal:jgp_modal_dialog.html.twig', $options);
    }
}
