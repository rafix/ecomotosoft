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
            ->add('ano')
            ->add('cilindrada')
            ->add('homologacion')
            ->add('tipo')
            ->add('variante')
            ->add('codmotor')
            ->add('numcilindros')
            ->add('potencia')
            ->add('db')
            ->add('rpm')
            ->add('distancia')
            ->add('tara')
            ->add('mma')
            ->add('asientos')
            ->add('neumaticos')
            ->add('altura')
            ->add('anchura')
            ->add('longitud')
            ->add('batalla')
            ->add('viaanterior')
            ->add('viaposterior')
            ->add('limiteco')
//            ->add('idModelo')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('modelo')
            ->add('ano')
            ->add('cilindrada')
            ->add('homologacion')
            ->add('tipo')
            ->add('variante')
            ->add('codmotor')
            ->add('numcilindros')
            ->add('potencia')
            ->add('db')
            ->add('rpm')
            ->add('distancia')
            ->add('tara')
            ->add('mma')
            ->add('asientos')
            ->add('neumaticos')
            ->add('altura')
            ->add('anchura')
            ->add('longitud')
            ->add('batalla')
            ->add('viaanterior')
            ->add('viaposterior')
            ->add('limiteco')
//            ->add('idModelo')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
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
            ->add('ano')
            ->add('cilindrada')
            ->add('homologacion')
            ->add('tipo')
            ->add('variante')
            ->add('codmotor')
            ->add('numcilindros')
            ->add('potencia')
            ->add('db')
            ->add('rpm')
            ->add('distancia')
            ->add('tara')
            ->add('mma')
            ->add('asientos')
            ->add('neumaticos')
            ->add('altura')
            ->add('anchura')
            ->add('longitud')
            ->add('batalla')
            ->add('viaanterior')
            ->add('viaposterior')
            ->add('limiteco')
//            ->add('idModelo')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('modelo')
            ->add('ano')
            ->add('cilindrada')
            ->add('homologacion')
            ->add('tipo')
            ->add('variante')
            ->add('codmotor')
            ->add('numcilindros')
            ->add('potencia')
            ->add('db')
            ->add('rpm')
            ->add('distancia')
            ->add('tara')
            ->add('mma')
            ->add('asientos')
            ->add('neumaticos')
            ->add('altura')
            ->add('anchura')
            ->add('longitud')
            ->add('batalla')
            ->add('viaanterior')
            ->add('viaposterior')
            ->add('limiteco')
//            ->add('idModelo')
        ;
    }
}
