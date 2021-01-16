<?php

namespace ContainerFKvzxce;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_GdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.gd' shared service.
     *
     * @return \Imagine\Gd\Imagine
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ClassFactoryAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'ImagineInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'AbstractImagine.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Gd'.\DIRECTORY_SEPARATOR.'Imagine.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'MetadataReaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'AbstractMetadataReader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'imagine'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'ExifMetadataReader.php';

        $container->privates['liip_imagine.gd'] = $instance = new \Imagine\Gd\Imagine();

        $instance->setMetadataReader(new \Imagine\Image\Metadata\ExifMetadataReader());

        return $instance;
    }
}
