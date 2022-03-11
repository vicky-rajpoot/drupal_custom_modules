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

/* themes/custom/clean/templates/layout/page.html.twig */
class __TwigTemplate_5cdc9c9316275affedf249c68db3557f706d8028d557d0ac23c2a59cf97f7777 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 73, "if" => 107];
        $filters = ["t" => 72, "escape" => 109];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
      ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 106
        echo "    </header>
    ";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 108
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 114
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 115
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 122
            echo "    ";
        }
        // line 123
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 124
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "    </div>
    ";
        // line 174
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", []))) {
            // line 175
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 176
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 177
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
          ";
            // line 178
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
          ";
            // line 179
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 183
        echo "    <footer class=\"site-footer\">
      ";
        // line 184
        $this->displayBlock('footer', $context, $blocks);
        // line 230
        echo "    </footer>
  </div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        // line 74
        echo "        ";
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", []) || $this->getAttribute(($context["page"] ?? null), "top_header", [])) || $this->getAttribute(($context["page"] ?? null), "top_header_form", []))) {
            // line 75
            echo "          <nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "          <div class=\"container\">
          ";
            }
            // line 79
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
              ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header", [])), "html", null, true);
            echo "
              ";
            // line 81
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", [])) {
                // line 82
                echo "                <div class=\"form-inline navbar-form ml-auto\">
                  ";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_form", [])), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 86
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "          </div>
          ";
            }
            // line 89
            echo "          </nav>
        ";
        }
        // line 91
        echo "        <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-lg-3 col-md-3\">
                  <div class=\"logo\">
                     <a href=\"index.php\"><img src=\"";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/assets/images/Cleanlife-solutions.svg\" alt=\"Cleanlife-solutions\" width=\"126.73\" height=\"34\"></a>
                  </div>
               </div>
               <div class=\"col-lg-9 col-md-9 text-right\">
                  <div class=\"search-bar\">
                     <input type=\"text\" name=\"\" placeholder=\"Search\"><button><i class=\"fas fa-search\"></i></button>
                  </div>
               </div>               
            </div>
         </div> 
      ";
    }

    // line 115
    public function block_featured($context, array $blocks = [])
    {
        // line 116
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 118
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 124
    public function block_content($context, array $blocks = [])
    {
        // line 125
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "productview", [])) {
            // line 126
            echo "      <section class=\"brand-sec\">
        <div class=\"container\">
         ";
            // line 128
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "productview", [])), "html", null, true);
            echo "
        </div>
      </section>
      ";
        }
        // line 132
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "productviewsecsidebar", [])) {
            // line 133
            echo "        <section class=\"product-view-sec\">
            <div class=\"container\">
               <div class=\"row\">
                  ";
            // line 136
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "productviewsectop", [])), "html", null, true);
            echo "
                  <div class=\"col-lg-3 col-md-3 col-sm-6 col-12\">
                  ";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "productviewsecsidebar", [])), "html", null, true);
            echo "
                  </div>
                  ";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "productviewsecmain", [])), "html", null, true);
            echo "
                        
                  
               </div>
            </div>
        </section>
      ";
        }
        // line 147
        echo "        <div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 153
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 156
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 157
            echo "              <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null)), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 159
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 163
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 164
            echo "              <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null)), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 170
        echo "          </div>
        </div>
      ";
    }

    // line 184
    public function block_footer($context, array $blocks = [])
    {
        // line 185
        echo "                  <footer>
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-lg-2 col-12\">
                  <div class=\"logo\">
                    <img src=\"";
        // line 190
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/assets/images/Cleanlife-solutions.svg\" alt=\"Cleanlife-solutions\" width=\"126.73\" height=\"34\">
                  </div>
                </div>
                <div class=\"col-lg-7 col-md-9\">
                  <div class=\"footer-menus\">
                    <ul>
                      <li><a href=\"index.php\">Home</a></li>
                      <li><a href=\"about.php\">About</a></li>
                      <li><a href=\"brands.php\">Brands</a></li>
                      <li><a href=\"products.php\">Products</a></li>
                      <li><a href=\"partners.php\">Partners</a></li>
                      <li><a href=\"news.php\">News</a></li>
                      <li><a href=\"contact.php\">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                <div class=\"col-lg-3 col-md-3\">
                  <div class=\"social-icons\">
                    <ul>
                      <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"copyright\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-12 text-center\">
                    <p>© Cleanlife 2021. All Rights Reserved. - Design & Developed by <a href=\"#\">LN Webworks</a></p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 190,  335 => 185,  332 => 184,  326 => 170,  319 => 166,  313 => 164,  310 => 163,  303 => 159,  297 => 157,  295 => 156,  289 => 153,  283 => 150,  278 => 148,  273 => 147,  263 => 140,  258 => 138,  253 => 136,  248 => 133,  245 => 132,  238 => 128,  234 => 126,  231 => 125,  228 => 124,  220 => 118,  216 => 117,  213 => 116,  210 => 115,  195 => 95,  189 => 91,  185 => 89,  181 => 87,  178 => 86,  172 => 83,  169 => 82,  167 => 81,  163 => 80,  158 => 79,  154 => 77,  152 => 76,  147 => 75,  144 => 74,  141 => 73,  134 => 230,  132 => 184,  129 => 183,  122 => 179,  118 => 178,  114 => 177,  110 => 176,  107 => 175,  105 => 174,  102 => 173,  100 => 124,  97 => 123,  94 => 122,  91 => 115,  88 => 114,  81 => 110,  77 => 109,  74 => 108,  72 => 107,  69 => 106,  67 => 73,  63 => 72,  59 => 70,);
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
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 * - sidebar_collapse: If the sidebar_first will collapse.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
      {% block head %}
        {% if page.secondary_menu or page.top_header or page.top_header_form %}
          <nav{{ navbar_top_attributes }}>
          {% if container_navbar %}
          <div class=\"container\">
          {% endif %}
              {{ page.secondary_menu }}
              {{ page.top_header }}
              {% if page.top_header_form %}
                <div class=\"form-inline navbar-form ml-auto\">
                  {{ page.top_header_form }}
                </div>
              {% endif %}
          {% if container_navbar %}
          </div>
          {% endif %}
          </nav>
        {% endif %}
        <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-lg-3 col-md-3\">
                  <div class=\"logo\">
                     <a href=\"index.php\"><img src=\"{{ directory }}/assets/images/Cleanlife-solutions.svg\" alt=\"Cleanlife-solutions\" width=\"126.73\" height=\"34\"></a>
                  </div>
               </div>
               <div class=\"col-lg-9 col-md-9 text-right\">
                  <div class=\"search-bar\">
                     <input type=\"text\" name=\"\" placeholder=\"Search\"><button><i class=\"fas fa-search\"></i></button>
                  </div>
               </div>               
            </div>
         </div> 
      {% endblock %}
    </header>
    {% if page.highlighted %}
      <div class=\"highlighted\">
        <aside class=\"{{ container }} section clearfix\" role=\"complementary\">
          {{ page.highlighted }}
        </aside>
      </div>
    {% endif %}
    {% if page.featured_top %}
      {% block featured %}
        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
            {{ page.featured_top }}
          </aside>
        </div>
      {% endblock %}
    {% endif %}
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      {% block content %}
      {% if page.productview %}
      <section class=\"brand-sec\">
        <div class=\"container\">
         {{ page.productview }}
        </div>
      </section>
      {% endif %}
      {% if page.productviewsecsidebar %}
        <section class=\"product-view-sec\">
            <div class=\"container\">
               <div class=\"row\">
                  {{ page.productviewsectop }}
                  <div class=\"col-lg-3 col-md-3 col-sm-6 col-12\">
                  {{ page.productviewsecsidebar }}
                  </div>
                  {{ page.productviewsecmain }}
                        
                  
               </div>
            </div>
        </section>
      {% endif %}
        <div id=\"main\" class=\"{{ container }}\">
          {{ page.breadcrumb }}
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main{{ content_attributes }}>
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  {{ page.content }}
                </section>
              </main>
            {% if page.sidebar_first %}
              <div{{ sidebar_first_attributes }}>
                <aside class=\"section\" role=\"complementary\">
                  {{ page.sidebar_first }}
                </aside>
              </div>
            {% endif %}
            {% if page.sidebar_second %}
              <div{{ sidebar_second_attributes }}>
                <aside class=\"section\" role=\"complementary\">
                  {{ page.sidebar_second }}
                </aside>
              </div>
            {% endif %}
          </div>
        </div>
      {% endblock %}
    </div>
    {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
      <div class=\"featured-bottom\">
        <aside class=\"{{ container }} clearfix\" role=\"complementary\">
          {{ page.featured_bottom_first }}
          {{ page.featured_bottom_second }}
          {{ page.featured_bottom_third }}
        </aside>
      </div>
    {% endif %}
    <footer class=\"site-footer\">
      {% block footer %}
                  <footer>
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-lg-2 col-12\">
                  <div class=\"logo\">
                    <img src=\"{{ directory }}/assets/images/Cleanlife-solutions.svg\" alt=\"Cleanlife-solutions\" width=\"126.73\" height=\"34\">
                  </div>
                </div>
                <div class=\"col-lg-7 col-md-9\">
                  <div class=\"footer-menus\">
                    <ul>
                      <li><a href=\"index.php\">Home</a></li>
                      <li><a href=\"about.php\">About</a></li>
                      <li><a href=\"brands.php\">Brands</a></li>
                      <li><a href=\"products.php\">Products</a></li>
                      <li><a href=\"partners.php\">Partners</a></li>
                      <li><a href=\"news.php\">News</a></li>
                      <li><a href=\"contact.php\">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                <div class=\"col-lg-3 col-md-3\">
                  <div class=\"social-icons\">
                    <ul>
                      <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fab fa-youtube\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                      <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"copyright\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-12 text-center\">
                    <p>© Cleanlife 2021. All Rights Reserved. - Design & Developed by <a href=\"#\">LN Webworks</a></p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
      {% endblock %}
    </footer>
  </div>
</div>
", "themes/custom/clean/templates/layout/page.html.twig", "C:\\php7.2\\htdocs\\drupal_alpha\\web\\themes\\custom\\clean\\templates\\layout\\page.html.twig");
    }
}
