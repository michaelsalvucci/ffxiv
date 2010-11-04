<?php

/**
 * home actions.
 *
 * @package    ffxiv
 * @subpackage home
 * @author     your_name_goes_here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    #$this->forward('default', 'module');
    #$this->webroot = sfConfig::get('sf_web_dir');   # /home/michael/_GIT/ffxiv/web
    #$this->webroot = dirname(__FILE__); # /home/michael/_GIT/ffxiv/apps/frontend/modules/home/actions
  }
}
