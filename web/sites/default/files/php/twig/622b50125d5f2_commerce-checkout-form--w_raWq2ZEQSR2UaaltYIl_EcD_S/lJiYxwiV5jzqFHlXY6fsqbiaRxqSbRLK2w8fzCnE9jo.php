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

/* themes/contrib/bootstrap_barrio/templates/commerce/checkout/commerce-checkout-form--with-sidebar.html.twig */
class __TwigTemplate_35e11150a4ca36525e685017d4a0a3e5fd7125dc7748d33d438f7d3b86e08ff3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 18];
        $filters = ["escape" => 15, "without" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                ['escape', 'without'],
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
        // line 12
        echo "<div class=\"layout-checkout-form\">
  <div class=\"row\">
    <div class=\"col-sm-6\">
      ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "sidebar", "actions"), "html", null, true);
        echo "
    </div>
    <div class=\"col-sm-6\">
      <h3>";
        // line 18
        echo t("Order Summary", array());
        echo "</h3>
      ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "sidebar", [])), "html", null, true);
        echo "
    </div>
  </div>
  <div class=\"layout-region-checkout-footer\">
    ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "actions", [])), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/commerce/checkout/commerce-checkout-form--with-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  70 => 19,  66 => 18,  60 => 15,  55 => 12,);
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
 * Two column template for the checkout form.
 *
 * Available variables:
 * - form: The form.
 *
 * @ingroup themeable
 */
#}
<div class=\"layout-checkout-form\">
  <div class=\"row\">
    <div class=\"col-sm-6\">
      {{ form|without('sidebar', 'actions') }}
    </div>
    <div class=\"col-sm-6\">
      <h3>{% trans %} Order Summary {% endtrans %}</h3>
      {{ form.sidebar }}
    </div>
  </div>
  <div class=\"layout-region-checkout-footer\">
    {{ form.actions }}
  </div>
</div>
", "themes/contrib/bootstrap_barrio/templates/commerce/checkout/commerce-checkout-form--with-sidebar.html.twig", "C:\\php7.2\\htdocs\\drupal_alpha\\web\\themes\\contrib\\bootstrap_barrio\\templates\\commerce\\checkout\\commerce-checkout-form--with-sidebar.html.twig");
    }
}
