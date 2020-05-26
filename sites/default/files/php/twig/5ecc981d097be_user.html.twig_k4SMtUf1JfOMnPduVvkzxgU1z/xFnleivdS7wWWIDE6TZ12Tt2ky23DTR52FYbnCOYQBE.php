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

/* themes/custom/training_theme/src/templates/user/user.html.twig */
class __TwigTemplate_198df885a352434e91a5c3c2941386b1fd731ca6b45d074219c4070919b2fafb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 19
        if (($context["content"] ?? null)) {
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/training_theme/src/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  55 => 19,);
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
 * Theme override to present all user data.
 *
 * This template is used when viewing a registered user's page,
 * e.g., example.com/user/123. 123 being the user's ID.
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 *   print a subset such as 'content.field_example'. Fields attached to a user
 *   such as 'user_picture' are available as 'content.user_picture'.
 * - attributes: HTML attributes for the container element.
 * - user: A Drupal User entity.
 *
 * @see template_preprocess_user()
 */
#}
{% if content %}
  {{- content -}}
{% endif %}
", "themes/custom/training_theme/src/templates/user/user.html.twig", "/var/www/html/themes/custom/training_theme/src/templates/user/user.html.twig");
    }
}
