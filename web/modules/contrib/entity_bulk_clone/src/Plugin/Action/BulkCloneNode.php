<?php

namespace Drupal\entity_bulk_clone\Plugin\Action;

use Drupal\Core\Action\ActionBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Entity Bulk clone of nodes.
 *
 * @Action(
 *   id = "bulk_clone_node_action",
 *   label = @Translation("Bulk Clone"),
 *   type = "node",
 *   confirm = TRUE
 * )
 */
class BulkCloneNode extends ActionBase {

  /**
   * {@inheritdoc}
   */
  public function executeMultiple(array $objects) {
    $results = [];
    foreach ($objects as $entity) {
      $results[] = $this->execute($entity);
    }

    if (isset($results) && !empty($results)) {
      $batch = [
        'title' => $this->t('Content Bulk Cloning...'),
        'operations' => $results,
        'finished' => '\Drupal\entity_bulk_clone\Plugin\BulkCloneNode::batchFinished',
      ];
      batch_set($batch);
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function batchFinished($success, $results, $operations) {
    // The 'success' parameter means no fatal PHP errors were detected.
    if ($success) {
      $message = \Drupal::translation()
        ->formatPlural(count($results), 'Bulk Clone was applied to ', '@count items.');
      \Drupal::messenger()->addStatus($message);
    }
    else {
      $message = $this->t('Finished with an error.');
      \Drupal::messenger()->addError($message);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function execute($entity = NULL) {
    $replicator = \Drupal::service('replicate.replicator');
    $duplicate_entity = $replicator->replicateByEntityId($entity->getEntityTypeId(), $entity->id());
    $title = $duplicate_entity->getTitle();
    $duplicate_entity->setTitle($title . ' - Bulk Cloned');
    $request_time = \Drupal::time()->getRequestTime();
    $duplicate_entity->setChangedTime($request_time);
    $duplicate_entity->save();
  }

  /**
   * {@inheritdoc}
   */
  public function access($object, AccountInterface $account = NULL, $return_as_object = FALSE) {
    $result = $object
      ->access('update', $account, TRUE)
      ->andIf($object->status->access('edit', $account, TRUE));

    return $return_as_object ? $result : $result->isAllowed();
  }

}
