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

/* @training_theme/heading/heading.twig */
class __TwigTemplate_6366104c8c85e98197c89f3d707e0ce0c2591ba9888d03e51c14447b310e474a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 1, "default" => 3];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'default'],
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("training_theme/heading"), "html", null, true);
        echo "

<h";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["heading"] ?? null), "heading_level", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "heading_level", [])), "2")) : ("2")), "html", null, true);
        echo " class=\"heading";
        (($this->getAttribute(($context["heading"] ?? null), "modifier", [])) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (" " . $this->getAttribute(($context["heading"] ?? null), "modifier", [])), "html", null, true))) : (print ("")));
        echo "\">
  ";
        // line 4
        if ($this->getAttribute(($context["heading"] ?? null), "url", [])) {
            // line 5
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "url", [])), "html", null, true);
            echo "\" class=\"heading__link\">
      ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "title", [])), "html", null, true);
            echo "
    </a>
  ";
        } else {
            // line 9
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "title", [])), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "</h";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute(($context["heading"] ?? null), "heading_level", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading"] ?? null), "heading_level", [])), "2")) : ("2")), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "@training_theme/heading/heading.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 11,  79 => 9,  73 => 6,  68 => 5,  66 => 4,  60 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('training_theme/heading') }}

<h{{ heading.heading_level|default('2') }} class=\"heading{{ heading.modifier ? ' ' ~ heading.modifier }}\">
  {% if heading.url %}
    <a href=\"{{ heading.url }}\" class=\"heading__link\">
      {{ heading.title }}
    </a>
  {% else %}
    {{ heading.title }}
  {% endif %}
</h{{ heading.heading_level|default('2') }}>
", "@training_theme/heading/heading.twig", "/var/www/html/themes/custom/training_theme/src/patterns/components/heading/heading.twig");
    }
}
