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

/* partials/aside.html.twig */
class __TwigTemplate_6b5e837ad9dee6f5ce583c608f6ccb3aa920879309d429af589643c052538249 extends \Twig\Template
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
        echo "
<div class=\"text-aside\">
";
        // line 3
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/aside.html.twig", 3)->display($context);
        echo " <br>



    <a href=\"";
        // line 7
        echo ($context["base_url"] ?? null);
        echo "/search/query:Design\" rel=\"tag\">#Design<br></a>
    <a href=\"";
        // line 8
        echo ($context["base_url"] ?? null);
        echo "/search/query:Développement\" rel=\"tag\">#Développement<br></a>
    <a href=\"";
        // line 9
        echo ($context["base_url"] ?? null);
        echo "/search/query:Marketing\" rel=\"tag\">#Marketing<br></a>
    <br><br>
    <a href=\"";
        // line 11
        echo ($context["base_url"] ?? null);
        echo "/search/query:Arnaud\" rel=\"tag\">#Arnaud<br></a>
    <a href=\"";
        // line 12
        echo ($context["base_url"] ?? null);
        echo "/search/query:Arnaud-Baunel\" rel=\"tag\">#Arnaud-Baunel<br></a>
    <a href=\"";
        // line 13
        echo ($context["base_url"] ?? null);
        echo "/search/query:Christophe\" rel=\"tag\">#Christophe<br></a>
    <a href=\"";
        // line 14
        echo ($context["base_url"] ?? null);
        echo "/search/query:Tiphaine\" rel=\"tag\">#Tiphaine<br></a>

    <div class=\"col-sm-12 col-md-3 menu-footer-news\">
        <h1>NEWSLETTER</h1>
        ";
        // line 18
        $this->loadTemplate("forms/form.html.twig", "partials/aside.html.twig", 18)->display(twig_array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), ["subscribe"])]));
        // line 19
        echo "

    </div>


</div>";
    }

    public function getTemplateName()
    {
        return "partials/aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  73 => 18,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  49 => 9,  45 => 8,  41 => 7,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"text-aside\">
{% include 'partials/simplesearch_searchbox.html.twig' %} <br>



    <a href=\"{{ base_url }}/search/query:Design\" rel=\"tag\">#Design<br></a>
    <a href=\"{{ base_url }}/search/query:Développement\" rel=\"tag\">#Développement<br></a>
    <a href=\"{{ base_url }}/search/query:Marketing\" rel=\"tag\">#Marketing<br></a>
    <br><br>
    <a href=\"{{ base_url }}/search/query:Arnaud\" rel=\"tag\">#Arnaud<br></a>
    <a href=\"{{ base_url }}/search/query:Arnaud-Baunel\" rel=\"tag\">#Arnaud-Baunel<br></a>
    <a href=\"{{ base_url }}/search/query:Christophe\" rel=\"tag\">#Christophe<br></a>
    <a href=\"{{ base_url }}/search/query:Tiphaine\" rel=\"tag\">#Tiphaine<br></a>

    <div class=\"col-sm-12 col-md-3 menu-footer-news\">
        <h1>NEWSLETTER</h1>
        {% include \"forms/form.html.twig\" with { form: forms('subscribe') } %}


    </div>


</div>", "partials/aside.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\aside.html.twig");
    }
}
