<?php

/**
 * leve actions.
 *
 * @package    ffxiv
 * @subpackage leve
 * @author     your_name_goes_here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class leveActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    // Shows every record in the database
    $this->leves = Doctrine_Core::getTable('ffLeve')->createQuery()->from('ffLeve')->where('name != ?', 'foobar')->execute();
    // Not sure if this is needed
    //$this->page = $this->getRoute()->getObject();

    #$this->getUser()->getGuardUser()->getUsername();
    $this->username = $this->getUser()->getGuardUser()->getUsername();

  }

 /**
  * Executes individual action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndividual(sfWebRequest $request)
  {
    
  #  $this->leve = $this->getRoute()->getObject();
    $this->leves = Doctrine_Query::create()->from('ffLeve')->where('id = ?', $request->getParameter('id'))->execute();

    #$this->forward('default', 'module');
  }
}
