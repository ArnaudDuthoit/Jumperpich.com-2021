<?php

namespace ContainerRjyIJyU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec294 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer77b3d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6bf0d = [
        
    ];

    public function getConnection()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getConnection', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getMetadataFactory', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getExpressionBuilder', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'beginTransaction', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getCache', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getCache();
    }

    public function transactional($func)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'transactional', array('func' => $func), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->transactional($func);
    }

    public function commit()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'commit', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->commit();
    }

    public function rollback()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'rollback', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getClassMetadata', array('className' => $className), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'createQuery', array('dql' => $dql), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'createNamedQuery', array('name' => $name), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'createQueryBuilder', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'flush', array('entity' => $entity), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'clear', array('entityName' => $entityName), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->clear($entityName);
    }

    public function close()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'close', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->close();
    }

    public function persist($entity)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'persist', array('entity' => $entity), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'remove', array('entity' => $entity), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'refresh', array('entity' => $entity), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'detach', array('entity' => $entity), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'merge', array('entity' => $entity), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getRepository', array('entityName' => $entityName), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'contains', array('entity' => $entity), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getEventManager', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getConfiguration', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'isOpen', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getUnitOfWork', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getProxyFactory', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'initializeObject', array('obj' => $obj), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'getFilters', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'isFiltersStateClean', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'hasFilters', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return $this->valueHolderec294->hasFilters();
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

        $instance->initializer77b3d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderec294) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec294 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec294->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__get', ['name' => $name], $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        if (isset(self::$publicProperties6bf0d[$name])) {
            return $this->valueHolderec294->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec294;

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

        $targetObject = $this->valueHolderec294;
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
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec294;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec294;
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
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__isset', array('name' => $name), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec294;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec294;
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
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__unset', array('name' => $name), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec294;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec294;
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
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__clone', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        $this->valueHolderec294 = clone $this->valueHolderec294;
    }

    public function __sleep()
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__sleep', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        return array('valueHolderec294');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer77b3d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer77b3d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'initializeProxy', array(), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec294;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec294;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
