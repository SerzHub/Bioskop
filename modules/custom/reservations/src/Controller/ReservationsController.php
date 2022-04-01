<?php
/**
 * @file
 * Contains \Drupal\reservations\Controller\ReservationsController.
 */

namespace Drupal\reservations\Controller;

class ReservationsController {
  public function content() {
    $movies = \Drupal::entityTypeManager() -> getStorage('node') -> loadByProperties(['type' => 'Movie']); 

    return array(
      '#theme' => 'reservations', 
      '#movies' => $movies,
      'title' => 'blssbbs',
    );
  }
}

