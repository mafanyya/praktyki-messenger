<?php

namespace ContainerE1jctAP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1a34f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8d4ac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties97e12 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getConnection', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getMetadataFactory', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getExpressionBuilder', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'beginTransaction', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getCache', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'transactional', array('func' => $func), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'commit', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->commit();
    }

    public function rollback()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'rollback', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getClassMetadata', array('className' => $className), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'createQuery', array('dql' => $dql), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'createNamedQuery', array('name' => $name), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'createQueryBuilder', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'flush', array('entity' => $entity), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'clear', array('entityName' => $entityName), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->clear($entityName);
    }

    public function close()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'close', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->close();
    }

    public function persist($entity)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'persist', array('entity' => $entity), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'remove', array('entity' => $entity), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'refresh', array('entity' => $entity), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'detach', array('entity' => $entity), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'merge', array('entity' => $entity), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'contains', array('entity' => $entity), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getEventManager', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getConfiguration', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'isOpen', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getUnitOfWork', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getProxyFactory', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'initializeObject', array('obj' => $obj), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'getFilters', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'isFiltersStateClean', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'hasFilters', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return $this->valueHolder1a34f->hasFilters();
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

        $instance->initializer8d4ac = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1a34f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1a34f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1a34f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, '__get', ['name' => $name], $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        if (isset(self::$publicProperties97e12[$name])) {
            return $this->valueHolder1a34f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a34f;

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

        $targetObject = $this->valueHolder1a34f;
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
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a34f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1a34f;
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
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, '__isset', array('name' => $name), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a34f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1a34f;
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
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, '__unset', array('name' => $name), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a34f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1a34f;
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
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, '__clone', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        $this->valueHolder1a34f = clone $this->valueHolder1a34f;
    }

    public function __sleep()
    {
        $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, '__sleep', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;

        return array('valueHolder1a34f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8d4ac = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8d4ac;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8d4ac && ($this->initializer8d4ac->__invoke($valueHolder1a34f, $this, 'initializeProxy', array(), $this->initializer8d4ac) || 1) && $this->valueHolder1a34f = $valueHolder1a34f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1a34f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1a34f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
