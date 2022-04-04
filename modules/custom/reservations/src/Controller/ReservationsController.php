<?php
/**
 * @file
 * Contains \Drupal\reservations\Controller\ReservationsController.
 */

namespace Drupal\reservations\Controller;
use \Drupal\node\Entity\Node;

class ReservationsController {
  public function return_all_movies() {
    $genres = \Drupal::entityTypeManager() -> getStorage('taxonomy_term') -> loadByProperties(['vid' => 'type']);

    $genre_id = \Drupal::request()->query->get('type');

    $query = \Drupal::entityQuery('node')->condition('type', 'movie');

    if(!empty($genre_id))
    {
      $query->condition('field_movie_type', $genre_id);
    }

    $movies = Node::loadMultiple($query->execute());
    $a = 1;


    return array(
      '#theme' => 'reservations', 
      '#movies' => $movies,
      '#genres' => $genres,
    );
  }
}



