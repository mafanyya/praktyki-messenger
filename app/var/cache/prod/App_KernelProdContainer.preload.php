<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelProdContainer.php')->set(\ContainerVmcXTR7\App_KernelProdContainer::class, null);
require __DIR__.'/ContainerVmcXTR7/EntityManager_9a5be93.php';
require __DIR__.'/ContainerVmcXTR7/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerVmcXTR7/getValidator_ExpressionService.php';
require __DIR__.'/ContainerVmcXTR7/getValidator_EmailService.php';
require __DIR__.'/ContainerVmcXTR7/getValidator_BuilderService.php';
require __DIR__.'/ContainerVmcXTR7/getValidatorService.php';
require __DIR__.'/ContainerVmcXTR7/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerVmcXTR7/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerVmcXTR7/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerVmcXTR7/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerVmcXTR7/getTwigService.php';
require __DIR__.'/ContainerVmcXTR7/getSession_FactoryService.php';
require __DIR__.'/ContainerVmcXTR7/getServicesResetterService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_AuthorizationCheckerService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Authenticator_FormLogin_MainService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Access_DecisionManagerService.php';
require __DIR__.'/ContainerVmcXTR7/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerVmcXTR7/getSecrets_VaultService.php';
require __DIR__.'/ContainerVmcXTR7/getRouting_LoaderService.php';
require __DIR__.'/ContainerVmcXTR7/getPropertyAccessorService.php';
require __DIR__.'/ContainerVmcXTR7/getMonolog_LoggerService.php';
require __DIR__.'/ContainerVmcXTR7/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_Type_FormService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_Type_FileService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_Type_EntityService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_Type_ColorService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_ServerParamsService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_RegistryService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_FactoryService.php';
require __DIR__.'/ContainerVmcXTR7/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerVmcXTR7/getErrorControllerService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_SystemCachePoolService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_ResultCachePoolService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerVmcXTR7/getDoctrineService.php';
require __DIR__.'/ContainerVmcXTR7/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerVmcXTR7/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_ValidatorService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_SystemClearerService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_SystemService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_PropertyInfoService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_PropertyAccessService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_AppClearerService.php';
require __DIR__.'/ContainerVmcXTR7/getCache_AppService.php';
require __DIR__.'/ContainerVmcXTR7/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerVmcXTR7/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerVmcXTR7/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerVmcXTR7/getTemplateControllerService.php';
require __DIR__.'/ContainerVmcXTR7/getRedirectControllerService.php';
require __DIR__.'/ContainerVmcXTR7/getUserRepositoryService.php';
require __DIR__.'/ContainerVmcXTR7/getHobbyRepositoryService.php';
require __DIR__.'/ContainerVmcXTR7/getFriendshipRepositoryService.php';
require __DIR__.'/ContainerVmcXTR7/getRegistrationFormTypeService.php';
require __DIR__.'/ContainerVmcXTR7/getUsersControllerService.php';
require __DIR__.'/ContainerVmcXTR7/getRootControllerService.php';
require __DIR__.'/ContainerVmcXTR7/getRegistrationControllerService.php';
require __DIR__.'/ContainerVmcXTR7/getPageControllerService.php';
require __DIR__.'/ContainerVmcXTR7/getLoginControllerService.php';
require __DIR__.'/ContainerVmcXTR7/get_ServiceLocator_L1ae_QzService.php';
require __DIR__.'/ContainerVmcXTR7/get_ServiceLocator_UDgw6OlService.php';
require __DIR__.'/ContainerVmcXTR7/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerVmcXTR7/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerVmcXTR7/get_ServiceLocator_4u5os03Service.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\PageController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Controller\RootController';
$classes[] = 'App\Controller\UsersController';
$classes[] = 'App\Form\RegistrationFormType';
$classes[] = 'App\Repository\FriendshipRepository';
$classes[] = 'App\Repository\HobbyRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Handler\FingersCrossedHandler';
$classes[] = 'Monolog\Formatter\JsonFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy';
$classes[] = 'Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityFriendship.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityHobby.php';
require_once __DIR__.'/doctrine/orm/Proxies/__CG__AppEntityUser.php';

