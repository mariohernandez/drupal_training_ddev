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

/* @training_theme/card/card.twig */
class __TwigTemplate_ddd78eba00e2e2f6a741afb656917d27c487ba9b8d5c2f0905574cb66ef84c01 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'featured_date' => [$this, 'block_featured_date'],
            'card_date' => [$this, 'block_card_date'],
            'category' => [$this, 'block_category'],
            'tags' => [$this, 'block_tags'],
            'author' => [$this, 'block_author'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 8, "block" => 10, "include" => 23];
        $filters = ["escape" => 1, "without" => 4];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'include'],
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("training_theme/card"), "html", null, true);
        echo "

<article class=\"card";
        // line 3
        ((($context["modifier"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (" " . ($context["modifier"] ?? null)), "html", null, true))) : (print ("")));
        ((($context["attributes"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (" " . $this->getAttribute(($context["attributes"] ?? null), "class", [])), "html", null, true))) : (print ("")));
        echo "\"";
        // line 4
        ((($context["attributes"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter(($context["attributes"] ?? null), ($context["class"] ?? null)), "html", null, true))) : (print ("")));
        echo ">
  ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 8
        echo "  ";
        if ((($context["view_mode"] ?? null) == "featured")) {
            // line 9
            echo "    <div class=\"card__featured--date\">
      ";
            // line 10
            $this->displayBlock('featured_date', $context, $blocks);
            // line 13
            echo "    </div>
  ";
        }
        // line 15
        echo "  ";
        if (($context["image"] ?? null)) {
            // line 16
            echo "    <div class=\"card__media\">
      ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 20
        echo "  <div class=\"card__content\">
    ";
        // line 21
        if (($context["title"] ?? null)) {
            // line 22
            echo "      ";
            // line 23
            $this->loadTemplate("@training_theme/heading/heading.twig", "@training_theme/card/card.twig", 23)->display(twig_to_array(["heading" =>             // line 24
($context["title"] ?? null)]));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if (( !($context["view_mode"] ?? null) == "featured")) {
            // line 29
            echo "      <div class=\"eyebrow card__date\">
        ";
            // line 30
            $this->displayBlock('card_date', $context, $blocks);
            // line 33
            echo "      </div>
    ";
        }
        // line 35
        echo "    ";
        $this->displayBlock('category', $context, $blocks);
        // line 42
        echo "    ";
        if (($context["body_text"] ?? null)) {
            // line 43
            echo "      <div class=\"card__body\">
        ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_text"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 47
        echo "    ";
        if (($context["tags"] ?? null)) {
            // line 48
            echo "      ";
            $this->displayBlock('tags', $context, $blocks);
            // line 55
            echo "    ";
        }
        // line 56
        echo "    ";
        $this->displayBlock('author', $context, $blocks);
        // line 65
        echo "  </div>
</article>
";
    }

    // line 10
    public function block_featured_date($context, array $blocks = [])
    {
        // line 11
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 30
    public function block_card_date($context, array $blocks = [])
    {
        // line 31
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
        echo "
        ";
    }

    // line 35
    public function block_category($context, array $blocks = [])
    {
        // line 36
        echo "      ";
        if (($context["category"] ?? null)) {
            // line 37
            echo "        <div class=\"eyebrow card__category\">
          ";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["category"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 41
        echo "    ";
    }

    // line 48
    public function block_tags($context, array $blocks = [])
    {
        // line 49
        echo "        ";
        // line 50
        $this->loadTemplate("@training_theme/tags/tags.twig", "@training_theme/card/card.twig", 50)->display(twig_to_array(["items" =>         // line 51
($context["tags"] ?? null)]));
        // line 54
        echo "      ";
    }

    // line 56
    public function block_author($context, array $blocks = [])
    {
        // line 57
        echo "      ";
        if ((($context["author"] ?? null) && ($context["date"] ?? null))) {
            // line 58
            echo "        ";
            // line 59
            $this->loadTemplate("@training_theme/author/author.twig", "@training_theme/card/card.twig", 59)->display(twig_to_array(["author" =>             // line 60
($context["author"] ?? null)]));
            // line 63
            echo "      ";
        }
        // line 64
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@training_theme/card/card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 64,  225 => 63,  223 => 60,  222 => 59,  220 => 58,  217 => 57,  214 => 56,  210 => 54,  208 => 51,  207 => 50,  205 => 49,  202 => 48,  198 => 41,  192 => 38,  189 => 37,  186 => 36,  183 => 35,  176 => 31,  173 => 30,  166 => 11,  163 => 10,  157 => 65,  154 => 56,  151 => 55,  148 => 48,  145 => 47,  139 => 44,  136 => 43,  133 => 42,  130 => 35,  126 => 33,  124 => 30,  121 => 29,  118 => 28,  115 => 27,  113 => 24,  112 => 23,  110 => 22,  108 => 21,  105 => 20,  99 => 17,  96 => 16,  93 => 15,  89 => 13,  87 => 10,  84 => 9,  81 => 8,  77 => 6,  73 => 5,  69 => 4,  65 => 3,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('training_theme/card') }}

<article class=\"card{{ modifier ? ' ' ~ modifier }}{{- attributes ? ' ' ~ attributes.class -}}\"
  {{- attributes ? attributes|without(class) -}}>
  {{ title_prefix }}
  {{ title_suffix }}
  {# Date for featured content cards. #}
  {% if view_mode == 'featured' %}
    <div class=\"card__featured--date\">
      {% block featured_date %}
        {{ date }}
      {% endblock %}
    </div>
  {% endif %}
  {% if image %}
    <div class=\"card__media\">
      {{ image }}
    </div>
  {% endif %}
  <div class=\"card__content\">
    {% if title %}
      {%
        include '@training_theme/heading/heading.twig' with {
          heading: title
        } only
      %}
    {% endif %}
    {% if not view_mode == 'featured' %}
      <div class=\"eyebrow card__date\">
        {% block card_date %}
          {{ date }}
        {% endblock card_date %}
      </div>
    {% endif %}
    {% block category %}
      {% if category %}
        <div class=\"eyebrow card__category\">
          {{ category }}
        </div>
      {% endif %}
    {% endblock category %}
    {% if body_text %}
      <div class=\"card__body\">
        {{ body_text }}
      </div>
    {% endif %}
    {% if tags %}
      {% block tags %}
        {%
          include '@training_theme/tags/tags.twig' with {
            \"items\": tags
          } only
        %}
      {% endblock tags %}
    {% endif %}
    {% block author %}
      {% if author and date %}
        {%
          include '@training_theme/author/author.twig' with {
            author: author
          } only
        %}
      {% endif %}
    {% endblock author %}
  </div>
</article>
", "@training_theme/card/card.twig", "/var/www/html/themes/custom/training_theme/src/patterns/components/card/card.twig");
    }
}
