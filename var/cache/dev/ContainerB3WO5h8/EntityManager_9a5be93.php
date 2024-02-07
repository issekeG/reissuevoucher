<?php

namespace ContainerB3WO5h8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercbbfb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4cfb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa728f = [
        
    ];

    public function getConnection()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getConnection', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getMetadataFactory', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getExpressionBuilder', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'beginTransaction', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getCache', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'transactional', array('func' => $func), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'commit', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->commit();
    }

    public function rollback()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'rollback', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'createQuery', array('dql' => $dql), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'createQueryBuilder', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'flush', array('entity' => $entity), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'clear', array('entityName' => $entityName), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'close', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->close();
    }

    public function persist($entity)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'persist', array('entity' => $entity), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'remove', array('entity' => $entity), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'detach', array('entity' => $entity), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'merge', array('entity' => $entity), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'contains', array('entity' => $entity), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getEventManager', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getConfiguration', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'isOpen', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getUnitOfWork', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getProxyFactory', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'getFilters', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'isFiltersStateClean', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'hasFilters', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return $this->valueHoldercbbfb->hasFilters();
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

        $instance->initializerd4cfb = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHoldercbbfb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercbbfb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercbbfb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, '__get', ['name' => $name], $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        if (isset(self::$publicPropertiesa728f[$name])) {
            return $this->valueHoldercbbfb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbbfb;

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

        $targetObject = $this->valueHoldercbbfb;
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
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbbfb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercbbfb;
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
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, '__isset', array('name' => $name), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbbfb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercbbfb;
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
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, '__unset', array('name' => $name), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercbbfb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercbbfb;
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
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, '__clone', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        $this->valueHoldercbbfb = clone $this->valueHoldercbbfb;
    }

    public function __sleep()
    {
        $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, '__sleep', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;

        return array('valueHoldercbbfb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4cfb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4cfb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4cfb && ($this->initializerd4cfb->__invoke($valueHoldercbbfb, $this, 'initializeProxy', array(), $this->initializerd4cfb) || 1) && $this->valueHoldercbbfb = $valueHoldercbbfb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercbbfb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercbbfb;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
