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

/* @training_theme/message/message.twig */
class __TwigTemplate_daa955ab54267ed5a5865eb2196422f3b9d12d08392512797147de56cd67ecf6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 3, "if" => 5];
        $filters = ["escape" => 1, "without" => 4, "length" => 11, "first" => 18];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'without', 'length', 'first'],
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("training_theme/message"), "html", null, true);
        echo "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-label"), "html", null, true);
            echo " class=\"message message--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["type"]), "html", null, true);
            echo "\">
    ";
            // line 5
            if (($context["type"] == "error")) {
                // line 6
                echo "      <div role=\"alert\">
    ";
            }
            // line 8
            echo "      ";
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 9
                echo "        <h2 class=\"visually-hidden message__heading\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</h2>
      ";
            }
            // line 11
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 12
                echo "        <ul class=\"messages__list\">
          ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 14
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        </ul>
      ";
            } else {
                // line 18
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "
      ";
            }
            // line 20
            echo "    ";
            if (($context["type"] == "error")) {
                // line 21
                echo "      </div>
    ";
            }
            // line 23
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@training_theme/message/message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 23,  120 => 21,  117 => 20,  111 => 18,  107 => 16,  98 => 14,  94 => 13,  91 => 12,  88 => 11,  82 => 9,  79 => 8,  75 => 6,  73 => 5,  64 => 4,  60 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('training_theme/message') }}

{% for type, messages in message_list %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes|without('role', 'aria-label') }} class=\"message message--{{ type }}\">
    {% if type == 'error' %}
      <div role=\"alert\">
    {% endif %}
      {% if status_headings[type] %}
        <h2 class=\"visually-hidden message__heading\">{{ status_headings[type] }}</h2>
      {% endif %}
      {% if messages|length > 1 %}
        <ul class=\"messages__list\">
          {% for message in messages %}
            <li class=\"messages__item\">{{ message }}</li>
          {% endfor %}
        </ul>
      {% else %}
        {{ messages|first }}
      {% endif %}
    {% if type == 'error' %}
      </div>
    {% endif %}
  </div>
{% endfor %}
", "@training_theme/message/message.twig", "/var/www/html/themes/custom/training_theme/src/patterns/components/message/message.twig");
    }
}
