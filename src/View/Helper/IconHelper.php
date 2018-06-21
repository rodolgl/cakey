<?php
namespace App\View\Helper;
use Cake\View\Helper\HtmlHelper;
class IconHelper extends HtmlHelper {

// initialize() hook is available since 3.2. For prior versions you can
// override the constructor if required.

  public function initialize(array $config) {

  }

  public function gIcon($icon) {
    $format = 'glyphicon glyphicon-%s'; return $this->tag('span', '', [ 'class' => sprintf($format, $icon)]);
  }

  public function faIcon($icon)
  {
    return $this->tag('i', '', [ 'class' => $icon ]);
  }

}
