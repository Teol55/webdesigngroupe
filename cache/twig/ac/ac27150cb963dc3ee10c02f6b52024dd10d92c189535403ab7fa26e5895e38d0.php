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

/* modular/contact.html.twig */
class __TwigTemplate_c14090eb80ddae737fc39eda77314b11069c9f903939c83c2d7a51b0e7881d55 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "

    <div class=\"contact-container\">

            <div class=\"row\">
                <div class=\"form-contact col-md-4 text-center page-contact-form\">
                    ";
        // line 7
        $this->loadTemplate("forms/form.html.twig", "modular/contact.html.twig", 7)->display(twig_array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), ["contact-form"])]));
        // line 8
        echo "                </div>

                <div class=\"text-contact col-md-4 offset-2 text-center\">
                  ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "                </div>

            </div></div>";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        // line 12
        echo "                        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  48 => 14,  46 => 11,  41 => 8,  39 => 7,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("

    <div class=\"contact-container\">

            <div class=\"row\">
                <div class=\"form-contact col-md-4 text-center page-contact-form\">
                    {% include \"forms/form.html.twig\" with { form: forms('contact-form') } %}
                </div>

                <div class=\"text-contact col-md-4 offset-2 text-center\">
                  {% block content %}
                        {{ page.content }}
                    {% endblock %}
                </div>

            </div></div>", "modular/contact.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\contact.html.twig");
    }
}
