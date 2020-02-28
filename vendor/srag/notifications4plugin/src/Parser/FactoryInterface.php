<?php

namespace srag\Notifications4Plugin\AutoDeactivation\Parser;

/**
 * Interface FactoryInterface
 *
 * @package srag\Notifications4Plugin\AutoDeactivation\Parser
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface FactoryInterface
{

    /**
     * @return twigParser
     */
    public function twig() : twigParser;
}
