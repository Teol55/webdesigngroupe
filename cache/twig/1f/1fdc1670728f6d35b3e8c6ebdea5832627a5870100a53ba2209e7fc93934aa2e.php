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

/* partials/blog_item.html.twig */
class __TwigTemplate_430896ed2bb3d4fbb1c81fbd1c5bd530f24e87000035a5c3d9f3d4103b429ef2 extends \Twig\Template
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
        echo "<article>


    ";
        // line 4
        if ( !($context["truncate"] ?? null)) {
            // line 5
            echo "    <div class=\"callout\" style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "bckgrd.jpg", [], "array"), "url", []);
            echo ");background-position:";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "position", []);
            echo ";\">
        <div class=\"container \">
            <div class=\"callout-row\">
                <div class=\"row\">

                    <div class=\"callout-text col-lg-8 offset-lg-2 text-center\">
    <div class=\"callout-bckg\">
        <h1>";
            // line 12
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
            echo "</h1>
        ";
            // line 13
            $this->loadTemplate("partials/buton.html.twig", "partials/blog_item.html.twig", 13)->display($context);
            // line 14
            echo "    </div>
    </div>
    </div></div></div></div>
        <div class=\"row\">
                ";
            // line 19
            echo "
      <div class=\"col-md-10 article-title\">
