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

/* modular/portfolio.html.twig */
class __TwigTemplate_bcf2cd01cb676d1146975cd74a4781fa91ace2e12dbe647aa8f91233d384f3d7 extends \Twig\Template
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

    <div class=\"col-xs-12 col-sm-12 portfolio\">
            <div class=\"row\">

                <div class=\"col-xs-12 col-md-6 offset-md-4 text-center portfolio-text\">
                    <div class=\"callout-bckg\">

                    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "                        ";
        $this->loadTemplate("partials/buton.html.twig", "modular/portfolio.html.twig", 12)->display($context);
        echo "</div>
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
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  51 => 9,  43 => 12,  41 => 9,  31 => 1,);
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

    <div class=\"col-xs-12 col-sm-12 portfolio\">
            <div class=\"row\">

                <div class=\"col-xs-12 col-md-6 offset-md-4 text-center portfolio-text\">
                    <div class=\"callout-bckg\">

                    {% block content %}
                        {{ page.content }}
                    {% endblock %}
                        {% include 'partials/buton.html.twig' %}</div>
                </div>
            </div></div>", "modular/portfolio.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\portfolio.html.twig");
    }
}
