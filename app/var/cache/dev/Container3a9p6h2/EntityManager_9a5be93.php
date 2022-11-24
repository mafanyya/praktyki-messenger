<?php

namespace Container3a9p6h2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb7786 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer714b1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd3aca = [
        
    ];

    public function getConnection()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getConnection', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getMetadataFactory', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getExpressionBuilder', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'beginTransaction', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getCache', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getCache();
    }

    public function transactional($func)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'transactional', array('func' => $func), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'wrapInTransaction', array('func' => $func), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'commit', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->commit();
    }

    public function rollback()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'rollback', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getClassMetadata', array('className' => $className), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'createQuery', array('dql' => $dql), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'createNamedQuery', array('name' => $name), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'createQueryBuilder', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'flush', array('entity' => $entity), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'clear', array('entityName' => $entityName), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->clear($entityName);
    }

    public function close()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'close', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->close();
    }

    public function persist($entity)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'persist', array('entity' => $entity), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'remove', array('entity' => $entity), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'refresh', array('entity' => $entity), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'detach', array('entity' => $entity), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'merge', array('entity' => $entity), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getRepository', array('entityName' => $entityName), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'contains', array('entity' => $entity), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getEventManager', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getConfiguration', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'isOpen', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getUnitOfWork', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getProxyFactory', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'initializeObject', array('obj' => $obj), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'getFilters', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'isFiltersStateClean', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'hasFilters', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return $this->valueHolderb7786->hasFilters();
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

        $instance->initializer714b1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb7786) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb7786 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb7786->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, '__get', ['name' => $name], $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        if (isset(self::$publicPropertiesd3aca[$name])) {
            return $this->valueHolderb7786->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7786;

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

        $targetObject = $this->valueHolderb7786;
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
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7786;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb7786;
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
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, '__isset', array('name' => $name), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7786;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb7786;
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
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, '__unset', array('name' => $name), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7786;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb7786;
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
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, '__clone', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        $this->valueHolderb7786 = clone $this->valueHolderb7786;
    }

    public function __sleep()
    {
        $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, '__sleep', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;

        return array('valueHolderb7786');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer714b1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer714b1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer714b1 && ($this->initializer714b1->__invoke($valueHolderb7786, $this, 'initializeProxy', array(), $this->initializer714b1) || 1) && $this->valueHolderb7786 = $valueHolderb7786;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb7786;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb7786;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
