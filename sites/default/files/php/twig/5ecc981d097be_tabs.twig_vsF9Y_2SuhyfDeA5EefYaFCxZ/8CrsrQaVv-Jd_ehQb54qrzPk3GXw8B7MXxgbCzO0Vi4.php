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

/* @training_theme/tabs/tabs.twig */
class __TwigTemplate_0b2daf4485d45f1f172ea8a8c454b7fd19c2450d11e3cf489602e515d70cc8fa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'primary' => [$this, 'block_primary'],
            'secondary' => [$this, 'block_secondary'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "block" => 6, "for" => 7];
        $filters = ["escape" => 1, "t" => 4];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for'],
                ['escape', 't'],
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("training_theme/tabs"), "html", null, true);
        echo "

";
        // line 3
        if (($context["primary"] ?? null)) {
            // line 4
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs"));
            echo "</h2>
  <ul class=\"tabs primary\">
    ";
            // line 6
            $this->displayBlock('primary', $context, $blocks);
            // line 13
            echo "  </ul>
";
        }
        // line 15
        if (($context["secondary"] ?? null)) {
            // line 16
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"tabs secondary\">
    ";
            // line 18
            $this->displayBlock('secondary', $context, $blocks);
            // line 25
            echo "  </ul>
";
        }
    }

    // line 6
    public function block_primary($context, array $blocks = [])
    {
        // line 7
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 8
            echo "        <li class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["is_active"] ?? null)) ? ("is-active") : ("")));
            echo "\">
          <a href=\"";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "link", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "text", [])), "html", null, true);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
    }

    // line 18
    public function block_secondary($context, array $blocks = [])
    {
        // line 19
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 20
            echo "        <li class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["is_active"] ?? null)) ? ("is-active") : ("")));
            echo "\">
          <a href=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "link", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "text", [])), "html", null, true);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@training_theme/tabs/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 24,  133 => 21,  128 => 20,  123 => 19,  120 => 18,  116 => 12,  105 => 9,  100 => 8,  95 => 7,  92 => 6,  86 => 25,  84 => 18,  78 => 16,  76 => 15,  72 => 13,  70 => 6,  64 => 4,  62 => 3,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('training_theme/tabs') }}

{% if primary %}
  <h2 class=\"visually-hidden\">{{ 'Primary tabs'|t }}</h2>
  <ul class=\"tabs primary\">
    {% block primary %}
      {% for tab in tabs %}
        <li class=\"{{ is_active ? 'is-active' }}\">
          <a href=\"{{ tab.link }}\">{{ tab.text }}</a>
        </li>
      {% endfor %}
    {% endblock primary %}
  </ul>
{% endif %}
{% if secondary %}
  <h2 class=\"visually-hidden\">{{ 'Secondary tabs'|t }}</h2>
  <ul class=\"tabs secondary\">
    {% block secondary %}
      {% for tab in tabs %}
        <li class=\"{{is_active ? 'is-active' }}\">
          <a href=\"{{ tab.link }}\">{{ tab.text }}</a>
        </li>
      {% endfor %}
    {% endblock secondary %}
  </ul>
{% endif %}
", "@training_theme/tabs/tabs.twig", "/var/www/html/themes/custom/training_theme/src/patterns/components/tabs/tabs.twig");
    }
}
