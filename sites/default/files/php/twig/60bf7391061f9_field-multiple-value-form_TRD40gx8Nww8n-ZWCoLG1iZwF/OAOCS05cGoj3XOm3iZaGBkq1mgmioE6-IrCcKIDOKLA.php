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

/* themes/contrib/bootstrap/templates/field/field-multiple-value-form.html.twig */
class __TwigTemplate_e603f6b58edc8acb1378bac759538a981c982fe1a8563271d5a69ed3cd4ea2fc extends \Twig\Template
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
        // line 22
        if (($context["multiple"] ?? null)) {
            // line 23
            echo "  <div class=\"form-item\">
    ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table"] ?? null), 24, $this->source), "html", null, true);
            echo "
    ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 25)) {
                // line 26
                echo "      <div class=\"description help-block\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 28
            echo "    ";
            if (($context["button"] ?? null)) {
                // line 29
                echo "      <div class=\"clearfix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button"] ?? null), 29, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 31
            echo "  </div>
";
        } else {
            // line 33
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 34
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["element"], 34, $this->source), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/field/field-multiple-value-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  69 => 33,  65 => 31,  59 => 29,  56 => 28,  50 => 26,  48 => 25,  44 => 24,  41 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for an individual form element.
 *
 * Available variables for all fields:
 * - multiple: Whether there are multiple instances of the field.
 *
 * Available variables for single cardinality fields:
 * - elements: Form elements to be rendered.
 *
 * Available variables when there are multiple fields.
 * - table: Table of field items.
 * - description: Description text for the form element.
 * - button: \"Add another item\" button.
 *
 * @ingroup templates
 *
 * @see template_preprocess_field_multiple_value_form()
 */
#}
{% if multiple %}
  <div class=\"form-item\">
    {{ table }}
    {% if description.content %}
      <div class=\"description help-block\">{{ description.content }}</div>
    {% endif %}
    {% if button %}
      <div class=\"clearfix\">{{ button }}</div>
    {% endif %}
  </div>
{% else %}
  {% for element in elements %}
    {{ element }}
  {% endfor %}
{% endif %}
", "themes/contrib/bootstrap/templates/field/field-multiple-value-form.html.twig", "/var/www/html/drupal-9.1.9/themes/contrib/bootstrap/templates/field/field-multiple-value-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "for" => 33);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
