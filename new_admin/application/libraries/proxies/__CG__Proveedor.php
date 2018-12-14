<?php

namespace Proxies\__CG__;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proveedor extends \Proveedor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Proveedor' . "\0" . 'id', '' . "\0" . 'Proveedor' . "\0" . 'razon_social', '' . "\0" . 'Proveedor' . "\0" . 'provincia', '' . "\0" . 'Proveedor' . "\0" . 'localidad', '' . "\0" . 'Proveedor' . "\0" . 'activo', '' . "\0" . 'Proveedor' . "\0" . 'condicion_iva', '' . "\0" . 'Proveedor' . "\0" . 'cuit', '' . "\0" . 'Proveedor' . "\0" . 'contacto', '' . "\0" . 'Proveedor' . "\0" . 'servicio', '' . "\0" . 'Proveedor' . "\0" . 'comentario', '' . "\0" . 'Proveedor' . "\0" . 'telefono', '' . "\0" . 'Proveedor' . "\0" . 'cp', '' . "\0" . 'Proveedor' . "\0" . 'altura', '' . "\0" . 'Proveedor' . "\0" . 'piso', '' . "\0" . 'Proveedor' . "\0" . 'calle', '' . "\0" . 'Proveedor' . "\0" . 'dpto'];
        }

        return ['__isInitialized__', '' . "\0" . 'Proveedor' . "\0" . 'id', '' . "\0" . 'Proveedor' . "\0" . 'razon_social', '' . "\0" . 'Proveedor' . "\0" . 'provincia', '' . "\0" . 'Proveedor' . "\0" . 'localidad', '' . "\0" . 'Proveedor' . "\0" . 'activo', '' . "\0" . 'Proveedor' . "\0" . 'condicion_iva', '' . "\0" . 'Proveedor' . "\0" . 'cuit', '' . "\0" . 'Proveedor' . "\0" . 'contacto', '' . "\0" . 'Proveedor' . "\0" . 'servicio', '' . "\0" . 'Proveedor' . "\0" . 'comentario', '' . "\0" . 'Proveedor' . "\0" . 'telefono', '' . "\0" . 'Proveedor' . "\0" . 'cp', '' . "\0" . 'Proveedor' . "\0" . 'altura', '' . "\0" . 'Proveedor' . "\0" . 'piso', '' . "\0" . 'Proveedor' . "\0" . 'calle', '' . "\0" . 'Proveedor' . "\0" . 'dpto'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proveedor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getRazon_social()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRazon_social', []);

        return parent::getRazon_social();
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', []);

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function getProvincia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvincia', []);

        return parent::getProvincia();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalidad', []);

        return parent::getLocalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function getCalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalle', []);

        return parent::getCalle();
    }

    /**
     * {@inheritDoc}
     */
    public function getCondicion_iva()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCondicion_iva', []);

        return parent::getCondicion_iva();
    }

    /**
     * {@inheritDoc}
     */
    public function getCuit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuit', []);

        return parent::getCuit();
    }

    /**
     * {@inheritDoc}
     */
    public function getContacto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacto', []);

        return parent::getContacto();
    }

    /**
     * {@inheritDoc}
     */
    public function getServicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServicio', []);

        return parent::getServicio();
    }

    /**
     * {@inheritDoc}
     */
    public function getComentario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentario', []);

        return parent::getComentario();
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', []);

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function getAltura()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAltura', []);

        return parent::getAltura();
    }

    /**
     * {@inheritDoc}
     */
    public function getPiso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPiso', []);

        return parent::getPiso();
    }

    /**
     * {@inheritDoc}
     */
    public function getDpto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDpto', []);

        return parent::getDpto();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setProvincia($provincia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvincia', [$provincia]);

        return parent::setProvincia($provincia);
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalidad($localidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalidad', [$localidad]);

        return parent::setLocalidad($localidad);
    }

    /**
     * {@inheritDoc}
     */
    public function setRazon_social($razon_social)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRazon_social', [$razon_social]);

        return parent::setRazon_social($razon_social);
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', [$activo]);

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function setCalle($calle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalle', [$calle]);

        return parent::setCalle($calle);
    }

    /**
     * {@inheritDoc}
     */
    public function setCondicion_iva($condicion_iva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCondicion_iva', [$condicion_iva]);

        return parent::setCondicion_iva($condicion_iva);
    }

    /**
     * {@inheritDoc}
     */
    public function setCuit($cuit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCuit', [$cuit]);

        return parent::setCuit($cuit);
    }

    /**
     * {@inheritDoc}
     */
    public function setContacto($contacto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContacto', [$contacto]);

        return parent::setContacto($contacto);
    }

    /**
     * {@inheritDoc}
     */
    public function setServicio($servicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServicio', [$servicio]);

        return parent::setServicio($servicio);
    }

    /**
     * {@inheritDoc}
     */
    public function setComentario($comentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComentario', [$comentario]);

        return parent::setComentario($comentario);
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$telefono]);

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', [$cp]);

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function setAltura($altura)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAltura', [$altura]);

        return parent::setAltura($altura);
    }

    /**
     * {@inheritDoc}
     */
    public function setPiso($piso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPiso', [$piso]);

        return parent::setPiso($piso);
    }

    /**
     * {@inheritDoc}
     */
    public function setDpto($dpto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDpto', [$dpto]);

        return parent::setDpto($dpto);
    }

    /**
     * {@inheritDoc}
     */
    public function setea($information, $provincia, $condiva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setea', [$information, $provincia, $condiva]);

        return parent::setea($information, $provincia, $condiva);
    }

    /**
     * {@inheritDoc}
     */
    public function obtenerArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'obtenerArray', []);

        return parent::obtenerArray();
    }

}