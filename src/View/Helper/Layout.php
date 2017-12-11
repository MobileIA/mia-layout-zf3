<?php

namespace MIALayout\View\Helper;

/**
 * Description of Layout
 *
 * @author matiascamiletti
 */
class Layout extends \Zend\View\Helper\AbstractHelper
{
    /**
     *
     * @var array
     */
    public $params = '';
    /**
     * Constructor que recibe los parametros
     * @param array $params
     */
    public function __construct($params)
    {
        // Verificamos si es un array y lo seteamos
        if(is_array($params)){
            $this->params = $params;
        }
    }
    /**
     * 
     * @return Layout
     */
    public function __invoke()
    {
        return $this;
    }
    /**
     * Obtiene un parametro guardado
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get($key, $default = '')
    {
        if(array_key_exists($key, $this->params)){
            return $this->params[$key]; 
        }
        
        return $default;
    }
    /**
     * Setea para guardar un parametro
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->options[$key] = $value;
    }
}