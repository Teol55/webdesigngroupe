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

/* modular/team.html.twig */
class __TwigTemplate_973261ac9f57df269d9df61fff74cf7b40f09ae55ac75ba13373a9b1f126c821 extends \Twig\Template
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
        echo "   
   <script type=\"text/javascript\" src=\"user/themes/wdgdesign/js/carousel.js\"></script>
    <script type=\"text/javascript\">
      \$(document).ready(function () {
        var carousel = \$(\"#carousel\").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function (\$item) {
            \$('#callback-output').prepend('movingToCenter: ' + \$item.attr('id') + '<br/>');
          },
          movedToCenter: function (\$item) {
            \$('#callback-output').prepend('movedToCenter: ' + \$item.attr('id') + '<br/>');
          },
          movingFromCenter: function (\$item) {
            \$('#callback-output').prepend('movingFromCenter: ' + \$item.attr('id') + '<br/>');
          },
          movedFromCenter: function (\$item) {
            \$('#callback-output').prepend('movedFromCenter: ' + \$item.attr('id') + '<br/>');
          },
          clickedCenter: function (\$item) {
            \$('#callback-output').prepend('clickedCenter: ' + \$item.attr('id') + '<br/>');
          }
        });

        \$('#prev').on('hover', function () {
          carousel.prev();
          return false
        });

        \$('#next').on('hover', function () {
          carousel.next();
          return false;
        });

        \$('#reload').on('hover', function () {
          newOptions = eval(\"(\" + \$('#newoptions').val() + \")\");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>
    <div class=\"team\">
            <div class=\"row\">
                <div class=\"textteam col-md-5 text-center\">
                    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "\t            ";
        // line 49
        echo "\t\t\t\t\t";
        $this->loadTemplate("partials/buton.html.twig", "modular/team.html.twig", 49)->display($context);
        // line 50
        echo "                </div>
           

\t            ";
        // line 54
        echo "\t\t\t    <div class=\"col-md-7\" id=\"carousel\">
\t\t\t      <a href=\"#\"><img src=\"images/Tifn.jpg\" id=\"tifn\" title=\"Tiphaine\" alt=\"Tifn\" /></a>
\t\t\t      <a href=\"#\"><img src=\"images/Arno.jpg\" id=\"arno\" title=\"Arnaud\" alt=\"Arnaud\"/></a>
\t\t\t      <a href=\"#\"><img src=\"images/Arno-Baunel.jpg\" id=\"arno-baunel\" title=\"Arnaud-Baunel\" alt=\"Arnaud-Baunel\" /></a>
\t\t\t      <a href=\"#\"><img src=\"images/Christof.jpg\" id=\"christof\" title=\"Christophe\" alt=\"Christof\" /></a>    
\t\t\t    </div>
  \t\t\t</div>
</div>";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        // line 46
        echo "                        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 46,  100 => 45,  89 => 54,  84 => 50,  81 => 49,  79 => 48,  77 => 45,  31 => 1,);
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
   <script type=\"text/javascript\" src=\"user/themes/wdgdesign/js/carousel.js\"></script>
    <script type=\"text/javascript\">
      \$(document).ready(function () {
        var carousel = \$(\"#carousel\").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function (\$item) {
            \$('#callback-output').prepend('movingToCenter: ' + \$item.attr('id') + '<br/>');
          },
          movedToCenter: function (\$item) {
            \$('#callback-output').prepend('movedToCenter: ' + \$item.attr('id') + '<br/>');
          },
          movingFromCenter: function (\$item) {
            \$('#callback-output').prepend('movingFromCenter: ' + \$item.attr('id') + '<br/>');
          },
          movedFromCenter: function (\$item) {
            \$('#callback-output').prepend('movedFromCenter: ' + \$item.attr('id') + '<br/>');
          },
          clickedCenter: function (\$item) {
            \$('#callback-output').prepend('clickedCenter: ' + \$item.attr('id') + '<br/>');
          }
        });

        \$('#prev').on('hover', function () {
          carousel.prev();
          return false
        });

        \$('#next').on('hover', function () {
          carousel.next();
          return false;
        });

        \$('#reload').on('hover', function () {
          newOptions = eval(\"(\" + \$('#newoptions').val() + \")\");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>
    <div class=\"team\">
            <div class=\"row\">
                <div class=\"textteam col-md-5 text-center\">
                    {% block content %}
                        {{ page.content }}
                    {% endblock %}
\t            {# Bouton #}
\t\t\t\t\t{% include 'partials/buton.html.twig' %}
                </div>
           

\t            {# Carousel #}
\t\t\t    <div class=\"col-md-7\" id=\"carousel\">
\t\t\t      <a href=\"#\"><img src=\"images/Tifn.jpg\" id=\"tifn\" title=\"Tiphaine\" alt=\"Tifn\" /></a>
\t\t\t      <a href=\"#\"><img src=\"images/Arno.jpg\" id=\"arno\" title=\"Arnaud\" alt=\"Arnaud\"/></a>
\t\t\t      <a href=\"#\"><img src=\"images/Arno-Baunel.jpg\" id=\"arno-baunel\" title=\"Arnaud-Baunel\" alt=\"Arnaud-Baunel\" /></a>
\t\t\t      <a href=\"#\"><img src=\"images/Christof.jpg\" id=\"christof\" title=\"Christophe\" alt=\"Christof\" /></a>    
\t\t\t    </div>
  \t\t\t</div>
</div>", "modular/team.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\modular\\team.html.twig");
    }
}
