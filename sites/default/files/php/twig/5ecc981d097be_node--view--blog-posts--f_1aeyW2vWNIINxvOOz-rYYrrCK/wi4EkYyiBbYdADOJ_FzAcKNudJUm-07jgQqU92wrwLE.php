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

/* themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig */
class __TwigTemplate_68d936891f28881f1a4bcc8ca0576a9add85427bbca1d551216f85b042cbe32f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 74, "embed" => 86];
        $filters = ["render" => 74, "format_date" => 76, "trim" => 91];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['render', 'format_date', 'trim'],
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
        // line 73
        echo "
";
        // line 74
        $context["rendered_content"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)));
        // line 75
        echo "
";
        // line 76
        $context["date"] = call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "long"]);
        // line 77
        echo "
";
        // line 78
        $context["article_title"] = ["heading_level" => 3, "modifier" => "card__title", "title" =>         // line 81
($context["label"] ?? null), "url" =>         // line 82
($context["url"] ?? null)];
        // line 85
        echo "
";
        // line 86
        $this->loadTemplate("themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig", "themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig", 86, "1790160206")->display(twig_array_merge($context, ["attributes" =>         // line 88
($context["attributes"] ?? null), "title_prefix" =>         // line 89
($context["title_prefix"] ?? null), "title_suffix" =>         // line 90
($context["title_suffix"] ?? null), "image" => (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 91
($context["content"] ?? null), "field_blog_image", []))))) ? ($this->getAttribute(($context["content"] ?? null), "field_blog_image", [])) : ("")), "title" =>         // line 92
($context["article_title"] ?? null), "date" =>         // line 93
($context["date"] ?? null), "body_text" => (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 94
($context["content"] ?? null), "body", []))))) ? ($this->getAttribute(($context["content"] ?? null), "body", [])) : ("")), "tags" => $this->getAttribute(        // line 95
($context["content"] ?? null), "field_blog_tags", []), "modifier" => ""]));
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 95,  82 => 94,  81 => 93,  80 => 92,  79 => 91,  78 => 90,  77 => 89,  76 => 88,  75 => 86,  72 => 85,  70 => 82,  69 => 81,  68 => 78,  65 => 77,  63 => 76,  60 => 75,  58 => 74,  55 => 73,);
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
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}

{% set rendered_content = content|render %}

{% set date = node.createdtime|format_date('long') %}

{% set article_title = {
    \"heading_level\": 3,
    \"modifier\": \"card__title\",
    \"title\": label,
    \"url\": url
  }
%}

{% embed '@training_theme/card/card.twig' with
  {
    \"attributes\": attributes,
    \"title_prefix\": title_prefix,
    \"title_suffix\": title_suffix,
    \"image\": content.field_blog_image|render|trim is not empty ? content.field_blog_image,
    \"title\": article_title,
    \"date\": date,
    \"body_text\": content.body|render|trim is not empty ? content.body,
    \"tags\": content.field_blog_tags,
    \"modifier\": \"\"
  }
%}

  {% block card_date %}
    {{ date }}
  {% endblock card_date %}

  {% block tags %}
    {{ tags }}
  {% endblock tags %}
{% endembed %}
", "themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig");
    }
}


/* themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig */
class __TwigTemplate_68d936891f28881f1a4bcc8ca0576a9add85427bbca1d551216f85b042cbe32f___1790160206 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'card_date' => [$this, 'block_card_date'],
            'tags' => [$this, 'block_tags'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 101];
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
        // line 86
        return "@training_theme/card/card.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@training_theme/card/card.twig", "themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig", 86);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 100
    public function block_card_date($context, array $blocks = [])
    {
        // line 101
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 104
    public function block_tags($context, array $blocks = [])
    {
        // line 105
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tags"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 105,  284 => 104,  277 => 101,  274 => 100,  264 => 86,  83 => 95,  82 => 94,  81 => 93,  80 => 92,  79 => 91,  78 => 90,  77 => 89,  76 => 88,  75 => 86,  72 => 85,  70 => 82,  69 => 81,  68 => 78,  65 => 77,  63 => 76,  60 => 75,  58 => 74,  55 => 73,);
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
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}

{% set rendered_content = content|render %}

{% set date = node.createdtime|format_date('long') %}

{% set article_title = {
    \"heading_level\": 3,
    \"modifier\": \"card__title\",
    \"title\": label,
    \"url\": url
  }
%}

{% embed '@training_theme/card/card.twig' with
  {
    \"attributes\": attributes,
    \"title_prefix\": title_prefix,
    \"title_suffix\": title_suffix,
    \"image\": content.field_blog_image|render|trim is not empty ? content.field_blog_image,
    \"title\": article_title,
    \"date\": date,
    \"body_text\": content.body|render|trim is not empty ? content.body,
    \"tags\": content.field_blog_tags,
    \"modifier\": \"\"
  }
%}

  {% block card_date %}
    {{ date }}
  {% endblock card_date %}

  {% block tags %}
    {{ tags }}
  {% endblock tags %}
{% endembed %}
", "themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/content/node--view--blog-posts--from-our-blog.html.twig");
    }
}
