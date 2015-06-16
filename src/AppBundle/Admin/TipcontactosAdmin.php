<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipcontactosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipcontacto1')
            ->add('tipcontacto2')
            ->add('tipcontacto3')
            ->add('tipcontacto4')
            ->add('tipcontacto5')
            ->add('tipcontacto6')
//            ->add('idTipcontacto')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipcontacto1')
            ->add('tipcontacto2')
            ->add('tipcontacto3')
            ->add('tipcontacto4')
            ->add('tipcontacto5')
            ->add('tipcontacto6')
//            ->add('idTipcontacto')
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
            ->add('tipcontacto1')
            ->add('tipcontacto2')
            ->add('tipcontacto3')
            ->add('tipcontacto4')
            ->add('tipcontacto5')
            ->add('tipcontacto6')
//            ->add('idTipcontacto')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tipcontacto1')
            ->add('tipcontacto2')
            ->add('tipcontacto3')
            ->add('tipcontacto4')
            ->add('tipcontacto5')
            ->add('tipcontacto6')
//            ->add('idTipcontacto')
        ;
    }
}
