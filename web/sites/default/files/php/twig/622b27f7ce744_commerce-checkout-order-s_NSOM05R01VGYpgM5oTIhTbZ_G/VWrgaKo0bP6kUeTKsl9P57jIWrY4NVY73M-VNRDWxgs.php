<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/bootstrap_barrio/templates/commerce/checkout/commerce-checkout-order-summary.html.twig */
class __TwigTemplate_5758490cbe89bb8e70565651598740a3d704e4f46de0e60fa51b47a738d7ded3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_items' => [$this, 'block_order_items'],
            'totals' => [$this, 'block_totals'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 24, "for" => 27, "if" => 30];
        $filters = ["escape" => 23, "number_format" => 29, "commerce_entity_render" => 31, "commerce_price_format" => 35];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if'],
                ['escape', 'number_format', 'commerce_entity_render', 'commerce_price_format'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "checkout-order-summary", 1 => "table-responsive-sm"], "method")), "html", null, true);
        echo ">
  ";
        // line 24
        $this->displayBlock('order_items', $context, $blocks);
        // line 41
        echo "  ";
        $this->displayBlock('totals', $context, $blocks);
        // line 44
        echo "</div>";
    }

    // line 24
    public function block_order_items($context, array $blocks = [])
    {
        // line 25
        echo "    <table class=\"table table-striped table-hover table-sm\">
      <tbody>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order_entity"] ?? null), "getItems", []));
        foreach ($context['_seq'] as $context["_key"] => $context["order_item"]) {
            // line 28
            echo "        <tr>
          <td>";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["order_item"], "getQuantity", []))), "html", null, true);
            echo "&nbsp;x</td>
          ";
            // line 30
            if ($this->getAttribute($context["order_item"], "hasPurchasedEntity", [])) {
                // line 31
                echo "            <td>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce\TwigExtension\CommerceTwigExtension')->renderEntity($this->sandbox->ensureToStringAllowed($this->getAttribute($context["order_item"], "getPurchasedEntity", [])), "summary"), "html", null, true);
                echo "</td>
          ";
            } else {
                // line 33
                echo "            <td>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["order_item"], "label", [])), "html", null, true);
                echo "</td>
          ";
            }
            // line 35
            echo "          <td>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute($context["order_item"], "getTotalPrice", []))), "html", null, true);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </tbody>
    </table>
  ";
    }

    // line 41
    public function block_totals($context, array $blocks = [])
    {
        // line 42
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_totals"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/commerce/checkout/commerce-checkout-order-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  119 => 41,  113 => 38,  103 => 35,  97 => 33,  91 => 31,  89 => 30,  85 => 29,  82 => 28,  78 => 27,  74 => 25,  71 => 24,  67 => 44,  64 => 41,  62 => 24,  57 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the checkout order summary.
 *
 * The rendered order totals come from commerce-order-total-summary.html.twig.
 * See commerce-order-receipt.html.twig for examples of manual total theming.
 *
 * Available variables:
 * - order_entity: The order entity.
 * - checkout_step: The current checkout step.
 * - totals: An array of order total values with the following keys:
 *   - subtotal: The order subtotal price.
 *   - adjustments: An array of adjustment totals:
 *     - type: The adjustment type.
 *     - label: The adjustment label.
 *     - total: The adjustment total price.
 *     - weight: The adjustment weight, taken from the adjustment type.
 *   - total: The order total price.
 * - rendered_totals: The rendered order totals.
 */
#}
<div{{ attributes.addClass('checkout-order-summary', 'table-responsive-sm') }}>
  {% block order_items %}
    <table class=\"table table-striped table-hover table-sm\">
      <tbody>
      {% for order_item in order_entity.getItems %}
        <tr>
          <td>{{ order_item.getQuantity|number_format }}&nbsp;x</td>
          {% if order_item.hasPurchasedEntity %}
            <td>{{ order_item.getPurchasedEntity|commerce_entity_render('summary') }}</td>
          {% else %}
            <td>{{- order_item.label -}}</td>
          {% endif %}
          <td>{{- order_item.getTotalPrice|commerce_price_format -}}</td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  {% endblock %}
  {% block totals %}
    {{ rendered_totals }}
  {% endblock %}
</div>", "themes/contrib/bootstrap_barrio/templates/commerce/checkout/commerce-checkout-order-summary.html.twig", "C:\\php7.2\\htdocs\\drupal_alpha\\web\\themes\\contrib\\bootstrap_barrio\\templates\\commerce\\checkout\\commerce-checkout-order-summary.html.twig");
    }
}
