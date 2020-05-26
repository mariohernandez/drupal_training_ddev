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

/* themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig */
class __TwigTemplate_3b6727105b42e9e3d6b1c3922b4ed9c9e1921db4d58212516d18fc1d2b291910 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 37, "embed" => 45];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
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
        // line 36
        echo "
";
        // line 37
        $context["section_heading"] = ["heading_leve" => 3, "modifier" => "heading--large center section-header", "title" =>         // line 40
($context["label"] ?? null), "url" => ""];
        // line 44
        echo "
";
        // line 45
        $this->loadTemplate("themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig", "themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig", 45, "1236273119")->display(twig_array_merge($context, ["attributes" =>         // line 47
($context["attributes"] ?? null), "heading" =>         // line 48
($context["section_heading"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 48,  65 => 47,  64 => 45,  61 => 44,  59 => 40,  58 => 37,  55 => 36,);
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
 * Theme override for a field.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 *
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 */
#}

{% set section_heading = {
    \"heading_leve\": 3,
    \"modifier\": 'heading--large center section-header',
    \"title\": label,
    \"url\": \"\"
  }
%}

{% embed '@training_theme/featured-content/featured-content.twig' with
  {
    \"attributes\": attributes,
    \"heading\": section_heading
  }
%}

  {% block featured_items %}
    {% for item in items %}
      {{ item.content }}
    {% endfor %}
  {% endblock featured_items %}
{% endembed %}
", "themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig");
    }
}


/* themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig */
class __TwigTemplate_3b6727105b42e9e3d6b1c3922b4ed9c9e1921db4d58212516d18fc1d2b291910___1236273119 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'featured_items' => [$this, 'block_featured_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 53];
        $filters = ["escape" => 54];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        // line 45
        return "@training_theme/featured-content/featured-content.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@training_theme/featured-content/featured-content.twig", "themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig", 45);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 52
    public function block_featured_items($context, array $blocks = [])
    {
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 56,  214 => 54,  209 => 53,  206 => 52,  196 => 45,  66 => 48,  65 => 47,  64 => 45,  61 => 44,  59 => 40,  58 => 37,  55 => 36,);
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
 * Theme override for a field.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 *
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 */
#}

{% set section_heading = {
    \"heading_leve\": 3,
    \"modifier\": 'heading--large center section-header',
    \"title\": label,
    \"url\": \"\"
  }
%}

{% embed '@training_theme/featured-content/featured-content.twig' with
  {
    \"attributes\": attributes,
    \"heading\": section_heading
  }
%}

  {% block featured_items %}
    {% for item in items %}
      {{ item.content }}
    {% endfor %}
  {% endblock featured_items %}
{% endembed %}
", "themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/field/field--node--field-featured-content.html.twig");
    }
}
