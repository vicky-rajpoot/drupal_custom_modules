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

/* modules/contrib/profile/templates/profile.html.twig */
class __TwigTemplate_8248d032d104b609b132a4cc8336a841d9ee2d3cd50b30fda4670331eb0e77d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 26];
        $filters = ["clean_class" => 29, "escape" => 35];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
        // line 26
        $context["classes"] = [0 => "profile", 1 => ("profile--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 28
($context["profile"] ?? null), "id", []))), 2 => ("profile--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 29
($context["profile"] ?? null), "bundle", [])))), 3 => (($this->getAttribute(        // line 30
($context["profile"] ?? null), "isDefault", [], "method")) ? ("profile--is-default") : ("")), 4 => ((        // line 31
($context["view_mode"] ?? null)) ? (("profile--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 5 => "clearfix"];
        // line 35
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", [])), "html", null, true);
        echo "
  ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/profile/templates/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 37,  66 => 36,  61 => 35,  59 => 31,  58 => 30,  57 => 29,  56 => 28,  55 => 26,);
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
 *
 * Default theme implementation for profiles.
 *
 * Available variables:
 * - content: Items for the content of the profile.
 *   Use 'content' to print them all, or print a subset such as
 *   'content.title'. Use the following code to exclude the
 *   printing of a given child element:
 *   @code
 *   {{ content|without('title') }}
 *   @endcode
 * - attributes: HTML attributes for the wrapper.
 * - view_mode: The profile view mode used.
 * - profile: The profile object.
 * - url: The profile URL, if available.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
  'profile',
  'profile--' ~ profile.id,
  'profile--type--' ~ profile.bundle|clean_class,
  profile.isDefault() ? 'profile--is-default',
  view_mode ? 'profile--view-mode--' ~ view_mode|clean_class,
  'clearfix',
]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_suffix.contextual_links }}
  {{ content }}
</div>
", "modules/contrib/profile/templates/profile.html.twig", "C:\\php7.2\\htdocs\\drupal_alpha\\web\\modules\\contrib\\profile\\templates\\profile.html.twig");
    }
}
