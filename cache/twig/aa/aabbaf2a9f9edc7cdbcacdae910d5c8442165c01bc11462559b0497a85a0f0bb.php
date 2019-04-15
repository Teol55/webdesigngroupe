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

/* blog.html.twig */
class __TwigTemplate_9fe2f054a8e01f118f388c3821be203b4ea6e25541b49baa5ba95fd2297e4a1c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 2);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "
    <div class=\"callout callout-";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "\"style=\"background-image: url(";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "bckgrd.jpg", [], "array"), "url", []);
        echo ");background-position: ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "position", []);
        echo ";\">
        <div class=\"container \">
            <div class=\"callout-row\">
                <div class=\"row\">

                    <div class=\"callout-text col-lg-8 offset-lg-2 text-center\">


                                ";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "



                    </div>
                </div></div></div></div>

<div class=\"row\">
    <div class=\"col-md-10\">
<div class=\"row\">
";
        // line 24
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 25
        echo "
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            echo "    <div class=\"col-md-5\">
    ";
            // line 28
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 28)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true]));
            // line 29
            echo "    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div></div>
<div class=\"col-md-2 blog-aside\">

    ";
        // line 33
        $this->loadTemplate("partials/aside.html.twig", "blog.html.twig", 33)->display($context);
        // line 34
        echo "

</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  120 => 33,  115 => 30,  100 => 29,  98 => 28,  95 => 27,  78 => 26,  75 => 25,  73 => 24,  60 => 14,  45 => 6,  42 => 5,  39 => 4,  22 => 2,);
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
{% extends 'partials/base.html.twig' %}

{% block content %}

    <div class=\"callout callout-{{ page.title}}\"style=\"background-image: url({{page.media['bckgrd.jpg'].url}});background-position: {{ page.header.position }};\">
        <div class=\"container \">
            <div class=\"callout-row\">
                <div class=\"row\">

                    <div class=\"callout-text col-lg-8 offset-lg-2 text-center\">


                                {{ page.content }}



                    </div>
                </div></div></div></div>

<div class=\"row\">
    <div class=\"col-md-10\">
<div class=\"row\">
{% set collection = page.collection() %}

{% for child in collection %}
    <div class=\"col-md-5\">
    {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
    </div>
{% endfor %}</div></div>
<div class=\"col-md-2 blog-aside\">

    {% include 'partials/aside.html.twig' %}


</div>
</div>

{% endblock %}", "blog.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\blog.html.twig");
    }
}
