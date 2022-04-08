<?php

namespace ContainerFEL9XPq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder36306 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfdda3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese39d0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getConnection', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getMetadataFactory', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getExpressionBuilder', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'beginTransaction', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getCache', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'transactional', array('func' => $func), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'commit', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->commit();
    }

    public function rollback()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'rollback', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getClassMetadata', array('className' => $className), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'createQuery', array('dql' => $dql), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'createNamedQuery', array('name' => $name), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'createQueryBuilder', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'flush', array('entity' => $entity), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'clear', array('entityName' => $entityName), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->clear($entityName);
    }

    public function close()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'close', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->close();
    }

    public function persist($entity)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'persist', array('entity' => $entity), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'remove', array('entity' => $entity), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'refresh', array('entity' => $entity), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'detach', array('entity' => $entity), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'merge', array('entity' => $entity), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'contains', array('entity' => $entity), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getEventManager', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getConfiguration', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'isOpen', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getUnitOfWork', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getProxyFactory', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'initializeObject', array('obj' => $obj), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'getFilters', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'isFiltersStateClean', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'hasFilters', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return $this->valueHolder36306->hasFilters();
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

        $instance->initializerfdda3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder36306) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36306 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder36306->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, '__get', ['name' => $name], $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        if (isset(self::$publicPropertiese39d0[$name])) {
            return $this->valueHolder36306->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36306;

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

        $targetObject = $this->valueHolder36306;
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
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36306;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36306;
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
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, '__isset', array('name' => $name), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36306;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder36306;
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
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, '__unset', array('name' => $name), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36306;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder36306;
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
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, '__clone', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        $this->valueHolder36306 = clone $this->valueHolder36306;
    }

    public function __sleep()
    {
        $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, '__sleep', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;

        return array('valueHolder36306');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfdda3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfdda3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfdda3 && ($this->initializerfdda3->__invoke($valueHolder36306, $this, 'initializeProxy', array(), $this->initializerfdda3) || 1) && $this->valueHolder36306 = $valueHolder36306;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36306;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36306;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
