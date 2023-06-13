<?php

namespace App\Traits;

trait WebTrait {


  public function jsonSearch ($html) {
    $dom_container = '#table-wrapper';
    $dom_action = 'replace-with';

    $jsondata['dom_html'][] = array(
        'selector' => $dom_container,
        'action' => $dom_action,
        'value' => $html);

    return response()->json($jsondata);
  }

}