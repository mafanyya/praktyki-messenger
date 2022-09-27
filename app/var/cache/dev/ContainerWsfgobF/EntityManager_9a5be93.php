<?php

namespace ContainerWsfgobF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa751 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8176d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1ac3b = [
        
    ];

    public function getConnection()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getConnection', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getMetadataFactory', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getExpressionBuilder', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'beginTransaction', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getCache', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'transactional', array('func' => $func), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'commit', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->commit();
    }

    public function rollback()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'rollback', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getClassMetadata', array('className' => $className), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'createQuery', array('dql' => $dql), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'createNamedQuery', array('name' => $name), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'createQueryBuilder', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'flush', array('entity' => $entity), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'clear', array('entityName' => $entityName), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->clear($entityName);
    }

    public function close()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'close', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->close();
    }

    public function persist($entity)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'persist', array('entity' => $entity), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'remove', array('entity' => $entity), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'refresh', array('entity' => $entity), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'detach', array('entity' => $entity), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'merge', array('entity' => $entity), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'contains', array('entity' => $entity), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getEventManager', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getConfiguration', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'isOpen', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getUnitOfWork', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getProxyFactory', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'initializeObject', array('obj' => $obj), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'getFilters', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'isFiltersStateClean', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'hasFilters', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return $this->valueHolderaa751->hasFilters();
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

        $instance->initializer8176d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaa751) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa751 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa751->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, '__get', ['name' => $name], $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        if (isset(self::$publicProperties1ac3b[$name])) {
            return $this->valueHolderaa751->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa751;

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

        $targetObject = $this->valueHolderaa751;
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
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa751;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa751;
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
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, '__isset', array('name' => $name), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa751;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa751;
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
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, '__unset', array('name' => $name), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa751;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa751;
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
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, '__clone', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        $this->valueHolderaa751 = clone $this->valueHolderaa751;
    }

    public function __sleep()
    {
        $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, '__sleep', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;

        return array('valueHolderaa751');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8176d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8176d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8176d && ($this->initializer8176d->__invoke($valueHolderaa751, $this, 'initializeProxy', array(), $this->initializer8176d) || 1) && $this->valueHolderaa751 = $valueHolderaa751;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa751;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa751;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
