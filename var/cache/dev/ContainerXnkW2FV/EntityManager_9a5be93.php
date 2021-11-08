<?php

namespace ContainerXnkW2FV;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere0338 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4207 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb2a53 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getConnection', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getMetadataFactory', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getExpressionBuilder', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'beginTransaction', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getCache', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'transactional', array('func' => $func), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'commit', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->commit();
    }

    public function rollback()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'rollback', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'createQuery', array('dql' => $dql), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'createQueryBuilder', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'flush', array('entity' => $entity), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'clear', array('entityName' => $entityName), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'close', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->close();
    }

    public function persist($entity)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'persist', array('entity' => $entity), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'remove', array('entity' => $entity), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'refresh', array('entity' => $entity), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'detach', array('entity' => $entity), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'merge', array('entity' => $entity), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'contains', array('entity' => $entity), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getEventManager', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getConfiguration', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'isOpen', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getUnitOfWork', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getProxyFactory', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'getFilters', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'isFiltersStateClean', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'hasFilters', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return $this->valueHoldere0338->hasFilters();
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

        $instance->initializerc4207 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere0338) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere0338 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere0338->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, '__get', ['name' => $name], $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        if (isset(self::$publicPropertiesb2a53[$name])) {
            return $this->valueHoldere0338->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0338;

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

        $targetObject = $this->valueHoldere0338;
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
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0338;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere0338;
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
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, '__isset', array('name' => $name), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0338;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere0338;
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
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, '__unset', array('name' => $name), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0338;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere0338;
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
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, '__clone', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        $this->valueHoldere0338 = clone $this->valueHoldere0338;
    }

    public function __sleep()
    {
        $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, '__sleep', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;

        return array('valueHoldere0338');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4207 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4207;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4207 && ($this->initializerc4207->__invoke($valueHoldere0338, $this, 'initializeProxy', array(), $this->initializerc4207) || 1) && $this->valueHoldere0338 = $valueHoldere0338;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere0338;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere0338;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
