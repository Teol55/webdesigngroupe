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

/* modular/together.html.twig */
class __TwigTemplate_f611e6cbe728ed5eb16a1b4e481a42e93eb662ce8b260592f33ef2ee19c5f41c extends \Twig\Template
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

    <div class=\"col-xs-12 col-sm-12 together\">
            <div class=\"row\">

                <div class=\"col-xs-12 col-md-6 text-center portfolio-text\">


                    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "
                </div>
            </div></div>";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
        echo "                        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "modular/together.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  49 => 9,  43 => 12,  41 => 9,  31 => 1,);
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

    <div class=\"col-xs-12 col-sm-12 together\">
            <div class=\"row\">

                <div class=\"col-xs-12 col-md-6 text-center portfolio-text\">


                    {% block content %}
                        {{ page.content }}
                    {% endblock %}

                </div>
            </div></div>", "modular/together.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\together.html.twig");
    }
}
