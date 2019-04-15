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

/* modular/presentation.html.twig */
class __TwigTemplate_eb297b24238e11b94c700196e064d06ea5672f9114c5b83e5e7541070dcc25ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"presentation\">
<div class=\"row\">

        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 5
            echo "
                <div class=\"col-sm-12 col-md-4\">
                    ";
            // line 7
            echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => 500, 1 => 500], "method"), "html", []);
            echo "
                </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "

</div>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-4 offset-4\">
        ";
        // line 16
        $this->loadTemplate("partials/buton.html.twig", "modular/presentation.html.twig", 16)->display($context);
        echo "</div>
</div></div>";
    }

    public function getTemplateName()
    {
        return "modular/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  53 => 11,  43 => 7,  39 => 5,  35 => 4,  30 => 1,);
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

        {% for image in page.media.images %}

                <div class=\"col-sm-12 col-md-4\">
                    {{ image.cropResize(500,500).html }}
                </div>

        {% endfor %}


</div>
<div class=\"row\">
    <div class=\"col-sm-12 col-md-4 offset-4\">
        {% include 'partials/buton.html.twig' %}</div>
</div></div>", "modular/presentation.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\presentation.html.twig");
    }
}
