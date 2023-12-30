<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerIzxS1e3\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerIzxS1e3/getTwig_Runtime_SerializerService.php';
require __DIR__.'/ContainerIzxS1e3/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerIzxS1e3/getSession_FactoryService.php';
require __DIR__.'/ContainerIzxS1e3/getServicesResetterService.php';
require __DIR__.'/ContainerIzxS1e3/getSecrets_VaultService.php';
require __DIR__.'/ContainerIzxS1e3/getRouting_LoaderService.php';
require __DIR__.'/ContainerIzxS1e3/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerIzxS1e3/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerIzxS1e3/getErrorControllerService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php';
require __DIR__.'/ContainerIzxS1e3/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerIzxS1e3/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerIzxS1e3/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerIzxS1e3/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerIzxS1e3/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerIzxS1e3/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerIzxS1e3/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerIzxS1e3/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerIzxS1e3/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerIzxS1e3/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerIzxS1e3/getCache_SystemClearerService.php';
require __DIR__.'/ContainerIzxS1e3/getCache_SystemService.php';
require __DIR__.'/ContainerIzxS1e3/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerIzxS1e3/getCache_AppClearerService.php';
require __DIR__.'/ContainerIzxS1e3/getCache_AppService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_SwaggerUi_ActionService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Swagger_Action_UiService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Openapi_OptionsService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Openapi_Factory_LegacyService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Listener_View_Write_LegacyService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Listener_View_SerializeService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Listener_View_RespondService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Listener_Exception_ValidationService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Listener_ExceptionService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Jsonld_Action_ContextService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_QueryExtension_OrderService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_QueryExtension_FilterService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Doctrine_Orm_DataPersisterService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Action_PlaceholderService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Action_NotFoundService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Action_NotExposedService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Action_ExceptionService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Action_EntrypointService.php';
require __DIR__.'/ContainerIzxS1e3/getApiPlatform_Action_DocumentationService.php';
require __DIR__.'/ContainerIzxS1e3/getTemplateControllerService.php';
require __DIR__.'/ContainerIzxS1e3/getRedirectControllerService.php';
require __DIR__.'/ContainerIzxS1e3/getNotificationRepositoryService.php';
require __DIR__.'/ContainerIzxS1e3/get_ServiceLocator_MGHEj8dService.php';
require __DIR__.'/ContainerIzxS1e3/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerIzxS1e3/get_Container_Private_TwigService.php';
require __DIR__.'/ContainerIzxS1e3/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerIzxS1e3/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerIzxS1e3/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'ApiPlatform\Symfony\Bundle\ApiPlatformBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'ApiPlatform\OpenApi\Serializer\ApiGatewayNormalizer';
$classes[] = 'ApiPlatform\OpenApi\Serializer\OpenApiNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Problem\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\EntrypointNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\ErrorNormalizer';
$classes[] = 'ApiPlatform\Problem\Serializer\ErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'ApiPlatform\JsonLd\Serializer\ItemNormalizer';
$classes[] = 'ApiPlatform\Serializer\ItemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\CollectionFiltersNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\PartialCollectionViewNormalizer';
$classes[] = 'ApiPlatform\Hydra\Serializer\CollectionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'ApiPlatform\JsonLd\Serializer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'ApiPlatform\Serializer\JsonEncoder';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
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
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
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
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'App\Repository\NotificationRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'ApiPlatform\Documentation\Action\DocumentationAction';
$classes[] = 'ApiPlatform\Action\EntrypointAction';
$classes[] = 'ApiPlatform\Action\ExceptionAction';
$classes[] = 'ApiPlatform\Action\NotExposedAction';
$classes[] = 'ApiPlatform\Action\NotFoundAction';
$classes[] = 'ApiPlatform\Action\PlaceholderAction';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension';
$classes[] = 'ApiPlatform\Core\DataProvider\Pagination';
$classes[] = 'ApiPlatform\HttpCache\EventListener\AddHeadersListener';
$classes[] = 'ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Core\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Hydra\EventListener\AddLinkHeaderListener';
$classes[] = 'ApiPlatform\Core\Identifier\IdentifierConverter';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer';
$classes[] = 'ApiPlatform\Core\Api\CachedIdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Api\IdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver';
$classes[] = 'ApiPlatform\Core\JsonSchema\TypeFactory';
$classes[] = 'ApiPlatform\JsonLd\Action\ContextAction';
$classes[] = 'ApiPlatform\JsonLd\ContextBuilder';
$classes[] = 'ApiPlatform\Symfony\Routing\SkolemIriConverter';
$classes[] = 'ApiPlatform\Symfony\EventListener\ExceptionListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\ErrorListener';
$classes[] = 'ApiPlatform\Symfony\Validator\EventListener\ValidationExceptionListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\AddFormatListener';
$classes[] = 'Negotiation\Negotiator';
$classes[] = 'ApiPlatform\Symfony\EventListener\DeserializeListener';
$classes[] = 'ApiPlatform\Core\EventListener\ReadListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Symfony\EventListener\RespondListener';
$classes[] = 'ApiPlatform\Symfony\EventListener\SerializeListener';
$classes[] = 'ApiPlatform\Core\EventListener\WriteListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister';
$classes[] = 'ApiPlatform\Core\DataPersister\ChainDataPersister';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\XmlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\YamlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\DefaultPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\CachedPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Property\Factory\PropertyInfoPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\FormatsResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\CachedResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\OpenApi\Factory\OpenApiFactory';
$classes[] = 'ApiPlatform\State\Pagination\PaginationOptions';
$classes[] = 'ApiPlatform\OpenApi\Options';
$classes[] = 'ApiPlatform\PathResolver\CustomOperationPathResolver';
$classes[] = 'ApiPlatform\PathResolver\OperationPathResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver';
$classes[] = 'ApiPlatform\Operation\UnderscorePathSegmentNameGenerator';
$classes[] = 'ApiPlatform\Api\ResourceClassResolver';
$classes[] = 'ApiPlatform\Symfony\Routing\Router';
$classes[] = 'ApiPlatform\Serializer\SerializerFilterContextBuilder';
$classes[] = 'ApiPlatform\Serializer\SerializerContextBuilder';
$classes[] = 'ApiPlatform\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction';
$classes[] = 'ApiPlatform\Symfony\Bundle\EventListener\SwaggerUiListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\SwaggerUi\SwaggerUiAction';
$classes[] = 'ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiContext';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
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
$classes[] = 'ApiPlatform\Symfony\Routing\ApiLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/fd/fda1eda786dfd1730ae0cc13f109dfed018f78e47afb134236581cc4015ed83d.php';
require_once __DIR__.'/twig/ae/ae335df32ffc34bb0e0bb19465d6964acdce3607fc14a5ae46bc4f9d126b41ba.php';
require_once __DIR__.'/twig/31/31701a6c6e969e9314d7fc9964b6684bd0959dab2228bcf53c2d265827445464.php';
require_once __DIR__.'/twig/92/9221aee06fe942349cab7fbce654c48272c542967b33beb5603d69d8581dc7f4.php';
require_once __DIR__.'/twig/61/61afaedef688bee1e79b238e2f31bdfa64599fbbcd5fb7b3267e8845b2e16212.php';
require_once __DIR__.'/twig/63/630c6e55c04f4462a71a89291d4ec2552dd83862d203f2b5f031cfec0cf1554a.php';
require_once __DIR__.'/twig/1c/1cd3146da6dfa5a015922f3c9df8795bc005f8a6adacc5790b2334223c535af8.php';
require_once __DIR__.'/twig/d9/d9968e4e857d56e1305f189712c4dbfeecf934d11c43b2f06617cd761ee692bb.php';
require_once __DIR__.'/twig/b4/b4935e7ee59ad6bbb136d31eca7759180a4557c9d0b40f0a8f80cf168d06c3f5.php';
require_once __DIR__.'/twig/f4/f42fedcc0d76aede0055d402b0d512e387b8470ba247f4ddf50a45ae0bb504ca.php';
require_once __DIR__.'/twig/af/af939d0707f5bd8fc5b25e2b01c3ac15bce1da55382b2fcb1d3c9c9be9a7a7b3.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'ApiPlatform\\Core\\Annotation\\ApiResource';
$classes[] = 'Doctrine\\ORM\\Mapping\\Entity';
$classes[] = 'Doctrine\\ORM\\Mapping\\Id';
$classes[] = 'Doctrine\\ORM\\Mapping\\GeneratedValue';
$classes[] = 'Doctrine\\ORM\\Mapping\\Column';
$preloaded = Preloader::preload($classes, $preloaded);
