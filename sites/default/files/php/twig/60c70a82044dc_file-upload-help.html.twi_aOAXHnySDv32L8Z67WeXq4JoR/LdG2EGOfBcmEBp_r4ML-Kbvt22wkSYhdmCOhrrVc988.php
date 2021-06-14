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

/* themes/contrib/bootstrap/templates/file/file-upload-help.html.twig */
class __TwigTemplate_7ae6fec1e21bb6c6ca66e16f25ae65a2ab5a3cf3daf1ce20106f4b7053e32d99 extends \Twig\Template
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
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 17, $this->source), "html", null, true);
            echo "<br>
";
        }
        // line 19
        if (($context["popover"] ?? null)) {
            // line 20
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["popover"] ?? null), 20, $this->source), "html", null, true);
            echo "
";
        } else {
            // line 22
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["descriptions"] ?? null), 22, $this->source), "<br>"));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/file/file-upload-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  49 => 20,  47 => 19,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display help text for file fields.
 *
 * Available variables:
 * - description: The normal description for this field, specified by the user.
 * - descriptions: Lines of help text for uploading a file.
 * - popover: Markup to display the descriptions as a popover instead.
 *
 * @ingroup templates
 *
 * @see template_preprocess_file_upload_help()
 */
#}
{% if description %}
  {{ description }}<br>
{% endif %}
{% if popover %}
  {{ popover }}
{% else %}
  {{ descriptions|safe_join('<br>') }}
{% endif %}
", "themes/contrib/bootstrap/templates/file/file-upload-help.html.twig", "/var/www/html/drupal-9.1.9/themes/contrib/bootstrap/templates/file/file-upload-help.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 17, "safe_join" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'safe_join'],
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
