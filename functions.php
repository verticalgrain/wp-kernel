<?php

// Includes If order is important, replace this and require each file separately.
foreach (glob(dirname(__FILE__) . '/includes/*.php') as $filename) {
  require_once($filename);
}