<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/bootstrap/templates/system/pager.html.twig */
class __TwigTemplate_a7260fbc456395e837f5d2c5a6aa57bbe9f221a33f234b907e727ca963dd520a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            echo "  <nav class=\"pager-nav text-center\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pagination js-pager__items\">

      ";
            // line 40
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 40)) {
                // line 41
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "href", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\" rel=\"first\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 44), "text", [], "any", true, true, true, 44)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 44), "text", [], "any", false, false, true, 44), 44, $this->source), t("first"))) : (t("first"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 48
            echo "
      ";
            // line 50
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50)) {
                // line 51
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "href", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "attributes", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 54), "text", [], "any", true, true, true, 54)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 54), "text", [], "any", false, false, true, 54), 54, $this->source), t("previous"))) : (t("previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 58
            echo "
      ";
            // line 60
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 60));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 61
                echo "        <li class=\"pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active active") : ("")));
                echo "\">
          ";
                // line 62
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 63
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 64
                    echo "          ";
                } else {
                    // line 65
                    echo "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 67, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 71, $this->source), "html", null, true);
                // line 72
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
      ";
            // line 77
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 77)) {
                // line 78
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 79), "href", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 79), "attributes", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 81), "text", [], "any", true, true, true, 81)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 81), "text", [], "any", false, false, true, 81), 81, $this->source), t("next"))) : (t("next"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 85
            echo "
      ";
            // line 87
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 87)) {
                // line 88
                echo "      <li class=\"pager__item pager__item--last\">
        <a href=\"";
                // line 89
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 89), "href", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\" rel=\"last\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 89), "attributes", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo ">
          <span class=\"visually-hidden\">";
                // line 90
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
          <span aria-hidden=\"true\">";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", true, true, true, 91)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", false, false, true, 91), 91, $this->source), t("last"))) : (t("last"))), "html", null, true);
                echo "</span>
        </a>
      </li>
      ";
            }
            // line 95
            echo "
    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 95,  203 => 91,  199 => 90,  191 => 89,  188 => 88,  185 => 87,  182 => 85,  175 => 81,  171 => 80,  163 => 79,  160 => 78,  157 => 77,  154 => 75,  146 => 72,  144 => 71,  140 => 69,  130 => 67,  127 => 66,  124 => 65,  121 => 64,  118 => 63,  116 => 62,  111 => 61,  106 => 60,  103 => 58,  96 => 54,  92 => 53,  84 => 52,  81 => 51,  78 => 50,  75 => 48,  68 => 44,  64 => 43,  56 => 42,  53 => 41,  50 => 40,  44 => 36,  41 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a pager.
 *
 * Available variables:
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ previous\"
 *     or \"next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @ingroup templates
 *
 * @see template_preprocess_pager()
 */
#}
{% if items %}
  <nav class=\"pager-nav text-center\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
    <ul class=\"pagination js-pager__items\">

      {# Print first item if we are not on the first page. #}
      {% if items.first %}
        <li class=\"pager__item pager__item--first\">
          <a href=\"{{ items.first.href }}\" title=\"{{ 'Go to first page'|t }}\" rel=\"first\"{{ items.first.attributes }}>
            <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.first.text|default('first'|t) }}</span>
          </a>
        </li>
      {% endif %}

      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        <li class=\"pager__item pager__item--previous\">
          <a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes }}>
            <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.previous.text|default('previous'|t) }}</span>
          </a>
        </li>
      {% endif %}

      {# Now generate the actual pager piece. #}
      {% for key, item in items.pages %}
        <li class=\"pager__item{{ current == key ? ' is-active active' : '' }}\">
          {% if current == key %}
            {% set title = 'Current page'|t %}
          {% else %}
            {% set title = 'Go to page @key'|t({'@key': key}) %}
          {% endif %}
          <a href=\"{{ item.href }}\" title=\"{{ title }}\"{{ item.attributes }}>
            <span class=\"visually-hidden\">
              {{ current == key ? 'Current page'|t : 'Page'|t }}
            </span>
            {{- key -}}
          </a>
        </li>
      {% endfor %}

      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        <li class=\"pager__item pager__item--next\">
          <a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes }}>
            <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
            <span aria-hidden=\"true\">{{ items.next.text|default('next'|t) }}</span>
          </a>
        </li>
      {% endif %}

      {# Print last item if we are not on the last page. #}
      {% if items.last %}
      <li class=\"pager__item pager__item--last\">
        <a href=\"{{ items.last.href }}\" title=\"{{ 'Go to last page'|t }}\" rel=\"last\"{{ items.last.attributes }}>
          <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
          <span aria-hidden=\"true\">{{ items.last.text|default('last'|t) }}</span>
        </a>
      </li>
      {% endif %}

    </ul>
  </nav>
{% endif %}
", "themes/contrib/bootstrap/templates/system/pager.html.twig", "/var/www/html/drupal-9.1.9/themes/contrib/bootstrap/templates/system/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "for" => 60, "set" => 63);
        static $filters = array("t" => 36, "escape" => 42, "default" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'escape', 'default'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
