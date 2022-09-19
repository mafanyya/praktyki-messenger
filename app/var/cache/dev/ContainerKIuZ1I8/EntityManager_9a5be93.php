<?php

namespace ContainerKIuZ1I8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder002db = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer89586 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9d431 = [
        
    ];

    public function getConnection()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getConnection', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getMetadataFactory', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getExpressionBuilder', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'beginTransaction', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getCache', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getCache();
    }

    public function transactional($func)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'transactional', array('func' => $func), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'wrapInTransaction', array('func' => $func), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'commit', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->commit();
    }

    public function rollback()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'rollback', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getClassMetadata', array('className' => $className), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'createQuery', array('dql' => $dql), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'createNamedQuery', array('name' => $name), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'createQueryBuilder', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'flush', array('entity' => $entity), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'clear', array('entityName' => $entityName), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->clear($entityName);
    }

    public function close()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'close', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->close();
    }

    public function persist($entity)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'persist', array('entity' => $entity), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'remove', array('entity' => $entity), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'refresh', array('entity' => $entity), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'detach', array('entity' => $entity), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'merge', array('entity' => $entity), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getRepository', array('entityName' => $entityName), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'contains', array('entity' => $entity), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getEventManager', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getConfiguration', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'isOpen', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getUnitOfWork', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getProxyFactory', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'initializeObject', array('obj' => $obj), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'getFilters', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'isFiltersStateClean', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'hasFilters', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return $this->valueHolder002db->hasFilters();
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

        $instance->initializer89586 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder002db) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder002db = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder002db->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, '__get', ['name' => $name], $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        if (isset(self::$publicProperties9d431[$name])) {
            return $this->valueHolder002db->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder002db;

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

        $targetObject = $this->valueHolder002db;
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
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder002db;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder002db;
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
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, '__isset', array('name' => $name), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder002db;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder002db;
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
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, '__unset', array('name' => $name), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder002db;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder002db;
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
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, '__clone', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        $this->valueHolder002db = clone $this->valueHolder002db;
    }

    public function __sleep()
    {
        $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, '__sleep', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;

        return array('valueHolder002db');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer89586 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer89586;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer89586 && ($this->initializer89586->__invoke($valueHolder002db, $this, 'initializeProxy', array(), $this->initializer89586) || 1) && $this->valueHolder002db = $valueHolder002db;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder002db;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder002db;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
