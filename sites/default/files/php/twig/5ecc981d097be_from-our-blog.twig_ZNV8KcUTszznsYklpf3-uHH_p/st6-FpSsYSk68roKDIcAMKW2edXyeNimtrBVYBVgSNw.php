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

/* @training_theme/from-our-blog/from-our-blog.twig */
class __TwigTemplate_246e1e142de5f16ac478a15cb3b434585a279dec74bdf4c61d7f8d85378aa672 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'blog_items' => [$this, 'block_blog_items'],
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("training_theme/from-our-blog"), "html", null, true);
        echo "

<section class=\"from-our-blog";
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
            $this->loadTemplate("@training_theme/heading/heading.twig", "@training_theme/from-our-blog/from-our-blog.twig", 7)->display(twig_to_array(["heading" =>             // line 8
($context["heading"] ?? null)]));
            // line 11
            echo "  ";
        }
        // line 12
        echo "
  <div class=\"from-our-blog__items\">
    ";
        // line 14
        $this->displayBlock('blog_items', $context, $blocks);
        // line 28
        echo "  </div>
  <div class=\"from-our-blog__cta\">
    ";
        // line 31
        $this->loadTemplate("@training_theme/button/button.twig", "@training_theme/from-our-blog/from-our-blog.twig", 31)->display(twig_to_array(["button" =>         // line 32
($context["cta"] ?? null)]));
        // line 35
        echo "  </div>
</section>
";
    }

    // line 14
    public function block_blog_items($context, array $blocks = [])
    {
        // line 15
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "        ";
            // line 17
            $this->loadTemplate("@training_theme/card/card.twig", "@training_theme/from-our-blog/from-our-blog.twig", 17)->display(twig_to_array(["image" => $this->getAttribute(            // line 18
$context["item"], "image", []), "title" => $this->getAttribute(            // line 19
$context["item"], "title", []), "date" => $this->getAttribute(            // line 20
$context["item"], "date", []), "body_text" => $this->getAttribute(            // line 21
$context["item"], "body_text", []), "tags" => $this->getAttribute(            // line 22
$context["item"], "tags", []), "modifier" => ""]));
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
        return "@training_theme/from-our-blog/from-our-blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 27,  115 => 26,  113 => 22,  112 => 21,  111 => 20,  110 => 19,  109 => 18,  108 => 17,  106 => 16,  101 => 15,  98 => 14,  92 => 35,  90 => 32,  89 => 31,  85 => 28,  83 => 14,  79 => 12,  76 => 11,  74 => 8,  73 => 7,  71 => 6,  69 => 5,  65 => 4,  61 => 3,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('training_theme/from-our-blog') }}

<section class=\"from-our-blog{{ modifier ? ' ' ~ modifier }}{{- attributes ? attributes.class -}}\"
  {{- attributes ? attributes|without(class) -}}>
  {% if heading %}
    {%
      include '@training_theme/heading/heading.twig' with {
        \"heading\": heading
      } only
    %}
  {% endif %}

  <div class=\"from-our-blog__items\">
    {% block blog_items %}
      {% for item in items %}
        {%
          include '@training_theme/card/card.twig' with {
            \"image\": item.image,
            \"title\": item.title,
            \"date\": item.date,
            \"body_text\": item.body_text,
            \"tags\": item.tags,
            \"modifier\": \"\"
          } only
        %}
      {% endfor %}
    {% endblock blog_items %}
  </div>
  <div class=\"from-our-blog__cta\">
    {%
      include '@training_theme/button/button.twig' with {
        button: cta
      } only
    %}
  </div>
</section>
", "@training_theme/from-our-blog/from-our-blog.twig", "/var/www/html/themes/custom/training_theme/src/patterns/components/from-our-blog/from-our-blog.twig");
    }
}
