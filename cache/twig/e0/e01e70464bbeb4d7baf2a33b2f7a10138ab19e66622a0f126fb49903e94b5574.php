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

/* modular/pageteam.html.twig */
class __TwigTemplate_d5b9c8a55863b3bac64c82eac5b505aa8e13e1d98ecbf4d866b3b32e46be6aed extends \Twig\Template
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
        <div class=\"col-md-4 offset-md-4 text-page-team\">
            ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "
        </div>
<div class=\"row\">


        </div>
        <div class=\"col-md-12\">
            <div class=\"row\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "
            <div class=\"col-md-6 img-team\">
                ";
            // line 18
            echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => 400, 1 => 400], "method"), "html", []);
            echo "

            <h2>";
            // line 20
            echo $this->getAttribute($this->getAttribute($context["image"], "meta", []), "title", []);
            echo "</h2>
           <strong> <p>";
            // line 21
            echo $this->getAttribute($this->getAttribute($context["image"], "meta", []), "description", []);
            echo "</p></strong>
            <strong>Aime: </strong><p>";
            // line 22
            echo $this->getAttribute($this->getAttribute($context["image"], "meta", []), "love", []);
            echo "</p>
            <strong>Déteste: </strong><p>";
            // line 23
            echo $this->getAttribute($this->getAttribute($context["image"], "meta", []), "hate", []);
            echo "</p>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>

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
        return "modular/pageteam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 5,  90 => 4,  83 => 27,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  56 => 18,  52 => 16,  48 => 15,  38 => 7,  36 => 4,  31 => 1,);
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
        <div class=\"col-md-4 offset-md-4 text-page-team\">
            {% block content %}
                {{ page.content }}
            {% endblock %}

        </div>
<div class=\"row\">


        </div>
        <div class=\"col-md-12\">
            <div class=\"row\">
        {% for image in page.media.images %}

            <div class=\"col-md-6 img-team\">
                {{ image.cropResize(400,400).html }}

            <h2>{{ image.meta.title }}</h2>
           <strong> <p>{{ image.meta.description }}</p></strong>
            <strong>Aime: </strong><p>{{ image.meta.love }}</p>
            <strong>Déteste: </strong><p>{{ image.meta.hate }}</p>
            </div>

        {% endfor %}
            </div>

    </div>
    </div></div>", "modular/pageteam.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\pageteam.html.twig");
    }
}
