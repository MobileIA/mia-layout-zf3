<?php

namespace MIALayout\View\Helper;

/**
 * Description of LayoutLteFactory
 *
 * @author matiascamiletti
 */
class LayoutFactory implements \Zend\ServiceManager\Factory\FactoryInterface
{
    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
    {
        // Obtener config
        $config = $container->get('config');
        // Verificar si existe la configuración
        if(array_key_exists('mia_layout', $config)){
            $data = $config['mia_layout'];
        }else{
            $data = array();
        }
        // Creamos objeto
        return new Layout($data);
    }
}


