<?php

namespace TeletengaBundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class TeletengaBundle
 * @package TeletengaBundle
 */
class TeletengaBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass($this->buildMappingCompilerPass());
    }

    public function buildMappingCompilerPass()
    {
        return DoctrineOrmMappingsPass::createYamlMappingDriver(
            [__DIR__ . '/Infrastructure/Persistence/Doctrine' => 'Domain\Entity\Model'],
            [],
            false,
            ['TeletengaBundle' => 'Domain\Entity\Model']
        );
    }
}
