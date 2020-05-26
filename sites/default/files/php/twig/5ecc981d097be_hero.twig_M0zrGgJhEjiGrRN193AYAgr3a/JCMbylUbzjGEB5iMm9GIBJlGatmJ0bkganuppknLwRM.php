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

/* @training_theme/hero/hero.twig */
class __TwigTemplate_d4b61900150080a0e3c24c053f59a8bee766b2daf0019bca39a84762b3051f7a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6, "include" => 15];
        $filters = ["escape" => 1, "without" => 5];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'without'],
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("training_theme/hero"), "html", null, true);
        echo "

<section class=\"hero";
        // line 3
        ((($context["modifier"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (" " . ($context["modifier"] ?? null)), "html", null, true))) : (print ("")));
        ((($context["attributes"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "class", []), "html", null, true))) : (print ("")));
        echo "\"";
        // line 5
        ((($context["attributes"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter(($context["attributes"] ?? null), ($context["class"] ?? null)), "html", null, true))) : (print ("")));
        echo ">
  ";
        // line 6
        if (($context["image"] ?? null)) {
            // line 7
            echo "    <div class=\"hero__media\">
      ";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 11
        echo "
  <div class=\"hero__content\">
    ";
        // line 13
        if (($context["heading"] ?? null)) {
            // line 14
            echo "      ";
            // line 15
            $this->loadTemplate("@training_theme/heading/heading.twig", "@training_theme/hero/hero.twig", 15)->display(twig_to_array(["heading" =>             // line 16
($context["heading"] ?? null)]));
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (($context["cta"] ?? null)) {
            // line 22
            echo "      ";
            // line 23
            $this->loadTemplate("@training_theme/button/button.twig", "@training_theme/hero/hero.twig", 23)->display(twig_to_array(["button" =>             // line 24
($context["cta"] ?? null)]));
            // line 27
            echo "    ";
        }
        // line 28
        echo "  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@training_theme/hero/hero.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  103 => 27,  101 => 24,  100 => 23,  98 => 22,  96 => 21,  93 => 20,  90 => 19,  88 => 16,  87 => 15,  85 => 14,  83 => 13,  79 => 11,  73 => 8,  70 => 7,  68 => 6,  64 => 5,  60 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('training_theme/hero') }}

<section class=\"hero{{ modifier ? ' ' ~ modifier }}{{- attributes ? attributes.class -}}\"

  {{- attributes ? attributes|without(class) -}}>
  {% if image %}
    <div class=\"hero__media\">
      {{ image }}
    </div>
  {% endif %}

  <div class=\"hero__content\">
    {% if heading %}
      {%
        include '@training_theme/heading/heading.twig' with {
          \"heading\": heading
        } only
      %}
    {% endif %}

    {% if cta %}
      {%
        include '@training_theme/button/button.twig' with {
          \"button\": cta
        } only
      %}
    {% endif %}
  </div>
</section>
", "@training_theme/hero/hero.twig", "/var/www/html/themes/custom/training_theme/src/patterns/components/hero/hero.twig");
    }
}
