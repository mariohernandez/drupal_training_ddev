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

/* @training_theme/button/button.twig */
class __TwigTemplate_04602ff4144fb915dabbcc95c92f9dc80b1ff21c8c255e2c0ccb2091ebe4dd99 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 1];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("training_theme/button"), "html", null, true);
        echo "

";
        // line 3
        if ($this->getAttribute(($context["button"] ?? null), "url", [])) {
            // line 4
            echo "  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["button"] ?? null), "url", [])), "html", null, true);
            echo "\" class=\"button";
            (($this->getAttribute(($context["button"] ?? null), "modifier", [])) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (" " . $this->getAttribute(($context["button"] ?? null), "modifier", [])), "html", null, true))) : (print ("")));
            echo "\">
    ";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["button"] ?? null), "text", [])), "html", null, true);
            echo "
  </a>
  ";
        } else {
            // line 8
            echo "  <button class=\"button";
            (($this->getAttribute(($context["button"] ?? null), "modifier", [])) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (" " . $this->getAttribute(($context["button"] ?? null), "modifier", [])), "html", null, true))) : (print ("")));
            echo "\">
    ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["button"] ?? null), "text", [])), "html", null, true);
            echo "
  </button>
";
        }
    }

    public function getTemplateName()
    {
        return "@training_theme/button/button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 9,  75 => 8,  69 => 5,  62 => 4,  60 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('training_theme/button') }}

{% if button.url %}
  <a href=\"{{ button.url }}\" class=\"button{{ button.modifier ? ' ' ~ button.modifier }}\">
    {{ button.text }}
  </a>
  {% else %}
  <button class=\"button{{ button.modifier ? ' ' ~ button.modifier }}\">
    {{ button.text }}
  </button>
{% endif %}
", "@training_theme/button/button.twig", "/var/www/html/themes/custom/training_theme/src/patterns/components/button/button.twig");
    }
}
