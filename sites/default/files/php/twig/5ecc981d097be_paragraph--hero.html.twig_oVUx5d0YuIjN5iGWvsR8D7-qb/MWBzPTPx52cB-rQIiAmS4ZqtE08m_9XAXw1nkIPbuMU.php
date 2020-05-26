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

/* themes/custom/training_theme/src/templates/paragraphs/paragraph--hero.html.twig */
class __TwigTemplate_2d9626a46819dd7a2c3a8333f2d721817e6cebfb58531a6b989a46f1538c9710 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "include" => 63];
        $filters = ["render" => 42, "trim" => 48, "field_raw" => 55];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['render', 'trim', 'field_raw'],
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
        // line 42
        $context["rendered_content"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)));
        // line 43
        echo "
";
        // line 45
        $context["hero_title"] = ["heading_level" => "1", "modifier" => "hero__title heading--large", "title" => (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 48
($context["content"] ?? null), "field_title", [])))))) ? ($this->getAttribute(($context["content"] ?? null), "field_title", [])) : ("")), "url" => ""];
        // line 52
        echo "
";
        // line 54
        $context["hero_cta"] = ["text" => $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getRawValues($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 55
($context["content"] ?? null), "field_cta", [])), "title"), "url" => $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getRawValues($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 56
($context["content"] ?? null), "field_cta", [])), "uri"), "modifier" => "hero__cta"];
        // line 60
        echo "
";
        // line 63
        $this->loadTemplate("@training_theme/hero/hero.twig", "themes/custom/training_theme/src/templates/paragraphs/paragraph--hero.html.twig", 63)->display(twig_to_array(["attributes" =>         // line 64
($context["attributes"] ?? null), "image" => (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 65
($context["content"] ?? null), "field_image", []))))) ? ($this->getAttribute(($context["content"] ?? null), "field_image", [])) : ("")), "heading" =>         // line 66
($context["hero_title"] ?? null), "cta" =>         // line 67
($context["hero_cta"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/paragraphs/paragraph--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 67,  76 => 66,  75 => 65,  74 => 64,  73 => 63,  70 => 60,  68 => 56,  67 => 55,  66 => 54,  63 => 52,  61 => 48,  60 => 45,  57 => 43,  55 => 42,);
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
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{# Declares variable to trigger renderign of content array #}
{% set rendered_content = content|render %}

{# Setting variable for hero title #}
{% set hero_title = {
    heading_level: '1',
    modifier: 'hero__title heading--large',
    title: content.field_title|render|trim is not empty ? content.field_title,
    url: ''
  }
%}

{# Setting variable for hero cta #}
{% set hero_cta = {
    text: content.field_cta|field_raw('title'),
    url: content.field_cta|field_raw('uri'),
    modifier: 'hero__cta'
  }
%}

{# Including hero component and mapping its fields to Drupal's fields #}
{%
  include '@training_theme/hero/hero.twig' with {
    attributes: attributes,
    image: content.field_image|render|trim is not empty ? content.field_image,
    heading: hero_title,
    cta: hero_cta
  } only
%}
", "themes/custom/training_theme/src/templates/paragraphs/paragraph--hero.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/paragraphs/paragraph--hero.html.twig");
    }
}