$classes = [];
$classes[] = 'Doctrine\\ORM\\Mapping\\ClassMetadata';
$classes[] = 'Doctrine\\ORM\\Id\\IdentityGenerator';
$preloaded = Preloader::preload($classes, $preloaded);
require_once __DIR__.'/twig/8e/8e66f3e2588deeb45a9ebb236e865d024ccf8e2e380c8f95a26dcab1e8dd3fad.php';
require_once __DIR__.'/twig/08/082aa6e4c66bb167e1470d0edc276530e547dd1e53d81d02646433e0fa9d1101.php';
require_once __DIR__.'/twig/ff/ffe1963895bf10215262c4a75a514408c9ea04f19c5a709a7dda3d44b8fcf10d.php';
require_once __DIR__.'/twig/51/51fe414d070f8b090dafec40591593c1e88cf0e5add562cec1856fc034191b54.php';
require_once __DIR__.'/twig/d1/d1a60d547f9ba84feb4c85dfc62133c8cea476d23bf0ee8a16a62b8ff36f8efe.php';
require_once __DIR__.'/twig/51/51c3927ac939fba3923ebc30d42a46933ac71128ada8cfc9ba87f3082ef8a136.php';
require_once __DIR__.'/twig/53/53c2c03373e8e76510e130a882cf6f90f978aa807599405b3978eaae926a8728.php';
require_once __DIR__.'/twig/af/af32e02f850a006624b26f00531d97706177f458fe8c330f055ce601e592e7ae.php';
require_once __DIR__.'/twig/d4/d488d7148fe598df60f10d0f2d8eb6448dd92599db9fd764c88df6e2ef4c6581.php';
require_once __DIR__.'/twig/a6/a6e6aacbf04c6d67388e0793945a11ffab03d69907e5648498cafd8af8cde0d7.php';
require_once __DIR__.'/twig/1c/1ce3904b5b84c5a8039307ac16edc5194bf4b00862043e6daa85858fb81e7a4b.php';
require_once __DIR__.'/twig/89/8967db2e1d886c344d6316aee61b9d1d62b079be5513e8aebd215156d9df7afc.php';
require_once __DIR__.'/twig/c5/c5510c089833297774ee6449c6ff4b0017a1749524a141d661c6c3a397d5c11a.php';
require_once __DIR__.'/twig/c1/c13063cf5bc5ffccb7d6064142867355330ffbb916e0d112ae52e5dc5c5ef000.php';
require_once __DIR__.'/twig/55/55ca4c35175d1f94201aca04678f2fba55c8aa984e35939f9055a986815c7b78.php';
require_once __DIR__.'/twig/af/af98c556fecfaa4182239e83bd6166714cf3c3f0e65a8f3cf68d81fa6cb586d3.php';
require_once __DIR__.'/twig/6b/6b5795d7282452324434f904d1080a1d3e425aed4888f7090f8a25bc48cd7ecd.php';
require_once __DIR__.'/twig/db/db21025f7b4c9b27c6f8e329588d255c26fc39d5283524ba17b3259117a7853e.php';
require_once __DIR__.'/twig/d4/d42fb91e49438e266c3cda2c109e27d3720eaf8b710f34ede1b89d64f1e50aa4.php';
require_once __DIR__.'/twig/38/38cf0664c82eb7f1f527817109ba3f1d53fb72ce20990bf9260e4958402bfe5b.php';
require_once __DIR__.'/twig/fb/fb073e182e0aa7bc066766981e799a6523ad47d363ae0dc27f206fbc965001be.php';
require_once __DIR__.'/twig/54/54c45ba722b05ddce89912c05e62554277be90de7e23ba0d9c48387b9e55921e.php';
require_once __DIR__.'/twig/6d/6d3c7b22f6c67d994507b90161bcddca20cc9e4bee4a37970d1f79290b15b3d2.php';
require_once __DIR__.'/twig/32/325829d8fcc3be0db8838b165a864a880957eb97d25fadc21c94a9ee85a82673.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Validator\\Mapping\\ClassMetadata';
$classes[] = 'Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form';
$preloaded = Preloader::preload($classes, $preloaded);
