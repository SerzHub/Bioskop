<?php
/**
 * @file
 * Contains \Drupal\movie_reservations\Controller\MovieController.
 */
namespace Drupal\movie_reservations\Controller;
class MovieController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => ('List of available movies: '),
    );
  }
}
