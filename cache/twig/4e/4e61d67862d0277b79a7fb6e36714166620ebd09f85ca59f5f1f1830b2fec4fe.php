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

/* modular/callout.html.twig */
class __TwigTemplate_d5c25e34a681def3474c3717c370ca495e1e9dd35fb42d4fc06d72e7652238e6 extends \Twig\Template
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
        echo "<div class=\"callout callout-";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "\" style=\"background-image: url(";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "bckgrd.jpg", [], "array"), "url", []);
        echo ");background-position: ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "position", []);
        echo ";\">
<div class=\"container \">
    <div class=\"callout-row\">
<div class=\"row\">

<div class=\"callout-text col-lg-8 offset-lg-2 text-center\">
<div class=\"callout-bckg\">
";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "    ";
        $this->loadTemplate("partials/buton.html.twig", "modular/callout.html.twig", 11)->display($context);
        // line 12
        echo "</div>
</div>
</div></div></div></div>";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular/callout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  57 => 8,  51 => 12,  48 => 11,  46 => 8,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"callout callout-{{ page.header.title }}\" style=\"background-image: url({{page.media['bckgrd.jpg'].url}});background-position: {{ page.header.position }};\">
<div class=\"container \">
    <div class=\"callout-row\">
<div class=\"row\">

<div class=\"callout-text col-lg-8 offset-lg-2 text-center\">
<div class=\"callout-bckg\">
{% block content %}
    {{ page.content }}
{% endblock %}
    {% include 'partials/buton.html.twig' %}
</div>
</div>
</div></div></div></div>", "modular/callout.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\callout.html.twig");
    }
}
