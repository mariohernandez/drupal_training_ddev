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

/* themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig */
class __TwigTemplate_4d12fd7aa5beb7c1b2da4b0fa9c4e844a5cc9d86a95b5c19fe00fd213bdfe17e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 73, "embed" => 85];
        $filters = ["format_date" => 73, "render" => 75, "trim" => 90];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['format_date', 'render', 'trim'],
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
        $context["date"] = call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "short"]);
        // line 74
        echo "
";
        // line 75
        $context["rendered_content"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)));
        // line 76
        echo "
";
        // line 77
        $context["article_title"] = ["heading_level" => 3, "modifier" => "card__title", "title" =>         // line 80
($context["label"] ?? null), "url" =>         // line 81
($context["url"] ?? null)];
        // line 84
        echo "
";
        // line 85
        $this->loadTemplate("themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig", "themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig", 85, "1803832681")->display(twig_to_array(["attributes" =>         // line 87
($context["attributes"] ?? null), "title_prefix" =>         // line 88
($context["title_prefix"] ?? null), "title_suffix" =>         // line 89
($context["title_suffix"] ?? null), "image" => (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 90
($context["content"] ?? null), "field_blog_image", []))))) ? ($this->getAttribute(($context["content"] ?? null), "field_blog_image", [])) : ("")), "title" =>         // line 91
($context["article_title"] ?? null), "date" =>         // line 92
($context["date"] ?? null), "category" => (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 93
($context["content"] ?? null), "field_category", []))))) ? ($this->getAttribute(($context["content"] ?? null), "field_category", [])) : ("")), "body_text" => (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 94
($context["content"] ?? null), "body", []))))) ? ($this->getAttribute(($context["content"] ?? null), "body", [])) : ("")), "author" => (( !twig_test_empty(twig_trim_filter($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(        // line 95
($context["content"] ?? null), "field_author", []))))) ? ($this->getAttribute(($context["content"] ?? null), "field_author", [])) : ("")), "modifier" => "card--wide"]));
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 95,  80 => 94,  79 => 93,  78 => 92,  77 => 91,  76 => 90,  75 => 89,  74 => 88,  73 => 87,  72 => 85,  69 => 84,  67 => 81,  66 => 80,  65 => 77,  62 => 76,  60 => 75,  57 => 74,  55 => 73,);
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
{% set date = node.createdtime|format_date('short') %}

{% set rendered_content = content|render %}

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
    \"category\": content.field_category|render|trim is not empty ? content.field_category,
    \"body_text\": content.body|render|trim is not empty ? content.body,
    \"author\": content.field_author|render|trim is not empty ? content.field_author,
    \"modifier\": 'card--wide'
  } only
%}

  {% block featured_date %}
    {{ date }}
  {% endblock featured_date %}

  {% block author %}
    {{ author }}
  {% endblock author %}
{% endembed %}
", "themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig");
    }
}


/* themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig */
class __TwigTemplate_4d12fd7aa5beb7c1b2da4b0fa9c4e844a5cc9d86a95b5c19fe00fd213bdfe17e___1803832681 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'featured_date' => [$this, 'block_featured_date'],
            'author' => [$this, 'block_author'],
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
        // line 85
        return "@training_theme/card/card.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@training_theme/card/card.twig", "themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig", 85);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 100
    public function block_featured_date($context, array $blocks = [])
    {
        // line 101
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
        echo "
  ";
    }

    // line 104
    public function block_author($context, array $blocks = [])
    {
        // line 105
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 105,  282 => 104,  275 => 101,  272 => 100,  262 => 85,  81 => 95,  80 => 94,  79 => 93,  78 => 92,  77 => 91,  76 => 90,  75 => 89,  74 => 88,  73 => 87,  72 => 85,  69 => 84,  67 => 81,  66 => 80,  65 => 77,  62 => 76,  60 => 75,  57 => 74,  55 => 73,);
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
{% set date = node.createdtime|format_date('short') %}

{% set rendered_content = content|render %}

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
    \"category\": content.field_category|render|trim is not empty ? content.field_category,
    \"body_text\": content.body|render|trim is not empty ? content.body,
    \"author\": content.field_author|render|trim is not empty ? content.field_author,
    \"modifier\": 'card--wide'
  } only
%}

  {% block featured_date %}
    {{ date }}
  {% endblock featured_date %}

  {% block author %}
    {{ author }}
  {% endblock author %}
{% endembed %}
", "themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/content/node--view--blog-posts--featured-content.html.twig");
    }
}
