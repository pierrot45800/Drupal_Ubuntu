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

/* themes/contrib/bootstrap/templates/file/file-link.html.twig */
class __TwigTemplate_6144b9aac115d1c84e66630c008f85149bb56cd2d3fabe72d8f35a92a9f95227 extends \Twig\Template
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
        // line 18
        ob_start();
        // line 19
        echo "  ";
        // line 20
        $context["classes"] = [0 => ((        // line 21
($context["icon_only"] ?? null)) ? ("icon-only") : ("")), 1 => (( !        // line 22
($context["icon_only"] ?? null)) ? (("icon-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["icon_position"] ?? null), 22, $this->source)))) : (""))];
        // line 25
        echo "  <span";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
    ";
        // line 26
        if (($context["icon_only"] ?? null)) {
            // line 27
            echo "      <span class=\"file-icon\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 27, $this->source), "html", null, true);
            echo "</span>
      <span class=\"sr-only\">
        <span class=\"file-link\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 29, $this->source), "html", null, true);
            echo "</span>
        <span class=\"file-size\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size"] ?? null), 30, $this->source), "html", null, true);
            echo "</span>
      </span>
    ";
        } else {
            // line 33
            echo "      ";
            if ((($context["icon_position"] ?? null) == "after")) {
                // line 34
                echo "        <span class=\"file-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 34, $this->source), "html", null, true);
                echo "</span><span class=\"file-size\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size"] ?? null), 34, $this->source), "html", null, true);
                echo "</span><span class=\"file-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 34, $this->source), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 36
                echo "        <span class=\"file-icon\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 36, $this->source), "html", null, true);
                echo "</span><span class=\"file-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 36, $this->source), "html", null, true);
                echo "</span><span class=\"file-size\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["file_size"] ?? null), 36, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "  </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/file/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  93 => 38,  83 => 36,  73 => 34,  70 => 33,  64 => 30,  60 => 29,  54 => 27,  52 => 26,  47 => 25,  45 => 22,  44 => 21,  43 => 20,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a link to a file.
 *
 * Available variables:
 * - attributes: The HTML attributes for the containing element.
 * - link: A link to the file.
 * - icon: An icon.
 * - icon_only: Flag to display only the icon and not the label.
 * - icon_position: Where an icon should be displayed.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\FileLink::preprocessVariables
 */
#}
{% spaceless %}
  {%
    set classes = [
      icon_only ? 'icon-only',
      not icon_only ? 'icon-' ~ icon_position|clean_class
    ]
  %}
  <span{{ attributes.addClass(classes) }}>
    {% if icon_only %}
      <span class=\"file-icon\">{{ icon }}</span>
      <span class=\"sr-only\">
        <span class=\"file-link\">{{ link }}</span>
        <span class=\"file-size\">{{ file_size }}</span>
      </span>
    {% else %}
      {% if icon_position == 'after' %}
        <span class=\"file-link\">{{ link }}</span><span class=\"file-size\">{{ file_size }}</span><span class=\"file-icon\">{{ icon }}</span>
      {% else %}
        <span class=\"file-icon\">{{ icon }}</span><span class=\"file-link\">{{ link }}</span><span class=\"file-size\">{{ file_size }}</span>
      {% endif %}
    {% endif %}
  </span>
{% endspaceless %}
", "themes/contrib/bootstrap/templates/file/file-link.html.twig", "/var/www/html/drupal-9.1.9/themes/contrib/bootstrap/templates/file/file-link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 18, "set" => 20, "if" => 26);
        static $filters = array("clean_class" => 22, "escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'set', 'if'],
                ['clean_class', 'escape'],
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
