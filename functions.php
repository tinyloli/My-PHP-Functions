<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function makeBun($type) {
  if ($type == 'pork') {
    echo '<p>A pork bun is also called cha sui bao and is a steamed bun with pork.</p>';
  } else if ($type == 'chicken') {
    echo '<p>Just like a pork bun, although it has chicken.</p>';
  } else {
    echo '<p>That&rsquo;s not a real meat bun.</p>';
  }
}