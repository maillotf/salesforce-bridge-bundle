<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package MaillotF\Salesforce\SalesforceBridgeBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();
        $root = $builder->root('salesforce');

        $root->addDefaultsIfNotSet()
            ->children()
                ->arrayNode('authentication')
                    ->isRequired()
                    ->children()
                        ->scalarNode('endpoint')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('client_id')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('client_secret')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('username')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('password')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('security_token')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('rest')
                    ->isRequired()
                    ->children()
                        ->scalarNode('endpoint')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->scalarNode('version')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
        return $builder;
    }
}
