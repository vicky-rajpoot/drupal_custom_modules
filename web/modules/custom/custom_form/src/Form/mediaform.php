<?php

namespace Drupal\custom_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;
use Drupal\image\Entity\ImageStyle;
// use Drupal\media_entity\Entity\Media;
use Drupal\media\Entity\Media;
use Drupal\Core\Config\ConfigBase; 

class mediaform extends FormBase 
{
    public function getFormId() {
        return 'form_id';
    }
    
    public function buildForm(array $form, FormStateInterface $form_state) {
      // $config = $this->config('custom_form.settings');
      $form['file'] = [
        '#type' => 'managed_file',
        '#allowed_bundles' => ['image'],
        '#title' => 'My image',
        '#name' => 'my_custom_file',
        '#description' => $this->t('my file description'),
        // '#default_value' => $config->get('my_file'),
        '#upload_location' => 'public://mediafile'
      ];
        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = array(
          '#type' => 'submit',
          '#value' => $this->t('Upload'),
        );
        return $form;
      }
      public function submitForm(array &$form, FormStateInterface $form_state) 
      {
        $image=$form_state->getvalue(['file']);

        $fid=$image[0];
        $file = File::load($fid);
        $image_uri = ImageStyle::load('thumbnail')->buildUrl($file->getFileUri());
         $name='001';
        $media = Media::create([
          'bundle'=> 'image',
          'uid' => \Drupal::currentUser()->id(),
          'langcode' => \Drupal::languageManager()->getDefaultLanguage()->getId(),
              'field_media_image' => [
                'target_id' => $file->id(),
                'alt' => $name,
                'title' => $name
              ],
            ]);
           
            $media->setName($name)->setPublished(TRUE)->save();
        $image=$form_state->getvalue(['file']);
        // dd($image);
          $node = Node::create([
            'type'  => 'fileupload',
            'title' => 'check-image',
            'body' => 'here is my node body',
            'field_image' =>  $image,
            'field_mediaimage' => $media,
          ]);
          $node->save();
      }
}

?>