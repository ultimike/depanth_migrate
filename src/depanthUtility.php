<?php

namespace Drupal\depanth_migrate;

class depanthUtility {

  // Removes all dollar signs.
  public function remove_dollar_sign($input) {
    return str_replace('$', '', $input);
  }

}
