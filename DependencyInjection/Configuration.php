<?php

namespace Eo\PassbookBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('eo_passbook');

        $rootNode
            ->children()
                ->scalarNode('pass_type_identifier')->end()
                ->scalarNode('team_identifier')->end()
                ->scalarNode('organization_name')->end()
                ->scalarNode('p12_certificate')->end()
                ->scalarNode('p12_certificate_password')->end()
                ->scalarNode('wwdr_certificate')->end()
                ->scalarNode('output_path')->end()
        ;

        return $treeBuilder;
    }
}
