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

/* modular/references.html.twig */
class __TwigTemplate_e1d3510ace1530b836e09b24f45f26465b50d0d7a8873e4a9037fc0c2a27c158 extends \Twig\Template
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
        <div class=\"col-md-4 text-references\">
            ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "




        </div>
        <div class=\"col-md-8\">
            <div class=\"row\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "
            <div class=\"col-md-6\">
                ";
            // line 18
            echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => 400, 1 => 400], "method"), "html", []);
            echo "
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
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
        return "modular/references.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 5,  73 => 4,  66 => 22,  56 => 18,  52 => 16,  48 => 15,  38 => 7,  36 => 4,  31 => 1,);
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
        <div class=\"col-md-4 text-references\">
            {% block content %}
                {{ page.content }}
            {% endblock %}





        </div>
        <div class=\"col-md-8\">
            <div class=\"row\">
        {% for image in page.media.images %}

            <div class=\"col-md-6\">
                {{ image.cropResize(400,400).html }}
            </div>

        {% endfor %}
            </div>

    </div>
    </div></div>", "modular/references.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\references.html.twig");
    }
}
