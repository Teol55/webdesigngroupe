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

/* partials/buton.html.twig */
class __TwigTemplate_3badd0011fbc62b6d1a1e9aeafe0d1bde727eb82d95db80d188ad663ac0137c2 extends \Twig\Template
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
        echo "<a href=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lien", []);
        echo "\">
    <div class=\"buttons\">
        <button class=\"blob-btn-";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "color", []);
        echo "\">
            ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bouton", []);
        echo "
            <span class=\"blob-btn-";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "color", []);
        echo "__inner\">
      <span class=\"blob-btn-";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "color", []);
        echo "__blobs\">
        <span class=\"blob-btn-";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "color", []);
        echo "__blob\"></span>
        <span class=\"blob-btn-";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "color", []);
        echo "__blob\"></span>
        <span class=\"blob-btn-";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "color", []);
        echo "__blob\"></span>
        <span class=\"blob-btn-";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "color", []);
        echo "__blob\"></span>
      </span>
                    </span></button>

    </div></a>";
    }

    public function getTemplateName()
    {
        return "partials/buton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ page.header.lien }}\">
    <div class=\"buttons\">
        <button class=\"blob-btn-{{ page.header.color }}\">
            {{ page.header.bouton }}
            <span class=\"blob-btn-{{ page.header.color }}__inner\">
      <span class=\"blob-btn-{{ page.header.color }}__blobs\">
        <span class=\"blob-btn-{{ page.header.color }}__blob\"></span>
        <span class=\"blob-btn-{{ page.header.color }}__blob\"></span>
        <span class=\"blob-btn-{{ page.header.color }}__blob\"></span>
        <span class=\"blob-btn-{{ page.header.color }}__blob\"></span>
      </span>
                    </span></button>

    </div></a>", "partials/buton.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\buton.html.twig");
    }
}
