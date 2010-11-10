<?php

/**
 * leveChecklist actions.
 *
 * @package    ffxiv
 * @subpackage leveChecklist
 * @author     your_name_goes_here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class leveChecklistActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    #$this->forward('default', 'module');
  }
/*
  public function executeShow(sfWebRequest $request)
  {
    #$this->job = Doctrine::getTable('JobeetJob')->find($request->getParameter('id'));
    #$this->form = Doctrine::getTable('ffLeveChecklist')->find($request->getParameter('id'));
    #$this->form = $this->getRoute()->getObject();
    #$this->forward404Unless($this->job);
    #$this->getUser()->addJobToHistory($this->job);
    #$this->lvez = $ffLeveChecklist;
    #$this->shitz = getParameter($ffLeveChecklist);
    #$this->form = new ffLeveChecklistForm($this->getRoute()->getObject());
    $this->form = new ffLeveChecklistForm();
  }

*/
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ffLeveChecklistForm();
    
    $this->user_id = $this->getUser()->getGuardUser()->id;

    // This grabs every record in the database
    $this->leves = Doctrine_Core::getTable('ffLeve')->createQuery()->from('ffLeve')->where('name != ?', 'dfdaldfasdfafasdf')->execute();
    $this->setTemplate('edit');
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new ffLeveChecklistForm();

    $this->user_id = $this->getUser()->getGuardUser()->id;

print $this->user_id;

print $this->form->is_visited;

exit();

print_r($this->form); exit();

    $this->user_id = $this->getUser()->getGuardUser()->id;
    $this->leves = Doctrine_Core::getTable('ffLeve')->createQuery()->from('ffLeve')->where('name != ?', 'dfdaldfasdfafasdf')->execute();
#    $this->leves = Doctrine_Core::getTable('ffLeve')->createQuery()->from('ffLeve')->where('name != ?', 'dfdaldfasdfafasdf')->execute();
#    $this->user_id = $this->getUser()->getGuardUser()->id;

    $ffLeveChecklist = $this->form->save();
#    $this->processForm($request, $this->form);
    $this->setTemplate('edit');
#    $ffLeveChecklist = $form->save();
  }


  public function executeEdit(sfWebRequest $request)
  {
#    $this->form = new ffLeveChecklistForm($this->getRoute()->getObject());

    $this->form = new ffLeveChecklistForm();
    
    $this->user_id = $this->getUser()->getGuardUser()->id;

    // This grabs every record in the database
    $this->leves = Doctrine_Core::getTable('ffLeve')->createQuery()->from('ffLeve')->where('name != ?', 'dfdaldfasdfafasdf')->execute();



#    $this->form = new ffLeveChecklistForm();
#    $this->setTemplate('new');
  }
/*
  public function executeUpdate(sfWebRequest $request)
  {
#    $this->form = new ffLeveChecklistForm($thhis->getRoute()->getObject());
    $this->form = new ffLeveChecklistForm();
    $this->processForm($request, $this->form);
    $this->setTemplate('edit');
  }
*/

/*
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $ffLeveChecklist = $this->getRoute()->getObject();
    $ffLeveChecklist->delete();

    $this->redirect('leveChecklist/index');
  }

*/
  public function processForm(sfWebRequest $request, sfForm $form)
  {
#    $form->bind(
#      $request->getParameter($form['is_visited'])
#      , $request->getFiles($form->getName())
#    );

    if ($form->isValid())
    {
      $ffLeveChecklist = $form->save();

      $this->redirect('ffLeveChecklist_dkfasdfedit', $ffLeveChecklist);
    } else {
      die('i died in processForm() function');
    }
  }

}
