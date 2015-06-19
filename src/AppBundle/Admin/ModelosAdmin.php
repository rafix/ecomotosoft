<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ModelosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('modelo')
            ->add('ano', null, array(
                'label' => 'Año'
            ))
            ->add('cilindrada', null, array(
                'label' => 'Cilindrada (cc)'
            ))
            ->add('homologacion', null, array(
                'label' => 'Homologación'
            ))
            ->add('tipo')
            ->add('variante')
            ->add('codmotor', null, array(
                'label' => 'Código del Motor'
            ))
            ->add('numcilindros', null, array(
                'label' => 'Número de Cilindros'
            ))
            ->add('potencia', null, array(
                'label' => 'Potencia (Kw)'
            ))
            ->add('db', null, array(
                'label' => 'DB'
            ))
            ->add('rpm', null, array(
                'label' => 'RPM'
            ))
            ->add('distancia', null, array(
                'label' => 'Distancia (m)'
            ))
            ->add('tara', null, array(
                'label' => 'Tara (Kg)'
            ))
            ->add('mma', null, array(
                'label' => 'MMA (Kg)'
            ))
            ->add('asientos')
            ->add('neumaticos', null, array(
                'label' => 'Neumáticos'
            ))
            ->add('altura', null, array(
                'label' => 'Altura (mm)'
            ))
            ->add('anchura', null, array(
                'label' => 'Anchura (mm)'
            ))
            ->add('longitud', null, array(
                'label' => 'Longitud (mm)'
            ))
            ->add('batalla', null, array(
                'label' => 'Batalla (mm)'
            ))
            ->add('viaanterior', null, array(
                'label' => 'Vía Anterior (mm)'
            ))
            ->add('viaposterior', null, array(
                'label' => 'Vía Posterior (mm)'
            ))
            ->add('limiteco', null, array(
                'label' => 'Límite CO'
            ))
            ->add('combustible')
            ->add('fabricante', null, array(
                'label' => 'Fabricante del Motor'
            ))
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('dencomercial', null, array(
                'label' => 'Denominación Comercial'
            ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('modelo')
            ->add('ano', null, array(
                'label' => 'Año'
            ))
//            ->add('cilindrada', null, array(
//                'label' => 'Cilindrada (cc)'
//            ))
            ->add('combustible')
            ->add('fabricante', null, array(
                'label' => 'Fabricante del Motor'
            ))
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('modelo')
            ->add('ano', null, array(
                'label' => 'Año'
            ))
            ->add('cilindrada', null, array(
                'label' => 'Cilindrada (cc)'
            ))
            ->add('homologacion', null, array(
                'label' => 'Homologación'
            ))
            ->add('tipo')
            ->add('variante')
            ->add('codmotor', null, array(
                'label' => 'Código del Motor'
            ))
            ->add('numcilindros', null, array(
                'label' => 'Número de Cilindros'
            ))
            ->add('potencia', null, array(
                'label' => 'Potencia (Kw)'
            ))
            ->add('db', null, array(
                'label' => 'DB'
            ))
            ->add('rpm', null, array(
                'label' => 'RPM'
            ))
            ->add('distancia', null, array(
                'label' => 'Distancia (m)'
            ))
            ->add('tara', null, array(
                'label' => 'Tara (Kg)'
            ))
            ->add('mma', null, array(
                'label' => 'MMA (Kg)'
            ))
            ->add('asientos')
            ->add('neumaticos', null, array(
                'label' => 'Neumáticos'
            ))
            ->add('altura', null, array(
                'label' => 'Altura (mm)'
            ))
            ->add('anchura', null, array(
                'label' => 'Anchura (mm)'
            ))
            ->add('longitud', null, array(
                'label' => 'Longitud (mm)'
            ))
            ->add('batalla', null, array(
                'label' => 'Batalla (mm)'
            ))
            ->add('viaanterior', null, array(
                'label' => 'Vía Anterior (mm)'
            ))
            ->add('viaposterior', null, array(
                'label' => 'Vía Posterior (mm)'
            ))
            ->add('limiteco', null, array(
                'label' => 'Límite CO'
            ))
            ->add('combustible')
            ->add('fabricante', null, array(
                'label' => 'Fabricante del Motor'
            ))
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('dencomercial', null, array(
                'label' => 'Denominación Comercial'
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('modelo')
            ->add('ano', null, array(
                'label' => 'Año'
            ))
            ->add('cilindrada', null, array(
                'label' => 'Cilindrada (cc)'
            ))
            ->add('homologacion', null, array(
                'label' => 'Homologación'
            ))
            ->add('tipo')
            ->add('variante')
            ->add('codmotor', null, array(
                'label' => 'Código del Motor'
            ))
            ->add('numcilindros', null, array(
                'label' => 'Número de Cilindros'
            ))
            ->add('potencia', null, array(
                'label' => 'Potencia (Kw)'
            ))
            ->add('db', null, array(
                'label' => 'DB'
            ))
            ->add('rpm', null, array(
                'label' => 'RPM'
            ))
            ->add('distancia', null, array(
                'label' => 'Distancia (m)'
            ))
            ->add('tara', null, array(
                'label' => 'Tara (Kg)'
            ))
            ->add('mma', null, array(
                'label' => 'MMA (Kg)'
            ))
            ->add('asientos')
            ->add('neumaticos', null, array(
                'label' => 'Neumáticos'
            ))
            ->add('altura', null, array(
                'label' => 'Altura (mm)'
            ))
            ->add('anchura', null, array(
                'label' => 'Anchura (mm)'
            ))
            ->add('longitud', null, array(
                'label' => 'Longitud (mm)'
            ))
            ->add('batalla', null, array(
                'label' => 'Batalla (mm)'
            ))
            ->add('viaanterior', null, array(
                'label' => 'Vía Anterior (mm)'
            ))
            ->add('viaposterior', null, array(
                'label' => 'Vía Posterior (mm)'
            ))
            ->add('limiteco', null, array(
                'label' => 'Límite CO'
            ))
            ->add('combustible')
            ->add('fabricante', null, array(
                'label' => 'Fabricante del Motor'
            ))
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('dencomercial', null, array(
                'label' => 'Denominación Comercial'
            ))
        ;
    }
}
