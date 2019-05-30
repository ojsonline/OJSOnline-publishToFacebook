<?php
import("lib.pkp.classes.plugins.GenericPlugin");
class publishToFacebookPlugin extends GenericPlugin {
  function register($category, $path, $mainContextId = null) {
    $success = parent::register($category, $path, $mainContextId);
    if ($success && $this->getEnabled($mainContextId)) {
      // handlers here
    }
    $this->_registerTemplateResource();
    return $success;
  }
  function getDisplayName() {
    return "Publish To Facebook";
  }
  function getDescription() {
    return "Publish Issue or Article to Facebook";
  }
}
