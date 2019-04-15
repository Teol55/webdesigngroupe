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

/* partials/base.html.twig */
class __TwigTemplate_3c0d243630c4c0f9f4515cf19ee8fa7613533660915d8ca7a215c9c45c867410 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "</head>
<body id=\"top\" class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo " site-content\">

";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('bottom', $context, $blocks);
        // line 94
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
    <defs>
        <filter id=\"goo\">
            <feGaussianBlur in=\"SourceGraphic\" result=\"blur\" stdDeviation=\"10\"></feGaussianBlur>
            <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 18 -7\" result=\"goo\"></feColorMatrix>
            <feBlend in2=\"goo\" in=\"SourceGraphic\" result=\"mix\"></feBlend>
        </filter>
    </defs>
</svg>
        <script type='text/javascript'>
            var onWebChat={ar:[], set: function(a,b){if (typeof onWebChat_==='undefined'){this.ar.
            push([a,b]);}else{onWebChat_.set(a,b);}},get:function(a){return(onWebChat_.get(a));},
            w:(function(){ var ga=document.createElement('script'); ga.type = 'text/javascript';
            ga.async=1;ga.src=('https:'==document.location.protocol?'https:':'http:') + 
            '//www.onwebchat.com/clientchat/cea4c9b1be914ced2b074e07b9fc8e71';var s=
            document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})()};

            onWebChat.set(\"languageFile\",\"http://cpmprojet5.atipicdecouvertesportives.fr/fr/onwebchatLanguages.txt\");
            onWebChat.set(\"language\", \"fr\");
        </script>
    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/bouton.css"], "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/callout.css"], "method");
        // line 23
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/app.js"], "method");
        // line 30
        echo "
    ";
    }

    // line 38
    public function block_header($context, array $blocks = [])
    {
        // line 39
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "
";
    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        // line 44
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "        </div>
    </section>
";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
    }

    // line 51
    public function block_footer($context, array $blocks = [])
    {
        // line 52
        echo "    <div class=\"footer text-center\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-3\">
                <h1>CONTACT</h1>
                <p>14 Place du 77ème Régiment d'Intanterie,<br>
                    Bureau 113,<br>
                    49000 Cholet</p>
                <h2>TEl:06-01-02-03-04</h2>
                <div class=\"col-md-12\">
                    <button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-twitter fa-2x\"></i></button>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-instagram fa-2x\"></i></button>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-facebook-f fa-2x\"></i></button>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-3 menu-footer\">
                <h1>SERVICE</h1>

                    <a href=\"/blog\">Blog</a>
                    <a href=\"/competences\">Compétences</a>
                    <a href=\"/contact\">Cookies</a>
                    <a href=\"/mentions\">Données personnelles</a>

            </div>
            <div class=\"col-sm-12 col-md-3 menu-footer\">
                <h1>INFORMATION</h1>
                     <a href=\"/agence\">L'agence</a>
                    <a href=\"/portfolio\">Portfolio</a>
                    <a href=\"/equipe\">L'equipe</a>
                   <a href=\"/contact\">Contact</a>

            </div>
            <div class=\"col-sm-12 col-md-3 menu-footer-news\" id=\"newsletter\">
                <h1>NEWSLETTER</h1>
                ";
        // line 83
        $this->loadTemplate("forms/form.html.twig", "partials/base.html.twig", 83)->display(twig_array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), ["subscribe"])]));
        // line 84
        echo "

            </div>
         </div>
    </div>
";
    }

    // line 91
    public function block_bottom($context, array $blocks = [])
    {
        // line 92
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 92,  266 => 91,  257 => 84,  255 => 83,  222 => 52,  219 => 51,  214 => 46,  208 => 47,  206 => 46,  202 => 44,  199 => 43,  194 => 40,  191 => 39,  188 => 38,  183 => 30,  180 => 29,  177 => 28,  174 => 27,  169 => 23,  166 => 22,  163 => 21,  160 => 20,  157 => 19,  154 => 18,  151 => 17,  143 => 32,  141 => 27,  135 => 25,  133 => 17,  128 => 15,  123 => 13,  120 => 12,  118 => 11,  107 => 7,  104 => 6,  101 => 5,  75 => 94,  73 => 91,  70 => 90,  68 => 51,  65 => 50,  63 => 43,  60 => 42,  58 => 38,  53 => 36,  50 => 35,  48 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/custom.css', 98)%}
        {% do assets.addCss('theme://css-compiled/bouton.css') %}
        {% do assets.addCss('theme://css-compiled/callout.css') %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100)%}
        {% do assets.addJs('theme://js/app.js')%}

    {% endblock %}
        {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }} site-content\">

{% block header %}
        {% include 'partials/header.html.twig' %}

{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-3\">
                <h1>CONTACT</h1>
                <p>14 Place du 77ème Régiment d'Intanterie,<br>
                    Bureau 113,<br>
                    49000 Cholet</p>
                <h2>TEl:06-01-02-03-04</h2>
                <div class=\"col-md-12\">
                    <button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-twitter fa-2x\"></i></button>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-instagram fa-2x\"></i></button>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-link\"><i class=\"fab fa-facebook-f fa-2x\"></i></button>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-3 menu-footer\">
                <h1>SERVICE</h1>

                    <a href=\"/blog\">Blog</a>
                    <a href=\"/competences\">Compétences</a>
                    <a href=\"/contact\">Cookies</a>
                    <a href=\"/mentions\">Données personnelles</a>

            </div>
            <div class=\"col-sm-12 col-md-3 menu-footer\">
                <h1>INFORMATION</h1>
                     <a href=\"/agence\">L'agence</a>
                    <a href=\"/portfolio\">Portfolio</a>
                    <a href=\"/equipe\">L'equipe</a>
                   <a href=\"/contact\">Contact</a>

            </div>
            <div class=\"col-sm-12 col-md-3 menu-footer-news\" id=\"newsletter\">
                <h1>NEWSLETTER</h1>
                {% include \"forms/form.html.twig\" with { form: forms('subscribe') } %}


            </div>
         </div>
    </div>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
    <defs>
        <filter id=\"goo\">
            <feGaussianBlur in=\"SourceGraphic\" result=\"blur\" stdDeviation=\"10\"></feGaussianBlur>
            <feColorMatrix in=\"blur\" mode=\"matrix\" values=\"1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 18 -7\" result=\"goo\"></feColorMatrix>
            <feBlend in2=\"goo\" in=\"SourceGraphic\" result=\"mix\"></feBlend>
        </filter>
    </defs>
</svg>
        <script type='text/javascript'>
            var onWebChat={ar:[], set: function(a,b){if (typeof onWebChat_==='undefined'){this.ar.
            push([a,b]);}else{onWebChat_.set(a,b);}},get:function(a){return(onWebChat_.get(a));},
            w:(function(){ var ga=document.createElement('script'); ga.type = 'text/javascript';
            ga.async=1;ga.src=('https:'==document.location.protocol?'https:':'http:') + 
            '//www.onwebchat.com/clientchat/cea4c9b1be914ced2b074e07b9fc8e71';var s=
            document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})()};

            onWebChat.set(\"languageFile\",\"http://cpmprojet5.atipicdecouvertesportives.fr/fr/onwebchatLanguages.txt\");
            onWebChat.set(\"language\", \"fr\");
        </script>
    </body>
</html>
", "partials/base.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\base.html.twig");
    }
}
