<?php
include 'ajax-handler.php';

class PopupDataHandler extends AjaxHandler {
    public function handleRequest() {
        $this->response('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet posuere libero. Vestibulum tincidunt aliquam scelerisque. Proin metus nibh, convallis non leo sit amet, viverra accumsan nunc.');
    }
}

$popupData = new PopupDataHandler();
$popupData->handleRequest();

?>