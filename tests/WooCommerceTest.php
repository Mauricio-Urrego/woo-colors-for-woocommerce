<?php

namespace Mauriciourrego\WooColorsForWooCommerce;

use PHPUnit\Framework\TestCase;

class WooCommerceTest extends TestCase {

  public function testInit() {
    WooCommerce::init();
  }

  public function testProcess_colors() {
    WooCommerce::process_colors();
  }
}
