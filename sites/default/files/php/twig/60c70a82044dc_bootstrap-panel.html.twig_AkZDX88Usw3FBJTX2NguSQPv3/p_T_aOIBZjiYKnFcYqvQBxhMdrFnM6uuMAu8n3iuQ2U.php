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

/* themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig */
class __TwigTemplate_687cdfc96e2ef550cd09411ae516095d2008b0918913e3a0c114b2684443f90c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        $context["classes"] = [0 => "panel", 1 => ((        // line 47
($context["errors"] ?? null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["panel_type"] ?? null), 47, $this->source)))))];
        // line 50
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">

  ";
        // line 53
        echo "  ";
        if (($context["heading"] ?? null)) {
            // line 54
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 69
            echo "  ";
        }
        // line 70
        echo "
  ";
        // line 72
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "
  ";
        // line 107
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 108
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 116
            echo "  ";
        }
        // line 117
        echo "
</div>
";
    }

    // line 54
    public function block_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "      <div class=\"panel-heading\">
        ";
        // line 57
        $context["heading_classes"] = [0 => "panel-title", 1 => ((        // line 59
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 62
        echo "        ";
        if (($context["collapsible"] ?? null)) {
            // line 63
            echo "          <a";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method", false, false, true, 63), 63, $this->source), "html", null, true);
            echo " href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null), 63, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 63, $this->source), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 65
            echo "          <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 65, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 67
        echo "      </div>
    ";
    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        // line 74
        $context["body_classes"] = [0 => "panel-body", 1 => ((        // line 76
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 77
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 78
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 79
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 82
        echo "    ";
        // line 83
        $context["description_classes"] = [0 => "help-block", 1 => (((        // line 85
($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 85) == "invisible"))) ? ("sr-only") : (""))];
        // line 88
        echo "
    ";
        // line 89
        if (($context["errors"] ?? null)) {
            // line 90
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 91, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 94
        echo "
    <div";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["body_attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 95), 95, $this->source), "html", null, true);
        echo ">
      ";
        // line 96
        if ((($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 96) == "before"))) {
            // line 97
            echo "        <p";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 97), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 99
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 99, $this->source), "html", null, true);
        echo "
      ";
        // line 100
        if (((($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 100) == "after")) || (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 100) == "invisible"))) {
            // line 101
            echo "        <p";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 101), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 101), 101, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 103
        echo "    </div>
  ";
    }

    // line 108
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "      ";
        // line 110
        $context["footer_classes"] = [0 => "panel-footer"];
        // line 114
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [0 => ($context["footer_classes"] ?? null)], "method", false, false, true, 114), 114, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 114, $this->source), "html", null, true);
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 114,  194 => 110,  192 => 109,  188 => 108,  183 => 103,  175 => 101,  173 => 100,  168 => 99,  160 => 97,  158 => 96,  154 => 95,  151 => 94,  145 => 91,  142 => 90,  140 => 89,  137 => 88,  135 => 85,  134 => 83,  132 => 82,  130 => 79,  129 => 78,  128 => 77,  127 => 76,  126 => 74,  124 => 73,  120 => 72,  115 => 67,  107 => 65,  97 => 63,  94 => 62,  92 => 59,  91 => 57,  88 => 55,  84 => 54,  78 => 117,  75 => 116,  72 => 108,  69 => 107,  66 => 105,  63 => 72,  60 => 70,  57 => 69,  54 => 54,  51 => 53,  45 => 50,  43 => 47,  42 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a Bootstrap Panel component.
 *
 * Available variables:
 * - attributes: An array of HTML attributes intended to be added to the main
 *   container tag of this template.
 *   - id: A valid HTML ID and guaranteed to be unique.
 * - body: The primary content of the panel.
 * - body_attributes: (optional) Same as attributes, except applied to the body
 *   container that appears in the template.
 * - collapsible: Flag indicating whether the panel is collapsible.
 * - collapsed: Flag indicating whether the panel is collapsed.
 * - description: (optional) A list of description properties containing:
 *    - content: (optional) A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 *    - position: (optional) A display setting that can have these values:
 *      - before: The description is output before the element. This is the
 *        default value.
 *      - after: The description is output after the element.
 *      - invisible: The description is output after the element, hidden
 *        visually but available to screen readers.
 * - errors: (optional) Any errors for panel, may not be set.
 * - footer: (optional) Additional contents intended to be placed at the bottom.
 * - footer_attributes: (optional) Same as attributes, except applied to the
 *   footer container that appears in the template.
 * - heading: (optional) The title of the panel, may not be set.
 * - heading_attributes: (optional) Same as attributes, except applied to the
 *   heading container that appears in the template.
 * - panel_type: (optional) A contextual state. Will be one of these values:
 *   - danger
 *   - default (default value)
 *   - info
 *   - primary
 *   - success
 *   - warning
 * - target: (optional) The target of the collapsible container.
 *
 * @ingroup templates
 */
#}
{%
  set classes = [
    'panel',
    errors ? 'panel-danger' : 'panel-' ~ panel_type|clean_class,
  ]
%}
<div{{ attributes.addClass(classes) }}>

  {# Heading #}
  {% if heading %}
    {% block heading %}
      <div class=\"panel-heading\">
        {%
          set heading_classes = [
            'panel-title',
            required ? 'form-required' : '',
          ]
        %}
        {% if collapsible %}
          <a{{ heading_attributes.addClass(heading_classes) }} href=\"{{ target }}\">{{ heading }}</a>
        {% else %}
          <div{{ heading_attributes.addClass(heading_classes) }}>{{ heading }}</div>
        {% endif %}
      </div>
    {% endblock %}
  {% endif %}

  {# Body #}
  {% block body %}
    {%
      set body_classes = [
      'panel-body',
      collapsible ? 'panel-collapse',
      collapsible ? 'collapse',
      collapsible ? 'fade',
      errors or collapsible and not collapsed ? 'in',
      ]
    %}
    {%
      set description_classes = [
        'help-block',
        description and description.position == 'invisible' ? 'sr-only',
      ]
    %}

    {% if errors %}
      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>{{ errors }}</strong>
      </div>
    {% endif %}

    <div{{ body_attributes.addClass(body_classes) }}>
      {% if description and description.position == 'before' %}
        <p{{ description.attributes.addClass(description_classes) }}>{{ description.content }}</p>
      {% endif %}
      {{ body }}
      {% if description and description.position == 'after' or description.position == 'invisible' %}
        <p{{ description.attributes.addClass(description_classes) }}>{{ description.content }}</p>
      {% endif %}
    </div>
  {% endblock %}

  {# Footer #}
  {% if footer %}
    {% block footer %}
      {%
        set footer_classes = [
          'panel-footer',
        ]
      %}
      <div{{ footer_attributes.addClass(footer_classes) }}>{{ footer }}</div>
    {% endblock %}
  {% endif %}

</div>
", "themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig", "/var/www/html/drupal-9.1.9/themes/contrib/bootstrap/templates/bootstrap/bootstrap-panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 45, "if" => 53, "block" => 54);
        static $filters = array("clean_class" => 47, "escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
