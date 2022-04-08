<?php

namespace ContainerEH0uuUt;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder840d5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8696f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4949e = [
        
    ];

    public function getConnection()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getConnection', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getMetadataFactory', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getExpressionBuilder', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'beginTransaction', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getCache', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'transactional', array('func' => $func), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'commit', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->commit();
    }

    public function rollback()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'rollback', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getClassMetadata', array('className' => $className), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'createQuery', array('dql' => $dql), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'createNamedQuery', array('name' => $name), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'createQueryBuilder', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'flush', array('entity' => $entity), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'clear', array('entityName' => $entityName), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->clear($entityName);
    }

    public function close()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'close', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->close();
    }

    public function persist($entity)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'persist', array('entity' => $entity), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'remove', array('entity' => $entity), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'refresh', array('entity' => $entity), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'detach', array('entity' => $entity), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'merge', array('entity' => $entity), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'contains', array('entity' => $entity), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getEventManager', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getConfiguration', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'isOpen', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getUnitOfWork', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getProxyFactory', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'initializeObject', array('obj' => $obj), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'getFilters', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'isFiltersStateClean', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'hasFilters', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return $this->valueHolder840d5->hasFilters();
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

        $instance->initializer8696f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder840d5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder840d5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder840d5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, '__get', ['name' => $name], $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        if (isset(self::$publicProperties4949e[$name])) {
            return $this->valueHolder840d5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder840d5;

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

        $targetObject = $this->valueHolder840d5;
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
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder840d5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder840d5;
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
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, '__isset', array('name' => $name), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder840d5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder840d5;
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
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, '__unset', array('name' => $name), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder840d5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder840d5;
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
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, '__clone', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        $this->valueHolder840d5 = clone $this->valueHolder840d5;
    }

    public function __sleep()
    {
        $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, '__sleep', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;

        return array('valueHolder840d5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8696f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8696f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8696f && ($this->initializer8696f->__invoke($valueHolder840d5, $this, 'initializeProxy', array(), $this->initializer8696f) || 1) && $this->valueHolder840d5 = $valueHolder840d5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder840d5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder840d5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
