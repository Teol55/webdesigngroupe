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

/* modular/engage.html.twig */
class __TwigTemplate_0c38aad3e567e072abaac5f5394c25493af358d53748a32f3371a15dcd3f8369 extends \Twig\Template
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
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 7
            echo "

                ";
            // line 9
            echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => 500, 1 => 500], "method"), "html", []);
            echo "


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "


        </div>
        <div class=\"col-md-4 text-vision text-center\">
            ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "




        </div>

    </div></div>";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        // line 19
        echo "                ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "modular/engage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  76 => 18,  65 => 21,  63 => 18,  56 => 13,  46 => 9,  42 => 7,  38 => 6,  31 => 1,);
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



        </div>
        <div class=\"col-md-4 text-vision text-center\">
            {% block content %}
                {{ page.content }}
            {% endblock %}





        </div>

    </div></div>", "modular/engage.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\engage.html.twig");
    }
}