<h1>";
            // line 21
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
         <p> Ecrit par: ";
            // line 22
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
            echo " <br>
             <time datetime=\"";
            // line 23
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M d, Y");
            echo "\" >";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), " d, Y");
            echo "</time></p>
          ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 25
                echo "              <a href=\"/search/query:";
                echo $context["tag"];
                echo "\" rel=\"tag\">#";
                echo $context["tag"];
                echo "<br></a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
        ";
            // line 28
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
      </div>
       <div class=\"col-md-2 blog-aside\">

           ";
            // line 32
            $this->loadTemplate("partials/aside.html.twig", "partials/blog_item.html.twig", 32)->display($context);
            // line 33
            echo "
       </div></div>
    ";
        }
        // line 36
        echo "

                                                    ";
        // line 39
        echo "    ";
        if (($context["truncate"] ?? null)) {
            // line 40
            echo "    <div class=\"entry-media ";
            if (($context["truncate"] ?? null)) {
                echo "entry-";
                if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []))) {
                    echo "video";
                } else {
                    echo "image";
                }
            } else {
                echo " resp_video";
            }
            echo "\">
        <figure class=\"col-xs-12 col-md-6\">
            ";
            // line 42
            if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))) {
                // line 43
                echo "                ";
                echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 400, 1 => 400], "method"), "html", [0 => "", 1 => "", 2 => "attachment-receptar-featured size-receptar-featured wp-post-image"], "method");
                echo "
            ";
            } else {
                // line 45
                echo "                <img class=\"attachment-receptar-featured size-receptar-featured wp-post-image\" src=\"";
                echo ($context["theme_url"] ?? null);
                echo "/images/";
                echo $this->getAttribute(($context["site"] ?? null), "global_featured_image", []);
                echo "\">
            ";
            }
            // line 47
            echo "        </figure>
    </div>

    <div class=\"entry-inner\">
        <div class=\"entry-inner";
            // line 51
            if (($context["truncate"] ?? null)) {
                echo "-content";
            }
            echo "\">

            <header class=\"entry-header\">
                ";
            // line 54
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
                // line 55
                echo "                    <h1 class=\"entry-title\">
                        ";
                // line 56
                if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                    // line 57
                    echo "                            <a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                        ";
                }
                // line 59
                echo "                        <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
                echo "\">";
                echo $this->getAttribute(($context["page"] ?? null), "title", []);
                echo "</a>
                    </h1>
                ";
            } else {
                // line 62
                echo "                    <h1 class=\"entry-title\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\">";
                echo $this->getAttribute(($context["page"] ?? null), "title", []);
                echo "</a></h1>
                ";
            }
            // line 64
            echo "                ";
            if ( !($context["truncate"] ?? null)) {
                // line 65
                echo "                    <div class=\"entry-category\">
                        ";
                // line 66
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
                    // line 67
                    echo "                            <span class=\"cat-links entry-meta-element\">
            ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 69
                        echo "                <a href=\"";
                        echo ($context["base_url"] ?? null);
                        echo "/category:";
                        echo $context["category"];
                        echo "\" rel=\"category tag\">";
                        echo $context["category"];
                        if ( !$this->getAttribute($context["loop"], "last", [])) {
                            echo ", ";
                        }
                        echo "</a>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "          </span>
                        ";
                }
                // line 73
                echo "                    </div>
                ";
            }
            // line 75
            echo "            </header>

            ";
            // line 77
            if ( !($context["truncate"] ?? null)) {
                // line 78
                echo "                <div class=\"entry-meta entry-meta-bottom\">
                    <time datetime=\"";
                // line 79
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
                echo " ";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y");
                echo "\" class=\"entry-date entry-meta-element published\" title=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
                echo " ";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y");
                echo "\" itemprop=\"datePublished\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "n") - 1));
                echo " ";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d, Y");
                echo "</time>

                    <span class=\"author vcard entry-meta-element\">
          ";
                // line 82
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []))) {
                    // line 83
                    echo "              ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", [])) {
                        // line 84
                        echo "                  ";
                        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", [])) {
                            // line 85
                            echo "                      <a href=\"";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "url", []);
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
                            echo "</a>
                  ";
                        } else {
                            // line 87
                            echo "                      ";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "author", []), "name", []);
                            echo "
                  ";
                        }
                        // line 89
                        echo "          ";
                    } else {
                        // line 90
                        echo "                  ";
                        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", [])) {
                            // line 91
                            echo "                      <a href=\"";
                            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", []);
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
                            echo "</a>
                  ";
                        } else {
                            // line 93
                            echo "                      ";
                            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
                            echo "
                  ";
                        }
                        // line 95
                        echo "              ";
                    }
                    // line 96
                    echo "          ";
                }
                // line 97
                echo "        </span>
                    ";
                // line 98
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
                    // line 99
                    echo "                        <span class=\"tags-links entry-meta-element\">
          ";
                    // line 100
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 101
                        echo "              <a href=\"";
                        echo ($context["base_url"] ?? null);
                        echo "/tag:";
                        echo $context["tag"];
                        echo "\" rel=\"tag\">#";
                        echo $context["tag"];
                        if ( !$this->getAttribute($context["loop"], "last", [])) {
                            echo ", ";
                        }
                        echo "</a>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "        </span>
                    ";
                }
                // line 105
                echo "                </div>
            ";
            }
            // line 107
            echo "            <div class=\"clear\"></div>

            <div class=\"entry-content\">

                ";
            // line 111
            if ( !($context["truncate"] ?? null)) {
                // line 112
                echo "                    ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", [])) {
                    // line 113
                    echo "                        <div class=\"fl-module fl-module-rich-text text-center\" style=\"margin-bottom: 6%;\">
                            <p>
                                ";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 116
                        echo "                                    ";
                        if ($this->getAttribute($context["loop"], "last", [])) {
                            echo "</br>";
                        }
                        // line 117
                        echo "                                    <strong>";
                        echo $this->getAttribute($context["item"], "option", []);
                        echo "</strong> ";
                        echo $this->getAttribute($context["item"], "value", []);
                        if ( !$this->getAttribute($context["loop"], "last", [])) {
                            echo ", ";
                        }
                        // line 118
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "                            </p>
                        </div>
                    ";
                }
                // line 122
                echo "
                    ";
                // line 123
                if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", []))) {
                    // line 124
                    echo "                        <div class=\"fit-vids-style\">
                            <style>
                                .fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}                                                                                   .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0;                                  left: 0; width: 100%; height: 100%;}
                            </style>
                        </div>

                        <div class=\"fl-row fl-row-full-width fl-row-bg-none\" style=\"padding-bottom: 1.62rem;\">
                            <div class=\"fl-video fl-embed-video\">
                                <div class=\"fluid-width-video-wrapper\" style=\"padding-top: 56.2%;\">
                                    ";
                    // line 133
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", [])) {
                        // line 134
                        echo "                                        <iframe src=\"";
                        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "youtube", []);
                        echo "?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
                                    ";
                    }
                    // line 136
                    echo "                                    ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", [])) {
                        // line 137
                        echo "                                        <iframe src=\"";
                        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "vimeo", []);
                        echo "\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
                                    ";
                    }
                    // line 139
                    echo "                                    ";
                    if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", [])) {
                        // line 140
                        echo "                                        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
                        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "soundcloud", []);
                        echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
                                    ";
                    }
                    // line 142
                    echo "                                </div>
                            </div>
                        </div>
                    ";
                }
                // line 146
                echo "

                ";
            }
            // line 149
            echo "                <div class=\"clear\"></div>

                ";
            // line 151
            if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 152
                echo "                    ";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "
                    ";
                // line 153
                if ( !($context["truncate"] ?? null)) {
                    // line 154
                    echo "                        ";
                    $context["show_prev_next"] = true;
                    // line 155
                    echo "                    ";
                }
                // line 156
                echo "                ";
            } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
                // line 157
                echo "                    ";
                if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "summary", []), "striptags", []) == true)) {
                    // line 158
                    echo "                        ";
                    echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", []));
                    echo "
                    ";
                } else {
                    // line 160
                    echo "                        ";
                    echo $this->getAttribute(($context["page"] ?? null), "summary", []);
                    echo "
                    ";
                }
                // line 162
                echo "                ";
            } elseif (($context["truncate"] ?? null)) {
                // line 163
                echo "                    ";
                echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", []), 550);
                echo "
                ";
            } else {
                // line 165
                echo "                    ";
                echo $this->getAttribute(($context["page"] ?? null), "content", []);
                echo "
                    ";
                // line 166
                $context["show_prev_next"] = true;
                // line 167
                echo "                ";
            }
            // line 168
            echo "
                ";
            // line 169
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === false)) {
                // line 170
                echo "                    ";
                if ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", [])))) {
                    // line 171
                    echo "                        <div class=\"link-more\"><a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "lire la suite");
                    echo "</a></div>
                    ";
                } elseif (                // line 172
($context["truncate"] ?? null)) {
                    // line 173
                    echo "                        <div class=\"link-more\"><a href=\"";
                    echo $this->getAttribute(($context["page"] ?? null), "url", []);
                    echo "\">";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "lire la suite");
                    echo "</a></div>
                    ";
                }
                // line 175
                echo "                ";
            }
            // line 176
            echo "

            </div>








        </div>
    </div>
    ";
        }
        // line 190
        echo "        </article>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 190,  586 => 176,  583 => 175,  575 => 173,  573 => 172,  566 => 171,  563 => 170,  561 => 169,  558 => 168,  555 => 167,  553 => 166,  548 => 165,  542 => 163,  539 => 162,  533 => 160,  527 => 158,  524 => 157,  521 => 156,  518 => 155,  515 => 154,  513 => 153,  508 => 152,  506 => 151,  502 => 149,  497 => 146,  491 => 142,  485 => 140,  482 => 139,  476 => 137,  473 => 136,  467 => 134,  465 => 133,  454 => 124,  452 => 123,  449 => 122,  444 => 119,  430 => 118,  422 => 117,  417 => 116,  400 => 115,  396 => 113,  393 => 112,  391 => 111,  385 => 107,  381 => 105,  377 => 103,  353 => 101,  336 => 100,  333 => 99,  331 => 98,  328 => 97,  325 => 96,  322 => 95,  316 => 93,  308 => 91,  305 => 90,  302 => 89,  296 => 87,  288 => 85,  285 => 84,  282 => 83,  280 => 82,  264 => 79,  261 => 78,  259 => 77,  255 => 75,  251 => 73,  247 => 71,  223 => 69,  206 => 68,  203 => 67,  201 => 66,  198 => 65,  195 => 64,  187 => 62,  178 => 59,  172 => 57,  170 => 56,  167 => 55,  165 => 54,  157 => 51,  151 => 47,  143 => 45,  137 => 43,  135 => 42,  120 => 40,  117 => 39,  113 => 36,  108 => 33,  106 => 32,  99 => 28,  96 => 27,  85 => 25,  81 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 19,  56 => 14,  54 => 13,  50 => 12,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article>


    {% if not truncate %}
    <div class=\"callout\" style=\"background-image: url({{page.media['bckgrd.jpg'].url}});background-position:{{ page.header.position }};\">
        <div class=\"container \">
            <div class=\"callout-row\">
                <div class=\"row\">

                    <div class=\"callout-text col-lg-8 offset-lg-2 text-center\">
    <div class=\"callout-bckg\">
        <h1>{{page.header.title}}</h1>
        {% include 'partials/buton.html.twig' %}
    </div>
    </div>
    </div></div></div></div>
        <div class=\"row\">
                {#Contenu de l'article#}

      <div class=\"col-md-10 article-title\">
<h1>{{ page.title }}</h1>
         <p> Ecrit par: {{ page.header.author.name }} <br>
             <time datetime=\"{{ page.date|date(\"M d, Y\") }}\" >{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }}{{ page.date|date(\" d, Y\") }}</time></p>
          {% for tag in page.taxonomy.tag %}
              <a href=\"/search/query:{{ tag }}\" rel=\"tag\">#{{ tag }}<br></a>
          {% endfor %}

        {{ page.content }}
      </div>
       <div class=\"col-md-2 blog-aside\">

           {% include 'partials/aside.html.twig' %}

       </div></div>
    {% endif %}


                                                    {#image#}
    {% if truncate %}
    <div class=\"entry-media {% if truncate %}entry-{% if page.header.youtube or page.header.soundcloud or page.header.vimeo %}video{% else %}image{% endif %}{% else %} resp_video{% endif %}\">
        <figure class=\"col-xs-12 col-md-6\">
            {% if page.media.images|first %}
                {{ page.media.images|first.cropZoom(400,400).html('','', 'attachment-receptar-featured size-receptar-featured wp-post-image') }}
            {% else %}
                <img class=\"attachment-receptar-featured size-receptar-featured wp-post-image\" src=\"{{ theme_url }}/images/{{ site.global_featured_image }}\">
            {% endif %}
        </figure>
    </div>

    <div class=\"entry-inner\">
        <div class=\"entry-inner{% if truncate %}-content{% endif %}\">

            <header class=\"entry-header\">
                {% if page.header.link %}
                    <h1 class=\"entry-title\">
                        {% if page.header.continue_link is not sameas(false) %}
                            <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
                        {% endif %}
                        <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
                    </h1>
                {% else %}
                    <h1 class=\"entry-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
                {% endif %}
                {% if not truncate %}
                    <div class=\"entry-category\">
                        {% if page.taxonomy.category %}
                            <span class=\"cat-links entry-meta-element\">
            {% for category in page.taxonomy.category %}
                <a href=\"{{ base_url }}/category:{{ category }}\" rel=\"category tag\">{{ category }}{% if not loop.last %}, {% endif %}</a>
            {% endfor %}
          </span>
                        {% endif %}
                    </div>
                {% endif %}
            </header>

            {% if not truncate %}
                <div class=\"entry-meta entry-meta-bottom\">
                    <time datetime=\"{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}\" class=\"entry-date entry-meta-element published\" title=\"{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}\" itemprop=\"datePublished\">{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}</time>

                    <span class=\"author vcard entry-meta-element\">
          {% if page.header.author.name or site.author.name %}
              {% if page.header.author.name %}
                  {% if page.header.author.url %}
                      <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
                  {% else %}
                      {{ page.header.author.name }}
                  {% endif %}
          {% else %}
                  {% if site.author.url %}
                      <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
                  {% else %}
                      {{ site.author.name }}
                  {% endif %}
              {% endif %}
          {% endif %}
        </span>
                    {% if page.taxonomy.tag %}
                        <span class=\"tags-links entry-meta-element\">
          {% for tag in page.taxonomy.tag %}
              <a href=\"{{ base_url }}/tag:{{ tag }}\" rel=\"tag\">#{{ tag }}{% if not loop.last %}, {% endif %}</a>
          {% endfor %}
        </span>
                    {% endif %}
                </div>
            {% endif %}
            <div class=\"clear\"></div>

            <div class=\"entry-content\">

                {% if not truncate %}
                    {% if page.header.description %}
                        <div class=\"fl-module fl-module-rich-text text-center\" style=\"margin-bottom: 6%;\">
                            <p>
                                {% for item in page.header.description %}
                                    {% if loop.last %}</br>{% endif %}
                                    <strong>{{ item.option }}</strong> {{ item.value }}{% if not loop.last %}, {% endif %}
                                {% endfor %}
                            </p>
                        </div>
                    {% endif %}

                    {% if page.header.youtube or page.header.vimeo or page.header.soundcloud %}
                        <div class=\"fit-vids-style\">
                            <style>
                                .fluid-width-video-wrapper {width: 100%;position: relative;padding: 0;}                                                                                   .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed { position: absolute; top: 0;                                  left: 0; width: 100%; height: 100%;}
                            </style>
                        </div>

                        <div class=\"fl-row fl-row-full-width fl-row-bg-none\" style=\"padding-bottom: 1.62rem;\">
                            <div class=\"fl-video fl-embed-video\">
                                <div class=\"fluid-width-video-wrapper\" style=\"padding-top: 56.2%;\">
                                    {% if page.header.youtube %}
                                        <iframe src=\"{{ page.header.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
                                    {% endif %}
                                    {% if page.header.vimeo %}
                                        <iframe src=\"{{ page.header.vimeo }}\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
                                    {% endif %}
                                    {% if page.header.soundcloud %}
                                        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endif %}


                {% endif %}
                <div class=\"clear\"></div>

                {% if page.header.continue_link is sameas(false) %}
                    {{ page.content }}
                    {% if not truncate %}
                        {% set show_prev_next = true %}
                    {% endif %}
                {% elseif truncate and page.summary != page.content %}
                    {% if site.summary.striptags == true %}
                        {{ page.summary|striptags }}
                    {% else %}
                        {{ page.summary }}
                    {% endif %}
                {% elseif truncate %}
                    {{ page.content|truncate(550) }}
                {% else %}
                    {{ page.content }}
                    {% set show_prev_next = true %}
                {% endif %}

                {% if page.header.continue_link is not sameas(false) %}
                    {% if truncate and page.summary != page.content %}
                        <div class=\"link-more\"><a href=\"{{ page.url }}\">{{ 'lire la suite'|t }}</a></div>
                    {% elseif truncate %}
                        <div class=\"link-more\"><a href=\"{{ page.url }}\">{{ 'lire la suite'|t }}</a></div>
                    {% endif %}
                {% endif %}


            </div>








        </div>
    </div>
    {% endif %}
        </article>
", "partials/blog_item.html.twig", "C:\\wamp64\\www\\grav\\webdesign\\grav-admin\\user\\themes\\wdgdesign\\templates\\partials\\blog_item.html.twig");
    }
}
