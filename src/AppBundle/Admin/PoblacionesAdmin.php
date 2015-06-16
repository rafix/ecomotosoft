<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PoblacionesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('poblacion1')
            ->add('poblacion2')
            ->add('poblacion3')
            ->add('poblacion4')
            ->add('poblacion5')
            ->add('poblacion6')
            ->add('idPoblacion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('poblacion1')
            ->add('poblacion2')
            ->add('poblacion3')
            ->add('poblacion4')
            ->add('poblacion5')
            ->add('poblacion6')
            ->add('idPoblacion')
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
            ->add('poblacion1')
            ->add('poblacion2')
            ->add('poblacion3')
            ->add('poblacion4')
            ->add('poblacion5')
            ->add('poblacion6')
            ->add('idPoblacion')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('poblacion1')
            ->add('poblacion2')
            ->add('poblacion3')
            ->add('poblacion4')
            ->add('poblacion5')
            ->add('poblacion6')
            ->add('idPoblacion')
        ;
    }
}
