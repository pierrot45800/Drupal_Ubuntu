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

/* core/themes/seven/templates/classy/form/fieldset.html.twig */
class __TwigTemplate_c3661fbda2b6e9fb5c2dad03480d5a8001a979726cfb1c7633a389ee86244d40 extends \Twig\Template
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
        // line 24
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper"];
        // line 31
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo ">
  ";
        // line 33
        $context["legend_span_classes"] = [0 => "fieldset-legend", 1 => ((        // line 35
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 36
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 39
        echo "  ";
        // line 40
        echo "  <legend";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo ">
    <span";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 41), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 44
        if (($context["errors"] ?? null)) {
            // line 45
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 46, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 49
        echo "    ";
        if (($context["prefix"] ?? null)) {
            // line 50
            echo "      <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 50, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 52
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 52, $this->source), "html", null, true);
        echo "
    ";
        // line 53
        if (($context["suffix"] ?? null)) {
            // line 54
            echo "      <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 54, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 56
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 56)) {
            // line 57
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 57), "addClass", [0 => "description"], "method", false, false, true, 57), 57, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 59
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/form/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 59,  101 => 57,  98 => 56,  92 => 54,  90 => 53,  85 => 52,  79 => 50,  76 => 49,  70 => 46,  67 => 45,  65 => 44,  57 => 41,  52 => 40,  50 => 39,  48 => 36,  47 => 35,  46 => 33,  41 => 31,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a fieldset element and its children.
 *
 * Available variables:
 * - attributes: HTML attributes for the fieldset element.
 * - errors: (optional) Any errors for this fieldset element, may not be set.
 * - required: Boolean indicating whether the fieldset element is required.
 * - legend: The legend element containing the following properties:
 *   - title: Title of the fieldset, intended for use as the text of the legend.
 *   - attributes: HTML attributes to apply to the legend.
 * - description: The description element containing the following properties:
 *   - content: The description content of the fieldset.
 *   - attributes: HTML attributes to apply to the description container.
 * - children: The rendered child elements of the fieldset.
 * - prefix: The content to add before the fieldset children.
 * - suffix: The content to add after the fieldset children.
 *
 * @see template_preprocess_fieldset()
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-wrapper',
    'form-wrapper',
  ]
%}
<fieldset{{ attributes.addClass(classes) }}>
  {%
    set legend_span_classes = [
      'fieldset-legend',
      required ? 'js-form-required',
      required ? 'form-required',
    ]
  %}
  {#  Always wrap fieldset legends in a <span> for CSS positioning. #}
  <legend{{ legend.attributes }}>
    <span{{ legend_span.attributes.addClass(legend_span_classes) }}>{{ legend.title }}</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    {% if errors %}
      <div class=\"form-item--error-message\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}
    {% if prefix %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {{ children }}
    {% if suffix %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if description.content %}
      <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>
    {% endif %}
  </div>
</fieldset>
", "core/themes/seven/templates/classy/form/fieldset.html.twig", "/var/www/html/drupal-9.1.9/core/themes/seven/templates/classy/form/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 44);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
