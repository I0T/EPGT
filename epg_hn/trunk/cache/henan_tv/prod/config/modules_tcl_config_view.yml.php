<?php
// auto-generated by sfViewConfigHandler
// date: 2013/05/23 11:20:04
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'EPG 节目单', false, false);

  $response->addStylesheet('base.css', '', array ());
  $response->addJavascript('jquery-1.4.3.min.js', '', array ());
  $response->addJavascript('jquery.ui.widget.js', '', array ());
  $response->addJavascript('jquery.tvui.js', '', array ());
  $response->addJavascript('nav.js', '', array ());


