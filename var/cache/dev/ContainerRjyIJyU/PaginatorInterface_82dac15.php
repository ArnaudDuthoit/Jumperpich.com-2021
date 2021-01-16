<?php

namespace ContainerRjyIJyU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        if ($this->valueHolderec294 === $returnValue = $this->valueHolderec294->paginate($target, $page, $limit, $options)) {
            $returnValue = $this;
        }

        return $returnValue;
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

        $instance->initializer77b3d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderec294) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderec294 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__get', ['name' => $name], $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        if (isset(self::$publicProperties6bf0d[$name])) {
            return $this->valueHolderec294->$name;
        }

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

    public function __set($name, $value)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        $targetObject = $this->valueHolderec294;

        $targetObject->$name = $value;

        return $targetObject->$name;
    }

    public function __isset($name)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__isset', array('name' => $name), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        $targetObject = $this->valueHolderec294;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializer77b3d && ($this->initializer77b3d->__invoke($valueHolderec294, $this, '__unset', array('name' => $name), $this->initializer77b3d) || 1) && $this->valueHolderec294 = $valueHolderec294;

        $targetObject = $this->valueHolderec294;

        unset($targetObject->$name);

return;
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
