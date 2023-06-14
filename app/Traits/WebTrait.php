<?php

namespace App\Traits;

use Response;

trait WebTrait {


  public function jsonSearch ($html) {
    $dom_container = '#table-wrapper';
    $dom_action = 'replace-with';

    $jsondata['dom_html'][] = array(
        'selector' => $dom_container,
        'action' => $dom_action,
        'value' => $html);

    return Response::json($jsondata);
  }

  public function responseDirty() {
    $jsondata['notification'] = array('type' => 'danger', 'value' => 'Se debe modificar un valor');
    return Response::json($jsondata, 402);
  }

  public function showSuccessCreate() {
    request()->session()->flash('success-notification', 'Se ha creado con éxito');
  }

  public function showSuccessUpdate() {
    request()->session()->flash('success-notification', 'Se ha actualizado con éxito');
  }

  public function showSuccessDelete() {
    request()->session()->flash('success-notification', 'Se ha eliminado exitosamente');
  }
}