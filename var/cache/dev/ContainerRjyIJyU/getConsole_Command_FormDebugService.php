<?php

namespace ContainerRjyIJyU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Vich\\UploaderBundle\\Form\\Type', 4 => 'Liip\\ImagineBundle\\Form\\Type', 5 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type'], [0 => 'App\\Form\\ChangePasswordFormType', 1 => 'App\\Form\\ProjetSearchType', 2 => 'App\\Form\\ProjetType', 3 => 'App\\Form\\RegistrationType', 4 => 'App\\Form\\ResetPasswordRequestFormType', 5 => 'App\\Form\\SearchForm', 6 => 'App\\Form\\SoonFormType', 7 => 'App\\Form\\TagType', 8 => 'App\\Form\\UserInfosType', 9 => 'App\\Form\\UserResetPasswordType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 11 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 12 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 13 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 14 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 15 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 16 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType', 17 => 'Liip\\ImagineBundle\\Form\\Type\\ImageType', 18 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType', 19 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 20 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFiltersFormType', 21 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType', 22 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminBatchFormType', 23 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType', 24 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType', 25 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EasyAdminExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 2 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Guesser\\MissingDoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }
}