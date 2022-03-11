<?php
namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\node\Entity\Node;
use Drupal\Core\Database\Database;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Ajax\AlertCommand;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Link;


class Test_Form extends FormBase 
{
   public $text; 
    public function getFormId() {
        return 'form_id';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['username'] = array(
          '#type' => 'textfield',
          '#title' => t('Enter username:'),
          '#required' => TRUE,
          '#prefix' => '<div id="div-fname">',
          '#suffix' => '</div><div id="div-fname-message"></div>',
        );
        $form['useremail'] = array(
          '#type' => 'email',
          '#title' => t('Enter Email ID:'),
          '#required' => TRUE,
        );
        $form['user_phone'] = array (
          '#type' => 'tel',
          '#title' => t('Enter Contact Number'),
          '#prefix' => '<div id="div-phone">',
          '#suffix' => '</div><div id="div-phone-message"></div>',
        );
        // $form['actions']['#type'] = 'actions';
        $form['actions'] = array(
          '#type' => 'button',
          '#value' => $this->t('Register'),
          '#ajax' => ['callback' => '::submitForm',],
        );
        // $form['actions']['button'] = array(
        //   '#type' => 'button',
        //   '#value' => $this->t('Refresh'),
        //   '#ajax' => ['callback' => '::clearerror',],
        // );
        $form['message'] = [
            '#type' => 'markup',
            '#markup' => '<div class="result_message"></div>',
        ];
        $form['#attached']['library']=[
          'core/jquery',
          'core/drupal.ajax',
          'core/jquery.once',
          'core/jquery.form',
        ];
        return $form;
      }
        // public function clearerror(array $form,FormStateInterface $form_state){
        //   $error=0;
        // }
     

      public function setMessage(array $form, FormStateInterface $form_state) 
      {
        
        

     }
      public function submitForm(array &$form, FormStateInterface $form_state){
        $response = new AjaxResponse();
        if(strlen($form_state->getValue('username')) < 3) {
          
          $css = ['border' => '1px solid red'];
          $text_css = ['color' => 'red'];
         $message = ('First Name must contain minimun 4 characters.');
         $response->addCommand(new \Drupal\Core\Ajax\CssCommand('#div-fname', $css));
         $response->addCommand(new \Drupal\Core\Ajax\CssCommand('#div-fname-message', $text_css));
         $response->addCommand(new HtmlCommand('#div-fname-message', $message));
         $error=1;
         // return $response1;
        }else{
          $error=0;
        
          $css = ['border' => '1px solid red'];
          $text_css = ['color' => 'green'];
         $message = 'Great Job';
         $response->addCommand(new \Drupal\Core\Ajax\CssCommand('#div-fname-message', $text_css));
         $response->addCommand(new HtmlCommand('#div-fname-message', $message));
        
         
        }
        if(strlen($form_state->getValue('user_phone')) < 10) {
          
         $message = ('Mobile number must be of 10 digits.');
          $css = ['border' => '1px solid red'];
          $text_css = ['color' => 'red'];
         $response->addCommand(new \Drupal\Core\Ajax\CssCommand('#div-phone', $css));
         $response->addCommand(new \Drupal\Core\Ajax\CssCommand('#div-phone-message', $text_css));
         $response->addCommand(new HtmlCommand('#div-phone-message', $message));
         $error=1;
         // return $response;
        }else{
          $error=0;
         
         $message = ('Great Job.');
         $text_css = ['color' => 'green'];
         $response1->addCommand(new \Drupal\Core\Ajax\CssCommand('#div-phone-message', $text_css));
         $response1->addCommand(new HtmlCommand('#div-phone-message', $message));
        }
        // $response->addCommand(new HtmlCommand('#div-phone-message',$message));
         // return $response;
        if($error!=0){
          return $response;
          
          $error=0;
        }else{
           // $output =$form_state->getValues();
          $name=$form_state->getvalue(['username']);
          $email=$form_state->getvalue(['useremail']);
          $phone=$form_state->getvalue(['user_phone']);
          $x = array();
          $x[] = $name;
          $x[] = $email;
          $x[] = $phone;
          $output= implode(",",$x);
          $node = Node::create([
            'type'  => 'clothes',
            'title' => $name,
            'body' => $output,
          ]);
          $node->save();
        }
      }
     
}
?>


