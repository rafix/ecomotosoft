<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipempleadosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tipempleado')
//            ->add('tipempleado2')
//            ->add('tipempleado3')
//            ->add('tipempleado4')
//            ->add('tipempleado5')
//            ->add('tipempleado6')
//            ->add('idTipempleado')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tipempleado')
//            ->add('tipempleado2')
//            ->add('tipempleado3')
//            ->add('tipempleado4')
//            ->add('tipempleado5')
//            ->add('tipempleado6')
//            ->add('idTipempleado')
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
            ->add('tipempleado')
//            ->add('tipempleado2')
//            ->add('tipempleado3')
//            ->add('tipempleado4')
//            ->add('tipempleado5')
//            ->add('tipempleado6')
//            ->add('idTipempleado')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tipempleado')
//            ->add('tipempleado2')
//            ->add('tipempleado3')
//            ->add('tipempleado4')
//            ->add('tipempleado5')
//            ->add('tipempleado6')
//            ->add('idTipempleado')
        ;
    }

//    public function __toString()
//    {
//        return $this->tipempleado1;
//    }
}
