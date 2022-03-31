<?php
/**
 * @file
 * Contains \Drupal\movie_reservations\Controller\MovieController.
 */

namespace Drupal\movie_reservations\Controller;
class MovieController {
  public function content() {
    $movies = \Drupal::entityTypeManager() -> getStorage('node') -> loadByProperties(['type' => 'Movie']); 

    return array(
      '#theme' => 'movie_reservations', 
      '#movies' => $movies,
      'title' => 'blssbbs',
    );
  }
}

