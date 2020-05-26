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

/* @training_theme/featured-content/featured-content.twig */
class __TwigTemplate_a20a73526ff33c1f962ece53dcb529d6a20b4c9a8c4e791b39def6b0f58e9828 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'featured_items' => [$this, 'block_featured_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5, "include" => 7, "block" => 14, "for" => 15];
        $filters = ["escape" => 1, "without" => 4];
        $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'block', 'for'],
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("training_theme/featured-content"), "html", null, true);
        echo "

<section class=\"featured-content";
        // line 3
        ((($context["modifier"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (" " . ($context["modifier"] ?? null)), "html", null, true))) : (print ("")));
        ((($context["attributes"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "class", []), "html", null, true))) : (print ("")));
        echo "\"";
        // line 4
        ((($context["attributes"] ?? null)) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter(($context["attributes"] ?? null), ($context["class"] ?? null)), "html", null, true))) : (print ("")));
        echo ">
  ";
        // line 5
        if (($context["heading"] ?? null)) {
            // line 6
            echo "    ";
            // line 7
            $this->loadTemplate("@training_theme/heading/heading.twig", "@training_theme/featured-content/featured-content.twig", 7)->display(twig_to_array(["heading" =>             // line 8
($context["heading"] ?? null)]));
            // line 11
            echo "  ";
        }
        // line 12
        echo "
  <div class=\"featured-content__items\">
    ";
        // line 14
        $this->displayBlock('featured_items', $context, $blocks);
        // line 28
        echo "  </div>
</section>
";
    }

    // line 14
    public function block_featured_items($context, array $blocks = [])
    {
        // line 15
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "        ";
            // line 17
            $this->loadTemplate("@training_theme/card/card.twig", "@training_theme/featured-content/featured-content.twig", 17)->display(twig_to_array(["image" => $this->getAttribute(            // line 18
$context["item"], "image", []), "title" => $this->getAttribute(            // line 19
$context["item"], "title", []), "date" => $this->getAttribute(            // line 20
$context["item"], "date", []), "body_text" => $this->getAttribute(            // line 21
$context["item"], "body_text", []), "author" => $this->getAttribute(            // line 22
$context["item"], "author", []), "modifier" => $this->getAttribute(            // line 23
$context["item"], "modifier", [])]));
            // line 26
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@training_theme/featured-content/featured-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  109 => 26,  107 => 23,  106 => 22,  105 => 21,  104 => 20,  103 => 19,  102 => 18,  101 => 17,  99 => 16,  94 => 15,  91 => 14,  85 => 28,  83 => 14,  79 => 12,  76 => 11,  74 => 8,  73 => 7,  71 => 6,  69 => 5,  65 => 4,  61 => 3,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('training_theme/featured-content') }}

<section class=\"featured-content{{ modifier ? ' ' ~ modifier }}{{- attributes ? attributes.class -}}\"
  {{- attributes ? attributes|without(class) -}}>
  {% if heading %}
    {%
      include '@training_theme/heading/heading.twig' with {
        \"heading\": heading
      } only
    %}
  {% endif %}

  <div class=\"featured-content__items\">
    {% block featured_items %}
      {% for item in items %}
        {%
          include '@training_theme/card/card.twig' with {
            \"image\": item.image,
            \"title\": item.title,
            \"date\": item.date,
            \"body_text\": item.body_text,
            \"author\": item.author,
            \"modifier\": item.modifier
          } only
        %}
      {% endfor %}
    {% endblock featured_items %}
  </div>
</section>
", "@training_theme/featured-content/featured-content.twig", "/var/www/html/themes/custom/training_theme/src/patterns/components/featured-content/featured-content.twig");
    }
}
