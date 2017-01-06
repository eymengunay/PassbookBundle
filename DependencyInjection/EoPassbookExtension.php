<?php

namespace Eo\PassbookBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class EoPassbookExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setParameter('eo_passbook.pass_type_identifier', $config['pass_type_identifier']);
        $container->setParameter('eo_passbook.team_identifier', $config['team_identifier']);
        $container->setParameter('eo_passbook.organization_name', $config['organization_name']);
        $container->setParameter('eo_passbook.p12_certificate', $config['p12_certificate']);
        $container->setParameter('eo_passbook.p12_certificate_password', $config['p12_certificate_password']);
        $container->setParameter('eo_passbook.wwdr_certificate', $config['wwdr_certificate']);
        $container->setParameter('eo_passbook.output_path', $config['output_path']);
        $container->setParameter('eo_passbook.icon_file', $config['icon_file']);
    }
}
