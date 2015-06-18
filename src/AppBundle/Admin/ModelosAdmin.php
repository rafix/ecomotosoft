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
            ->add('cilindrada')
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
            ->add('potencia')
            ->add('db', null, array(
                'label' => 'DB'
            ))
            ->add('rpm', null, array(
                'label' => 'RPM'
            ))
            ->add('distancia')
            ->add('tara')
            ->add('mma', null, array(
                'label' => 'MMA'
            ))
            ->add('asientos')
            ->add('neumaticos', null, array(
                'label' => 'Neumáticos'
            ))
            ->add('altura')
            ->add('anchura')
            ->add('longitud')
            ->add('batalla')
            ->add('viaanterior', null, array(
                'label' => 'Vía Anterior'
            ))
            ->add('viaposterior', null, array(
                'label' => 'Vía Posterior'
            ))
            ->add('limiteco')
            ->add('combustible')
            ->add('fabricante')
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
//            ->add('cilindrada')
//            ->add('homologacion', null, array(
//                'label' => 'Homologación'
//            ))
            ->add('tipo')
//            ->add('variante')
//            ->add('codmotor', null, array(
//                'label' => 'Código del Motor'
//            ))
//            ->add('numcilindros', null, array(
//                'label' => 'Número de Cilindros'
//            ))
//            ->add('potencia')
//            ->add('db', null, array(
//                'label' => 'DB'
//            ))
//            ->add('rpm', null, array(
//                'label' => 'RPM'
//            ))
//            ->add('distancia')
//            ->add('tara')
//            ->add('mma', null, array(
//                'label' => 'MMA'
//            ))
//            ->add('asientos')
//            ->add('neumaticos', null, array(
//                'label' => 'Neumáticos'
//            ))
//            ->add('altura')
//            ->add('anchura')
//            ->add('longitud')
//            ->add('batalla')
//            ->add('viaanterior', null, array(
//                'label' => 'Vía Anterior'
//            ))
//            ->add('viaposterior', null, array(
//                'label' => 'Vía Posterior'
//            ))
//            ->add('limiteco')
            ->add('combustible')
            ->add('fabricante')
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
//            ->add('dencomercial', null, array(
//                'label' => 'Denominación Comercial'
//            ))
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
            ->add('cilindrada')
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
            ->add('potencia')
            ->add('db', null, array(
                'label' => 'DB'
            ))
            ->add('rpm', null, array(
                'label' => 'RPM'
            ))
            ->add('distancia')
            ->add('tara')
            ->add('mma', null, array(
                'label' => 'MMA'
            ))
            ->add('asientos')
            ->add('neumaticos', null, array(
                'label' => 'Neumáticos'
            ))
            ->add('altura')
            ->add('anchura')
            ->add('longitud')
            ->add('batalla')
            ->add('viaanterior', null, array(
                'label' => 'Vía Anterior'
            ))
            ->add('viaposterior', null, array(
                'label' => 'Vía Posterior'
            ))
            ->add('limiteco')
            ->add('combustible')
            ->add('fabricante')
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
            ->add('cilindrada')
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
            ->add('potencia')
            ->add('db', null, array(
                'label' => 'DB'
            ))
            ->add('rpm', null, array(
                'label' => 'RPM'
            ))
            ->add('distancia')
            ->add('tara')
            ->add('mma', null, array(
                'label' => 'MMA'
            ))
            ->add('asientos')
            ->add('neumaticos', null, array(
                'label' => 'Neumáticos'
            ))
            ->add('altura')
            ->add('anchura')
            ->add('longitud')
            ->add('batalla')
            ->add('viaanterior', null, array(
                'label' => 'Vía Anterior'
            ))
            ->add('viaposterior', null, array(
                'label' => 'Vía Posterior'
            ))
            ->add('limiteco')
            ->add('combustible')
            ->add('fabricante')
            ->add('tipvehiculo', null, array(
                'label' => 'Tipo de Vehículo'
            ))
            ->add('dencomercial', null, array(
                'label' => 'Denominación Comercial'
            ))
        ;
    }
}
