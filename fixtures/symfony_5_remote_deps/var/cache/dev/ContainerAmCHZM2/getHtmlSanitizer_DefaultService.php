<?php

namespace ContainerAmCHZM2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHtmlSanitizer_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'html_sanitizer.default' shared service.
     *
     * @return \HtmlSanitizer\SanitizerInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/SanitizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/SanitizerBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/SanitizerBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Basic/BasicExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Code/CodeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Image/ImageExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Iframe/IframeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Listing/ListExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Table/TableExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer/src/Extension/Extra/ExtraExtension.php';

        $a = new \HtmlSanitizer\SanitizerBuilder();

        $b = new \Symfony\Bridge\Monolog\Logger('html-sanitizer');
        $b->pushProcessor(($container->privates['debug.log_processor'] ?? $container->getDebug_LogProcessorService()));
        $b->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $b->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setLogger($b);
        $a->registerExtension(new \HtmlSanitizer\Extension\Basic\BasicExtension());
        $a->registerExtension(new \HtmlSanitizer\Extension\Code\CodeExtension());
        $a->registerExtension(new \HtmlSanitizer\Extension\Image\ImageExtension());
        $a->registerExtension(new \HtmlSanitizer\Extension\Iframe\IframeExtension());
        $a->registerExtension(new \HtmlSanitizer\Extension\Listing\ListExtension());
        $a->registerExtension(new \HtmlSanitizer\Extension\Table\TableExtension());
        $a->registerExtension(new \HtmlSanitizer\Extension\Extra\ExtraExtension());

        return $container->privates['html_sanitizer.default'] = $a->build(['extensions' => [0 => 'basic', 1 => 'list', 2 => 'table', 3 => 'image', 4 => 'code']]);
    }
}
