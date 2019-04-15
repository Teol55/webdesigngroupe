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

/* partials/navigation.html.twig */
class __TwigTemplate_becab788fee8b66f7768d95a8770c3d5a731de1eff7a93c3bbcb46f8ed441f00 extends \Twig\Template
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
        echo "<div class=\"toggle_btn\">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<nav class=\"menu\">
    <div class=\"row\">
    <div class=\"menu-text col-md-6\">
        ";
        // line 34
        echo "
            ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 36
            echo "                ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
            ";
        } else {
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("selected") : (""));
                // line 40
                echo "                    <div class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                        <a href=\"";
                // line 41
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                            ";
                // line 42
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 43
                echo "                            ";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            ";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 48
            echo "                <li>
                    <a href=\"";
            // line 49
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                        ";
            // line 50
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 51
            echo "                        ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    </div>
        <div class=\"contact col-md-6\">
                <div class=\"contact-text\">
            <h1>Peut-on vous aider?</h1>
             <p>14 Place du 77ème Régiment d'Intanterie,<br>
                Bureau 113,<br>
                 49000 Cholet</p>
            <h2>Tél:06-01-02-03-04</h2>
                </div>
                <div class=\"col-md-12\">
                    <button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-twitter fa-2x\"></i></button>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-instagram fa-2x\"></i></button>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-facebook-f fa-2x\"></i></button>
                </div>
            <div class=\"buttons\">
            <a href=\"/contact\">

                <button class=\"blob-btn-yellow\">
                   Contactez Nous
                    <span class=\"blob-btn__inner\">
      <span class=\"blob-btn-yellow__blobs\">
        <span class=\"blob-btn-yellow__blob\"></span>
        <span class=\"blob-btn-yellow__blob\"></span>
        <span class=\"blob-btn-yellow__blob\"></span>
        <span class=\"blob-btn-yellow__blob\"></span>
      </span>
                    </span></button>

            </div>
            </a>

        </div>



        </div>
    </div>

</nav>";
    }

    // line 11
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 13
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("selected") : (""));
                // line 14
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 15
                    echo "                    <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                        <a href=\"";
                    // line 16
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                            ";
                    // line 17
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 18
                    echo "                            ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                        </a>
                        <ul>
                            ";
                    // line 21
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                        </ul>
                    </li>
                ";
                } else {
                    // line 25
                    echo "                    <div class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                        <a href=\"";
                    // line 26
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                            ";
                    // line 27
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 28
                    echo "                            ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                        </a>
                    </div>
                ";
                }
                // line 32
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 33,  233 => 32,  225 => 28,  219 => 27,  215 => 26,  210 => 25,  203 => 21,  196 => 18,  190 => 17,  186 => 16,  181 => 15,  178 => 14,  175 => 13,  170 => 12,  158 => 11,  117 => 55,  106 => 51,  100 => 50,  96 => 49,  93 => 48,  87 => 47,  76 => 43,  70 => 42,  66 => 41,  61 => 40,  58 => 39,  53 => 38,  47 => 36,  45 => 35,  42 => 34,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"toggle_btn\">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<nav class=\"menu\">
    <div class=\"row\">
    <div class=\"menu-text col-md-6\">
        {% macro loop(page) %}
            {% for p in page.children.visible %}
                {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
                {% if p.children.visible.count > 0 %}
                    <li class=\"has-children {{ current_page }}\">
                        <a href=\"{{ p.url }}\">
                            {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                            {{ p.menu }}
                        </a>
                        <ul>
                            {{ _self.loop(p) }}
                        </ul>
                    </li>
                {% else %}
                    <div class=\"{{ current_page }}\">
                        <a href=\"{{ p.url }}\">
                            {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                            {{ p.menu }}
                        </a>
                    </div>
                {% endif %}
            {% endfor %}
        {% endmacro %}

            {% if theme_config.dropdown.enabled %}
                {{ _self.loop(pages) }}
            {% else %}
                {% for page in pages.children.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
                    <div class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\">
                            {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                            {{ page.menu }}
                        </a>
                    </div>
                {% endfor %}
            {% endif %}{% for mitem in site.menu %}
                <li>
                    <a href=\"{{ mitem.url }}\">
                        {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                        {{ mitem.text }}
                    </a>
                </li>
            {% endfor %}

    </div>
        <div class=\"contact col-md-6\">
                <div class=\"contact-text\">
            <h1>Peut-on vous aider?</h1>
             <p>14 Place du 77ème Régiment d'Intanterie,<br>
                Bureau 113,<br>
                 49000 Cholet</p>
            <h2>Tél:06-01-02-03-04</h2>
                </div>
                <div class=\"col-md-12\">
                    <button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-twitter fa-2x\"></i></button>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-instagram fa-2x\"></i></button>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-facebook-f fa-2x\"></i></button>
                </div>
            <div class=\"buttons\">
            <a href=\"/contact\">

                <button class=\"blob-btn-yellow\">
                   Contactez Nous
                    <span class=\"blob-btn__inner\">
      <span class=\"blob-btn-yellow__blobs\">
        <span class=\"blob-btn-yellow__blob\"></span>
        <span class=\"blob-btn-yellow__blob\"></span>
        <span class=\"blob-btn-yellow__blob\"></span>
        <span class=\"blob-btn-yellow__blob\"></span>
      </span>
                    </span></button>

            </div>
            </a>

        </div>



        </div>
    </div>

</nav>", "partials/navigation.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\navigation.html.twig");
    }
}
