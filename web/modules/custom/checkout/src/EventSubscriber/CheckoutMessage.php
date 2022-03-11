<?php

namespace Drupal\checkout\EventSubscriber;

use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\commerce_cart\Event\CartEntityAddEvent;
use Drupal\commerce_cart\Event\CartEvents;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\Core\Url;
use Drupal\commerce_checkout\Event;
use Drupal\user\UserInterface;


class CheckoutMessage implements EventSubscriberInterface{
	use StringTranslationTrait;
  /**
   * The messenger.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;
  public $account;
  /**
   * Constructs a new CartEventSubscriber object.
   *
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation.
   */
  public function __construct(MessengerInterface $messenger, TranslationInterface $string_translation) {
    $this->messenger = $messenger;
    $this->stringTranslation = $string_translation;
    
  }

	public static function getSubscribedEvents(){
		$events = [
			CartEvents::CART_ENTITY_ADD => 'checkoutmessager1',
		];
		return $events;
	} 

	public function checkoutmessager1(CartEntityAddEvent $event){
	$user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $uid = $user->get('uid')->value;
    if($uid==0){
    	$uid='user is unknown';
    }

    $this->messenger->addMessage($this->t($uid.' You have successfully purchased @entity',
			['@entity'=> $event->getEntity()->label(),]));

	}
}

