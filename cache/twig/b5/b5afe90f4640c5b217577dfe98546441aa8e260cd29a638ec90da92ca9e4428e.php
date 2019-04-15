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

/* modular/projectright.html.twig */
class __TwigTemplate_fb78102cdf269add82b5ab145f49cef8e8915a320f29f5f7c4e6d043fc1af52b extends \Twig\Template
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
        echo "<div class=\"text-alone\">
    <div class=\"row\">
        <div class=\"col-md-4 offset-2 text-center\">
            ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bouton", [])) {
            // line 8
            echo "            ";
            $this->loadTemplate("partials/buton.html.twig", "modular/projectright.html.twig", 8)->display($context);
            // line 9
            echo "            ";
        }
        // line 10
        echo "

        </div>
        <div class=\"col-md-4 offset-1 \">

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "

                    ";
            // line 18
            echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => 500, 1 => 500], "method"), "html", []);
            echo "


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "offer", [])) {
            // line 23
            echo "            <div class=\"portfolio-cirlcle\"><strong>Notre +</strong><br><br>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "offer", []);
            echo "</div>
            ";
        }
        // line 25
        echo "
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
        return "modular/projectright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 5,  87 => 4,  81 => 25,  75 => 23,  72 => 22,  62 => 18,  58 => 16,  54 => 15,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 4,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-alone\">
    <div class=\"row\">
        <div class=\"col-md-4 offset-2 text-center\">
            {% block content %}
                {{ page.content }}
            {% endblock %}
            {% if page.header.bouton %}
            {% include 'partials/buton.html.twig' %}
            {% endif %}


        </div>
        <div class=\"col-md-4 offset-1 \">

            {% for image in page.media.images %}


                    {{ image.cropResize(500,500).html }}


            {% endfor %}
            {%  if page.header.offer %}
            <div class=\"portfolio-cirlcle\"><strong>Notre +</strong><br><br>{{ page.header.offer }}</div>
            {% endif %}

    </div>
    </div></div>", "modular/projectright.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\projectright.html.twig");
    }
}
