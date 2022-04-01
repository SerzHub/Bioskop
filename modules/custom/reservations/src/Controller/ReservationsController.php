<?php
/**
 * @file
 * Contains \Drupal\reservations\Controller\ReservationsController.
 */

namespace Drupal\reservations\Controller;

class ReservationsController {
  public function return_all_movies() {
    $movies = \Drupal::entityTypeManager() -> getStorage('node') -> loadByProperties(['type' => 'Movie']); 

    return array(
      '#theme' => 'reservations', 
      '#movies' => $movies,
    );
  }
}

