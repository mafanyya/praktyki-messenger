<?php

namespace ContainerXopl97H;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf7b39 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer71750 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescc517 = [
        
    ];

    public function getConnection()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getConnection', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getMetadataFactory', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getExpressionBuilder', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'beginTransaction', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getCache', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getCache();
    }

    public function transactional($func)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'transactional', array('func' => $func), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'wrapInTransaction', array('func' => $func), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'commit', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->commit();
    }

    public function rollback()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'rollback', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getClassMetadata', array('className' => $className), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'createQuery', array('dql' => $dql), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'createNamedQuery', array('name' => $name), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'createQueryBuilder', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'flush', array('entity' => $entity), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'clear', array('entityName' => $entityName), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->clear($entityName);
    }

    public function close()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'close', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->close();
    }

    public function persist($entity)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'persist', array('entity' => $entity), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'remove', array('entity' => $entity), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'refresh', array('entity' => $entity), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'detach', array('entity' => $entity), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'merge', array('entity' => $entity), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getRepository', array('entityName' => $entityName), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'contains', array('entity' => $entity), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getEventManager', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getConfiguration', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'isOpen', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getUnitOfWork', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getProxyFactory', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'initializeObject', array('obj' => $obj), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'getFilters', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'isFiltersStateClean', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'hasFilters', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return $this->valueHolderf7b39->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer71750 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf7b39) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf7b39 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf7b39->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, '__get', ['name' => $name], $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        if (isset(self::$publicPropertiescc517[$name])) {
            return $this->valueHolderf7b39->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7b39;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7b39;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7b39;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7b39;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, '__isset', array('name' => $name), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7b39;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf7b39;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, '__unset', array('name' => $name), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7b39;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf7b39;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, '__clone', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        $this->valueHolderf7b39 = clone $this->valueHolderf7b39;
    }

    public function __sleep()
    {
        $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, '__sleep', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;

        return array('valueHolderf7b39');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer71750 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer71750;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer71750 && ($this->initializer71750->__invoke($valueHolderf7b39, $this, 'initializeProxy', array(), $this->initializer71750) || 1) && $this->valueHolderf7b39 = $valueHolderf7b39;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf7b39;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf7b39;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
