<?php

namespace ContainerIETfxx4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb5e5e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd7ecf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesae5dc = [
        
    ];

    public function getConnection()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getConnection', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getMetadataFactory', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getExpressionBuilder', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'beginTransaction', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getCache', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'transactional', array('func' => $func), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'commit', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->commit();
    }

    public function rollback()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'rollback', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getClassMetadata', array('className' => $className), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'createQuery', array('dql' => $dql), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'createNamedQuery', array('name' => $name), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'createQueryBuilder', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'flush', array('entity' => $entity), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'clear', array('entityName' => $entityName), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->clear($entityName);
    }

    public function close()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'close', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->close();
    }

    public function persist($entity)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'persist', array('entity' => $entity), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'remove', array('entity' => $entity), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'refresh', array('entity' => $entity), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'detach', array('entity' => $entity), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'merge', array('entity' => $entity), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'contains', array('entity' => $entity), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getEventManager', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getConfiguration', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'isOpen', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getUnitOfWork', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getProxyFactory', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'initializeObject', array('obj' => $obj), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'getFilters', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'isFiltersStateClean', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'hasFilters', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return $this->valueHolderb5e5e->hasFilters();
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

        $instance->initializerd7ecf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb5e5e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb5e5e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb5e5e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, '__get', ['name' => $name], $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        if (isset(self::$publicPropertiesae5dc[$name])) {
            return $this->valueHolderb5e5e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5e5e;

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

        $targetObject = $this->valueHolderb5e5e;
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
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5e5e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb5e5e;
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
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, '__isset', array('name' => $name), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5e5e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb5e5e;
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
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, '__unset', array('name' => $name), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5e5e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb5e5e;
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
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, '__clone', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        $this->valueHolderb5e5e = clone $this->valueHolderb5e5e;
    }

    public function __sleep()
    {
        $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, '__sleep', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;

        return array('valueHolderb5e5e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd7ecf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd7ecf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd7ecf && ($this->initializerd7ecf->__invoke($valueHolderb5e5e, $this, 'initializeProxy', array(), $this->initializerd7ecf) || 1) && $this->valueHolderb5e5e = $valueHolderb5e5e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb5e5e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb5e5e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
