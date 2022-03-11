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

/* modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig */
class __TwigTemplate_fc0a411ebbd6d9c6ac3b953f8aa0c2dee33fcd268b71861942e9577b7a74b88c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "for" => 23, "if" => 25, "include" => 27];
        $filters = ["escape" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape'],
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
        // line 13
        $context["classes"] = [0 => "form-checkboxes", 1 => "bef-checkboxes", 2 => ((        // line 16
($context["is_nested"] ?? null)) ? ("bef-nested") : ("")), 3 => ((        // line 17
($context["show_select_all_none"] ?? null)) ? ("bef-select-all-none") : ("")), 4 => ((        // line 18
($context["show_select_all_none_nested"] ?? null)) ? ("bef-select-all-none-nested") : ("")), 5 => ((        // line 19
($context["display_inline"] ?? null)) ? ("form--inline") : (""))];
        // line 21
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 22
        $context["current_nesting_level"] = 0;
        // line 23
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "    ";
            $context["item"] = $this->getAttribute(($context["element"] ?? null), $context["child"]);
            // line 25
            echo "    ";
            if (($context["is_nested"] ?? null)) {
                // line 26
                echo "      ";
                $context["new_nesting_level"] = $this->getAttribute(($context["depth"] ?? null), $context["child"]);
                // line 27
                echo "      ";
                $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig", 27)->display($context);
                // line 28
                echo "      ";
                $context["current_nesting_level"] = ($context["new_nesting_level"] ?? null);
                // line 29
                echo "    ";
            } else {
                // line 30
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null)), "html", null, true);
                echo "
    ";
            }
            // line 32
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  110 => 32,  104 => 30,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 24,  68 => 23,  66 => 22,  61 => 21,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  55 => 13,);
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
  Themes Views' default multi-select element as a set of checkboxes.

  Available variables:
    - wrapper_attributes: attributes for the wrapper element.
    - element: The collection of checkboxes.
    - children: An array of keys for the children of element.
    - is_nested: TRUE if this is to be rendered as a nested list.
    - depth: If is_nested is TRUE, this holds an array in the form of
      child_id => nesting_level which defines the depth a given element should
      appear in the nested list.
#}
{% set classes = [
  'form-checkboxes',
  'bef-checkboxes',
  is_nested ? 'bef-nested',
  show_select_all_none ? 'bef-select-all-none',
  show_select_all_none_nested ? 'bef-select-all-none-nested',
  display_inline ? 'form--inline'
] %}
<div{{ wrapper_attributes.addClass(classes) }}>
  {% set current_nesting_level = 0 %}
  {% for child in children %}
    {% set item = attribute(element, child) %}
    {% if is_nested %}
      {% set new_nesting_level = attribute(depth, child) %}
      {% include '@better_exposed_filters/bef-nested-elements.html.twig' %}
      {% set current_nesting_level = new_nesting_level %}
    {% else %}
      {{ item }}
    {% endif %}
  {% endfor %}
</div>
", "modules/contrib/better_exposed_filters/templates/bef-checkboxes.html.twig", "C:\\php7.2\\htdocs\\drupal_alpha\\web\\modules\\contrib\\better_exposed_filters\\templates\\bef-checkboxes.html.twig");
    }
}
