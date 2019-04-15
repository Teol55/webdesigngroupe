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

/* modular/projectleft.html.twig */
class __TwigTemplate_128132a4b9461235e2711a41de69ab327e3d0f330b458a7c23b929cc4710e7fe extends \Twig\Template
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
        echo "<div class=\"presentation\">
    <div class=\"row\">
        <div class=\"col-md-4 offset-2 \">

            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "

                ";
            // line 8
            echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => 500, 1 => 500], "method"), "html", []);
            echo "


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "offer", [])) {
            // line 13
            echo "                <div class=\"portfolio-cirlcle\"><strong>Notre +</strong><br><br>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "offer", []);
            echo "</div>
            ";
        }
        // line 15
        echo "

        </div>
        <div class=\"col-md-4 offset-2 text-vision \">
            ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bouton", [])) {
            // line 24
            echo "
            ";
            // line 25
            $this->loadTemplate("partials/buton.html.twig", "modular/projectleft.html.twig", 25)->display($context);
            // line 26
            echo "
            ";
        }
        // line 28
        echo "
        </div>

    </div></div>";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "                ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "modular/projectleft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  93 => 19,  86 => 28,  82 => 26,  80 => 25,  77 => 24,  75 => 23,  72 => 22,  70 => 19,  64 => 15,  58 => 13,  55 => 12,  45 => 8,  41 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"presentation\">
    <div class=\"row\">
        <div class=\"col-md-4 offset-2 \">

            {% for image in page.media.images %}


                {{ image.cropResize(500,500).html }}


            {% endfor %}
            {% if page.header.offer %}
                <div class=\"portfolio-cirlcle\"><strong>Notre +</strong><br><br>{{ page.header.offer }}</div>
            {% endif %}


        </div>
        <div class=\"col-md-4 offset-2 text-vision \">
            {% block content %}
                {{ page.content }}
            {% endblock %}

            {% if page.header.bouton %}

            {% include 'partials/buton.html.twig' %}

            {% endif %}

        </div>

    </div></div>", "modular/projectleft.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\projectleft.html.twig");
    }
}
