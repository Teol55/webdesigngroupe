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

/* modular/default.html.twig */
class __TwigTemplate_2b98269aa18f2f01c5c92bde8c2d8876b25124e2a0c3e845e2a38ac4a902590a extends \Twig\Template
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

    <div class=\"achievements\">
            <div class=\"row\">

                <div class=\"col-md-6 text-center achievements-text\">
                    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "                    ";
        $this->loadTemplate("partials/buton.html.twig", "modular/default.html.twig", 10)->display($context);
        // line 11
        echo "                </div>
                <div class=\"col-md-6 achievements-img\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                        <img src=\"/user/pages/01.home/_achievements/design.png\"/>
                        </div>
                        <div class=\"col-md-6\">
                        <img src=\"/user/pages/01.home/_achievements/formation.png\"/>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                        <img src=\"/user/pages/01.home/_achievements/marketing.png\"/>
                        </div>
                            <div class=\"col-md-6\">
                        <img src=\"/user/pages/01.home/_achievements/site.png\"/>
                            </div>
                    </div>
                </div></div></div>";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "                        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  66 => 7,  44 => 11,  41 => 10,  39 => 7,  31 => 1,);
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

    <div class=\"achievements\">
            <div class=\"row\">

                <div class=\"col-md-6 text-center achievements-text\">
                    {% block content %}
                        {{ page.content }}
                    {% endblock %}
                    {% include 'partials/buton.html.twig' %}
                </div>
                <div class=\"col-md-6 achievements-img\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                        <img src=\"/user/pages/01.home/_achievements/design.png\"/>
                        </div>
                        <div class=\"col-md-6\">
                        <img src=\"/user/pages/01.home/_achievements/formation.png\"/>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                        <img src=\"/user/pages/01.home/_achievements/marketing.png\"/>
                        </div>
                            <div class=\"col-md-6\">
                        <img src=\"/user/pages/01.home/_achievements/site.png\"/>
                            </div>
                    </div>
                </div></div></div>", "modular/default.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\default.html.twig");
    }
}
