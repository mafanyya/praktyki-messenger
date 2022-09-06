<?php

namespace ContainerR7Kx5OK;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder49b75 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfeb43 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5d5e7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getConnection', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getMetadataFactory', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getExpressionBuilder', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'beginTransaction', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getCache', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'transactional', array('func' => $func), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'commit', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->commit();
    }

    public function rollback()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'rollback', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getClassMetadata', array('className' => $className), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'createQuery', array('dql' => $dql), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'createNamedQuery', array('name' => $name), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'createQueryBuilder', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'flush', array('entity' => $entity), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'clear', array('entityName' => $entityName), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->clear($entityName);
    }

    public function close()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'close', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->close();
    }

    public function persist($entity)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'persist', array('entity' => $entity), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'remove', array('entity' => $entity), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'refresh', array('entity' => $entity), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'detach', array('entity' => $entity), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'merge', array('entity' => $entity), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'contains', array('entity' => $entity), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getEventManager', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getConfiguration', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'isOpen', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getUnitOfWork', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getProxyFactory', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'initializeObject', array('obj' => $obj), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'getFilters', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'isFiltersStateClean', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'hasFilters', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return $this->valueHolder49b75->hasFilters();
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

        $instance->initializerfeb43 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder49b75) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder49b75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder49b75->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, '__get', ['name' => $name], $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        if (isset(self::$publicProperties5d5e7[$name])) {
            return $this->valueHolder49b75->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49b75;

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

        $targetObject = $this->valueHolder49b75;
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
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49b75;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder49b75;
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
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, '__isset', array('name' => $name), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49b75;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder49b75;
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
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, '__unset', array('name' => $name), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49b75;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder49b75;
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
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, '__clone', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        $this->valueHolder49b75 = clone $this->valueHolder49b75;
    }

    public function __sleep()
    {
        $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, '__sleep', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;

        return array('valueHolder49b75');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfeb43 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfeb43;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfeb43 && ($this->initializerfeb43->__invoke($valueHolder49b75, $this, 'initializeProxy', array(), $this->initializerfeb43) || 1) && $this->valueHolder49b75 = $valueHolder49b75;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder49b75;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder49b75;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
