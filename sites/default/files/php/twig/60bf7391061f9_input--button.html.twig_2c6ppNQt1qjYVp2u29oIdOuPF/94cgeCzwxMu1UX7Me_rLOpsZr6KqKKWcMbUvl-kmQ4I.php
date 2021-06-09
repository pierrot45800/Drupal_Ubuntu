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

/* themes/contrib/bootstrap/templates/input/input--button.html.twig */
class __TwigTemplate_b965d48bc6211f27f9cf7011896f03dac0d633cf6959bf008db3164059c1fe05 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        ob_start();
        // line 27
        $context["classes"] = [0 => "btn", 1 => (((        // line 29
($context["type"] ?? null) == "submit")) ? ("js-form-submit") : ("")), 2 => ((((        // line 30
($context["icon"] ?? null) && ($context["icon_position"] ?? null)) &&  !($context["icon_only"] ?? null))) ? (("icon-" . $this->sandbox->ensureToStringAllowed(($context["icon_position"] ?? null), 30, $this->source))) : (""))];
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/contrib/bootstrap/templates/input/input--button.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    ";
        if ((($context["icon"] ?? null) && ($context["icon_only"] ?? null))) {
            // line 35
            echo "      <button";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "icon-only"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo ">
        <span class=\"sr-only\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 36, $this->source), "html", null, true);
            echo "</span>
        ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 37, $this->source), "html", null, true);
            echo "
      </button>
    ";
        } else {
            // line 40
            echo "      ";
            if ((($context["icon_position"] ?? null) == "after")) {
                // line 41
                echo "        <button";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 41, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 41, $this->source), "html", null, true);
                echo "</button>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 41, $this->source), "html", null, true);
                echo "
      ";
            } else {
                // line 43
                echo "        <button";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 43, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 43, $this->source), "html", null, true);
                echo "</button>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 43, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 46, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/input/input--button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  103 => 45,  92 => 43,  81 => 41,  78 => 40,  72 => 37,  68 => 36,  63 => 35,  60 => 34,  56 => 33,  51 => 1,  48 => 30,  47 => 29,  46 => 27,  44 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"input.html.twig\" %}
{#
/**
 * @file
 * Theme suggestion for \"button\" input form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - icon_only: Flag to display only the icon and not the label.
 * - icon_position: Where an icon should be displayed.
 * - label: button label.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\InputButton
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
{% spaceless %}
  {%
    set classes = [
      'btn',
      type == 'submit' ? 'js-form-submit',
      icon and icon_position and not icon_only ? 'icon-' ~ icon_position,
    ]
  %}
  {% block input %}
    {% if icon and icon_only %}
      <button{{ attributes.addClass(classes, 'icon-only') }}>
        <span class=\"sr-only\">{{ label }}</span>
        {{ icon }}
      </button>
    {% else %}
      {% if icon_position == 'after' %}
        <button{{ attributes.addClass(classes) }}>{{ label }}{{ icon }}</button>{{ children }}
      {% else %}
        <button{{ attributes.addClass(classes) }}>{{ icon }}{{ label }}</button>{{ children }}
      {% endif %}
    {% endif %}
    {{ children }}
  {% endblock %}
{% endspaceless %}
", "themes/contrib/bootstrap/templates/input/input--button.html.twig", "/var/www/html/drupal-9.1.9/themes/contrib/bootstrap/templates/input/input--button.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 25, "set" => 27, "if" => 34);
        static $filters = array("escape" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'set', 'if'],
                ['escape'],
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
