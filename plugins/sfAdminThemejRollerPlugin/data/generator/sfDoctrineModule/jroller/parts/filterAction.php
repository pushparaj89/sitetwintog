  public function executeFilter(sfWebRequest $request)
  {
    $this->setPage(1);

    if ($request->hasParameter('_reset'))
    {
      $this->setFilters($this->configuration->getFilterDefaults());

      $this->redirect('@<?php echo $this->getUrlForAction('list') ?>');
    }

    $this->filters = $this->configuration->getFilterForm($this->getFilters());

    $this->filters->bind($request->getParameter($this->filters->getName()));
    if ($this->filters->isValid())
    {
      
      $this->setFilters($this->filters->getValues());
      if($request->getParameter('csv') == 1) {
                $this->setFilters(array('csv' => 1));
                $this->setLayout('minimal');
                $this->getResponse()->clearHttpHeaders();
                $this->getResponse()->setHttpHeader('Content-Type', 'text/x-csv');
                $this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename=<?php echo $this->getModuleName() ?>_list.csv');
                
       }else{

                $this->redirect('@<?php echo $this->getUrlForAction('list') ?>');
       }
       
    }
    else {
        $this->getUser()->setFlash('error', 'Please enter valid inputs in filters');
        $this->redirect('@<?php echo $this->getUrlForAction('list') ?>');
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
    
    if($request->getParameter('csv') == 1){
        $this->setTemplate('csvList');
        $this->setFilters($this->configuration->getFilterDefaults());
    }
    else {
        $this->setTemplate('index');
    }
  }
