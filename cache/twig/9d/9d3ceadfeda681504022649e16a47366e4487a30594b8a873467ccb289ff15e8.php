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

/* modular/blog.html.twig */
class __TwigTemplate_11ca5b325e711d11e3a3d28d71215e0fcfbc2edfefc3086b3f0b5b1b460d8837 extends \Twig\Template
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
        echo "<div class=\"accueil-blog\">
    <div class=\"row\">
        <div class=\"col-md-4 text-blog text-center\">
            ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "
            ";
        // line 8
        $this->loadTemplate("partials/buton.html.twig", "modular/blog.html.twig", 8)->display($context);
        // line 9
        echo "


        </div>


            <div class=\"col-md-6 offset-md-1 sidebar-content recent-posts\">
                <h3>NOS ARTICLES RECENTS</h3>
                <br>
                <div class=\"row\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "date", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 2], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 20
            echo "                    ";
            $context["bannerimage"] = $this->getAttribute($this->getAttribute($context["p"], "media", []), "banner.jpg", [], "array");
            // line 21
            echo "                    <div class=\"col-xs-12 col-md-6 recent-post\">
                        ";
            // line 22
            if (($context["bannerimage"] ?? null)) {
                // line 23
                echo "                            <div class=\"recent-post-image\">";
                echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", [0 => 300, 1 => 200], "method"), "quality", [0 => 60], "method");
                echo "</div>
                        ";
            } else {
                // line 25
                echo "                            <div class=\"recent-post-image\"><img src=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
                echo "\" width=\"60\" height=\"60\"></div>
                        ";
            }
            // line 27
            echo "                        <div class=\"recent-post-text\">
                            <h4><a href=\"";
            // line 28
            echo $this->getAttribute($context["p"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["p"], "title", []);
            echo "</a></h4>
                            <p> ";
            // line 29
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y");
            echo "</p>
                            <p>";
            // line 30
            echo $this->getAttribute($context["p"], "summary", []);
            echo "</p>
                        </div>
                       <div class=\"text-lien\"><a href=\"blog\">Consultez notre blog</a></div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </div>



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
        return "modular/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 5,  114 => 4,  105 => 35,  94 => 30,  88 => 29,  82 => 28,  79 => 27,  73 => 25,  67 => 23,  65 => 22,  62 => 21,  59 => 20,  55 => 19,  43 => 9,  41 => 8,  38 => 7,  36 => 4,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accueil-blog\">
    <div class=\"row\">
        <div class=\"col-md-4 text-blog text-center\">
            {% block content %}
                {{ page.content }}
            {% endblock %}

            {% include 'partials/buton.html.twig' %}



        </div>


            <div class=\"col-md-6 offset-md-1 sidebar-content recent-posts\">
                <h3>NOS ARTICLES RECENTS</h3>
                <br>
                <div class=\"row\">
                {% for p in page.find('/blog').children.order('date', 'desc').slice(0, 2) %}
                    {% set bannerimage = p.media['banner.jpg'] %}
                    <div class=\"col-xs-12 col-md-6 recent-post\">
                        {% if bannerimage %}
                            <div class=\"recent-post-image\">{{ bannerimage.cropZoom(300,200).quality(60) }}</div>
                        {% else %}
                            <div class=\"recent-post-image\"><img src=\"{{ url('theme://images/logo.png') }}\" width=\"60\" height=\"60\"></div>
                        {% endif %}
                        <div class=\"recent-post-text\">
                            <h4><a href=\"{{p.url}}\">{{ p.title }}</a></h4>
                            <p> {{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}</p>
                            <p>{{ p.summary }}</p>
                        </div>
                       <div class=\"text-lien\"><a href=\"blog\">Consultez notre blog</a></div>
                    </div>
                {% endfor %}
                </div>



        </div>
    </div></div>", "modular/blog.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\blog.html.twig");
    }
}
