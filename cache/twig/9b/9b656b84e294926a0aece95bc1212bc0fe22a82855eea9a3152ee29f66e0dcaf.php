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

/* partials/header.html.twig */
class __TwigTemplate_387cfe5ccf886462be1a383ae2e6b4fb4b05290f5b2bcc3db35d67d0a1718d56 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header_navigation' => [$this, 'block_header_navigation'],
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"header\">

    <a class=\"logo left\" href=\"";
        // line 3
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
        <img src=\"\\user\\themes\\wdgdesign\\images\\logo.png\") alt=\"logo de WebdesignGroupe\">
        ";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "
    </a>
    ";
        // line 7
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 20
        echo "</div>
";
    }

    // line 7
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "


                ";
        // line 14
        $this->displayBlock('navigation', $context, $blocks);
        // line 17
        echo "    ";
        // line 18
        echo "
    ";
    }

    // line 14
    public function block_navigation($context, array $blocks = [])
    {
        // line 15
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 15)->display($context);
        // line 16
        echo "                ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  79 => 15,  76 => 14,  71 => 18,  69 => 17,  67 => 14,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  53 => 7,  48 => 20,  46 => 7,  41 => 5,  36 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header\">

    <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
        <img src=\"\\user\\themes\\wdgdesign\\images\\logo.png\") alt=\"logo de WebdesignGroupe\">
        {{ config.site.title }}
    </a>
    {% block header_navigation %}
    {#<div class=\"menu\">#}
    {#<span class=\"title\">Sitename</span>#}
    {#<input class=\"burger\" type=\"checkbox\">#}



                {% block navigation %}
                    {% include 'partials/navigation.html.twig' %}
                {% endblock %}
    {#</div>#}

    {% endblock %}
</div>
", "partials/header.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\header.html.twig");
    }
}
