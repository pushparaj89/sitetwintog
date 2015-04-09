  public function getPager($model)
  {
    $class = $this->getPagerClass();
    $filters = sfContext::getInstance()->getUser()->getAttribute('<?php echo $this->getModuleName() ?>.filters', null, 'admin_module');
    if(sfContext::getInstance()->getActionName() == 'print' or isset($filters['csv']))
        $max_per_page = null;
    else
        $max_per_page = $this->getPagerMaxPerPage();
    return new $class($model, $max_per_page);
  }

  public function getPagerClass()
  {
    return '<?php echo isset($this->config['list']['pager_class']) ? $this->config['list']['pager_class'] : 'sfDoctrinePager' ?>';
<?php unset($this->config['list']['pager_class']) ?>
  }

  public function getPagerMaxPerPage()
  {
    if(isset($_REQUEST['records'])) {
        sfContext::getInstance()->getUser()->setAttribute('records', $_REQUEST['records']);
        return sfContext::getInstance()->getUser()->getAttribute('records');
    }
    else if(sfContext::getInstance()->getUser()->getAttribute('records') != null) {
        return sfContext::getInstance()->getUser()->getAttribute('records');
    }
    else {
        return <?php echo isset($this->config['list']['max_per_page']) ? (integer) $this->config['list']['max_per_page'] : 10 ?>;
    }
<?php unset($this->config['list']['max_per_page']) ?>
  }
