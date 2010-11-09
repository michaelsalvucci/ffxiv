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

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ffLeveChecklistForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new ffLeveChecklistForm();
    $this->processForm($request, $this->form);
    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new ffLeveChecklistForm($this->getRoute()->getObject());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new JobeetJobForm($this->getRoute()->getObject());
    $this->processForm($request, $this->form);
    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $ffLeveChecklist = $this->getRoute()->getObject();
    $ffLeveChecklist->delete();

    $this->redirect('leveChecklist/index');
  }

  public function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
      $request->getParameter($form->getName()),
      $request->getFiles($form->getName())
    );

    if ($form->isValid())
    {
      $ffLeveChecklist = $form->save();

      $this->redirect('leveChecklist_show', $ffLeveChecklist);
    }
  }

}
