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

/* themes/contrib/bootstrap_barrio/templates/commerce/order/commerce-order-total-summary.html.twig */
class __TwigTemplate_28664f283bba2a855dd38fcfb4307f5108b38b2782de4016a48916c29e989b65 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 26];
        $filters = ["escape" => 21, "t" => 24, "commerce_price_format" => 24, "clean_class" => 27];
        $functions = ["attach_library" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 't', 'commerce_price_format', 'clean_class'],
                ['attach_library']
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
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("commerce_order/total_summary"), "html", null, true);
        echo "
<div";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div class=\"order-total-line order-total-line__subtotal\">
    <span class=\"order-total-line-label\">";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subtotal"));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["totals"] ?? null), "subtotal", []))), "html", null, true);
        echo "</span>
  </div>
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["totals"] ?? null), "adjustments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
            // line 27
            echo "    <div class=\"order-total-line order-total-line__adjustment order-total-line__adjustment--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "type", []))), "html", null, true);
            echo "\">
      <span class=\"order-total-line-label\">";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "label", [])), "html", null, true);
            echo " </span><span class=\"order-total-line-value\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute($context["adjustment"], "amount", []))), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  <div class=\"order-total-line order-total-line__total\">
    <span class=\"order-total-line-label\">";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total"));
        echo " </span><span class=\"order-total-line-value\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\commerce_price\TwigExtension\PriceTwigExtension')->formatPrice($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["totals"] ?? null), "total", []))), "html", null, true);
        echo "</span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/commerce/order/commerce-order-total-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  91 => 31,  80 => 28,  75 => 27,  71 => 26,  64 => 24,  59 => 22,  55 => 21,);
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
 * Default order total summary template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - order_entity: The order entity.
 * - totals: An array of order totals values with the following keys:
 *   - subtotal: The order subtotal price.
 *   - adjustments: The adjustments:
 *     - type: The adjustment type.
 *     - label: The adjustment label.
 *     - amount: The adjustment amount.
 *     - percentage: The decimal adjustment percentage, when available. For example, \"0.2\" for a 20% adjustment.
 *   - total: The order total price.
 *
 * @ingroup themeable
 */
#}
{{ attach_library('commerce_order/total_summary') }}
<div{{ attributes }}>
  <div class=\"order-total-line order-total-line__subtotal\">
    <span class=\"order-total-line-label\">{{ 'Subtotal'|t }} </span><span class=\"order-total-line-value\">{{ totals.subtotal|commerce_price_format }}</span>
  </div>
  {% for adjustment in totals.adjustments %}
    <div class=\"order-total-line order-total-line__adjustment order-total-line__adjustment--{{ adjustment.type|clean_class }}\">
      <span class=\"order-total-line-label\">{{ adjustment.label }} </span><span class=\"order-total-line-value\">{{ adjustment.amount|commerce_price_format }}</span>
    </div>
  {% endfor %}
  <div class=\"order-total-line order-total-line__total\">
    <span class=\"order-total-line-label\">{{ 'Total'|t }} </span><span class=\"order-total-line-value\">{{ totals.total|commerce_price_format }}</span>
  </div>
</div>
", "themes/contrib/bootstrap_barrio/templates/commerce/order/commerce-order-total-summary.html.twig", "C:\\php7.2\\htdocs\\drupal_alpha\\web\\themes\\contrib\\bootstrap_barrio\\templates\\commerce\\order\\commerce-order-total-summary.html.twig");
    }
}
