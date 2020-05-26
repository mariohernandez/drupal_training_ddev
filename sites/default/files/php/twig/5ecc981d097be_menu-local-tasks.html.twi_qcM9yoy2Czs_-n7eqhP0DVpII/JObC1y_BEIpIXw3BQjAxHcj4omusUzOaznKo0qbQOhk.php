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

/* themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig */
class __TwigTemplate_674382479359465f685b726849097cdcdb90465185fff5c5d42723cad5911f04 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["embed" => 14];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
                []
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
        // line 14
        $this->loadTemplate("themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig", "themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig", 14, "367645446")->display(twig_to_array(["primary" =>         // line 15
($context["primary"] ?? null), "secondary" =>         // line 16
($context["secondary"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  56 => 15,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display primary and secondary local tasks.
 *
 * Available variables:
 * - primary: HTML list items representing primary tasks.
 * - secondary: HTML list items representing primary tasks.
 *
 * Each item in these variables (primary and secondary) can be individually
 * themed in menu-local-task.html.twig.
 */
#}
{% embed \"@training_theme/tabs/tabs.twig\" with {
  primary: primary,
  secondary: secondary
} only %}
  {% block primary %}
    {{ primary }}
  {% endblock %}
  {% block secondary %}
    {{ secondary }}
  {% endblock %}
{% endembed %}
", "themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig");
    }
}


/* themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig */
class __TwigTemplate_674382479359465f685b726849097cdcdb90465185fff5c5d42723cad5911f04___367645446 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'primary' => [$this, 'block_primary'],
            'secondary' => [$this, 'block_secondary'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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

    protected function doGetParent(array $context)
    {
        // line 14
        return "@training_theme/tabs/tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@training_theme/tabs/tabs.twig", "themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_primary($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 21
    public function block_secondary($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 22,  175 => 21,  168 => 19,  165 => 18,  155 => 14,  57 => 16,  56 => 15,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display primary and secondary local tasks.
 *
 * Available variables:
 * - primary: HTML list items representing primary tasks.
 * - secondary: HTML list items representing primary tasks.
 *
 * Each item in these variables (primary and secondary) can be individually
 * themed in menu-local-task.html.twig.
 */
#}
{% embed \"@training_theme/tabs/tabs.twig\" with {
  primary: primary,
  secondary: secondary
} only %}
  {% block primary %}
    {{ primary }}
  {% endblock %}
  {% block secondary %}
    {{ secondary }}
  {% endblock %}
{% endembed %}
", "themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/tabs/menu-local-tasks.html.twig");
    }
}
