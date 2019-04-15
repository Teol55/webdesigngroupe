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

/* modular/offer.html.twig */
class __TwigTemplate_d336d549d0b7066fcf23288f02ec15bc0e15b74b61d8da461e39123458d1ccfd extends \Twig\Template
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
        echo "<div class=\"accueil-offer\">
    <div class=\"row\">
        <div class=\"col-md-4 text-blog text-center\">
            ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "
            ";
        // line 8
        $this->loadTemplate("partials/buton.html.twig", "modular/offer.html.twig", 8)->display($context);
        // line 9
        echo "


        </div>


            <div class=\"col-md-6 offset-md-1 sidebar-content recent-posts\">
                <div class=\"row\">


                    <div class=\"col-md-4\">

                        ";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "tarif1.jpg", [], "array");
        echo "
                        <div class=\"circle-offer\">Perso<br>A partir de 500€</div>
                    </div>
                    <div class=\"col-md-4\">

                        ";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "tarif2.jpg", [], "array");
        echo "
                        <div class=\"circle-offer\">Advanced<br>A partir de 800€</div>
                    </div>
                    <div class=\"col-md-4\">

                        ";
        // line 31
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "tarif3.jpg", [], "array");
        echo "
                        <div class=\"circle-offer\">Business<br>A partir de 1200€</div>
                    </div>


                </div>


        </div>
    </div></div>";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "                ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "modular/offer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 5,  87 => 4,  73 => 31,  65 => 26,  57 => 21,  43 => 9,  41 => 8,  38 => 7,  36 => 4,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accueil-offer\">
    <div class=\"row\">
        <div class=\"col-md-4 text-blog text-center\">
            {% block content %}
                {{ page.content }}
            {% endblock %}

            {% include 'partials/buton.html.twig' %}



        </div>


            <div class=\"col-md-6 offset-md-1 sidebar-content recent-posts\">
                <div class=\"row\">


                    <div class=\"col-md-4\">

                        {{page.media['tarif1.jpg']}}
                        <div class=\"circle-offer\">Perso<br>A partir de 500€</div>
                    </div>
                    <div class=\"col-md-4\">

                        {{page.media['tarif2.jpg']}}
                        <div class=\"circle-offer\">Advanced<br>A partir de 800€</div>
                    </div>
                    <div class=\"col-md-4\">

                        {{page.media['tarif3.jpg']}}
                        <div class=\"circle-offer\">Business<br>A partir de 1200€</div>
                    </div>


                </div>


        </div>
    </div></div>", "modular/offer.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\offer.html.twig");
    }
}
