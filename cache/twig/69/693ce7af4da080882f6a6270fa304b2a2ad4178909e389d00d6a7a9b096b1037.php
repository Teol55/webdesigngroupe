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

/* contact.html.twig */
class __TwigTemplate_07ef74dfd4a0538ada98f2f1868cb5ad25635169e2bd8afff6b4cd7262793b9d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contact.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "                <div class=\"page-contact-container \">

                    <div class=\"row\">
                        <div class=\"page-contact-form col-md-4 text-center\">
                            ";
        // line 7
        $this->loadTemplate("forms/form.html.twig", "contact.html.twig", 7)->display(twig_array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), ["contact-form"])]));
        // line 8
        echo "                        </div>

                        <div class=\"page-contact-text col-md-4 offset-2 text-center\">

                            ";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                        </div>

                    </div></div>
            ";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  50 => 8,  48 => 7,  42 => 3,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
            {% block content %}
                <div class=\"page-contact-container \">

                    <div class=\"row\">
                        <div class=\"page-contact-form col-md-4 text-center\">
                            {% include \"forms/form.html.twig\" with { form: forms('contact-form') } %}
                        </div>

                        <div class=\"page-contact-text col-md-4 offset-2 text-center\">

                            {{ page.content }}
                        </div>

                    </div></div>
            {% endblock %}
", "contact.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\contact.html.twig");
    }
}
