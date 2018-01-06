<?php

/* partials/base.html.twig */
class __TwigTemplate_3e8412eba7bebdb47615c6f262733087764a7379a01ca873eb10615820d5959f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'sidebar_navigation' => array($this, 'block_sidebar_navigation'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "</head>
<body id=\"top\" class=\"";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
<div class=\"wrapper\">
<div class=\"layout layout_center not-columned layout_center_2_id_2_id_5_0\">
    <div class=\"layout columned columns-2 layout_2_id_5\">
        <div class=\"layout column layout_5\">
            <div class=\"editorElement layer-type-block ui-droppable block-2\">
                <div class=\"site-name widget-2 widget-type-site_name editorElement layer-type-widget\">
                    <a href=\"http://aincapital.com\"> \t\t\t\t\t\t \t\t\t\t\t\t \t\t\t\t\t\t<div class=\"sn-wrap\">
                            <div class=\"sn-logo\">

                                <img src=\"";
        // line 53
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo-3.png");
        echo "\" alt=\"\">

                            </div>

                        </div>
                    </a>
                </div>
                <div class=\"site-description widget-3 widget-type-site_description editorElement layer-type-widget\">

                    <div class=\"align-elem\">
                        Управляющая компания
                    </div>

                </div>
            </div>
        </div>
        <div class=\"layout column layout_18\">
            <div class=\"editorElement layer-type-block ui-droppable block-7\">
                <div class=\"layout column layout_8\">
                    <div class=\"editorElement layer-type-block ui-droppable block-3\">
                        <div class=\"phones-6 widget-4 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget\">
                            <div class=\"inner\">
                                <label class=\"cell-icon\" for=\"tg-phones-6\">
                                    <div class=\"icon\"></div>
                                </label>
                                <input id=\"tg-phones-6\" class=\"tgl-but\" type=\"checkbox\">
                                <div class=\"block-body-drop\">
                                    <div class=\"cell-text\">
                                        <div class=\"title\"><div class=\"align-elem\">Телефон:</div></div>
                                        <div class=\"text_body\">
                                            <div class=\"align-elem\">
                                                <div><a href=\"tel:+7 (727) 357 26 06\">+7 (727) 357 26 06</a></div>\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"email-36 widget-33 email-block contacts-block widget-type-contacts_email editorElement layer-type-widget\">
                            <div class=\"inner\">
                                <label class=\"cell-icon\" for=\"tg-email-36\">
                                    <div class=\"icon\"></div>
                                </label>
                                <input id=\"tg-email-36\" class=\"tgl-but\" type=\"checkbox\">
                                <div class=\"block-body-drop\">
                                    <div class=\"cell-text\">
                                        <div class=\"title\"><div class=\"align-elem\">Email:</div></div>
                                        <div class=\"text_body\">
                                            <div class=\"align-elem\"><a href=\"mailto:info@aincapital.com\">info@aincapital.com</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"layout column layout_9\">
                    <a class=\"button-9 widget-6 widget-type-button editorElement layer-type-widget\" href=\"#\" data-wr-class=\"popover-wrap-9\"><span>Контакты</span></a><!--widget-6-->

                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <div id=\"sb-site\">
        ";
        // line 119
        $this->displayBlock('header', $context, $blocks);
        // line 133
        echo "
        ";
        // line 134
        $this->displayBlock('showcase', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        $this->displayBlock('body', $context, $blocks);
        // line 141
        echo "
        ";
        // line 142
        $context["ideal_solution"] =         $this->renderBlock("ideal_solution", $context, $blocks);
        // line 143
        echo "        ";
        if ( !twig_test_empty(($context["ideal_solution"] ?? null))) {
            // line 144
            echo "            ";
            echo ($context["ideal_solution"] ?? null);
            echo "
        ";
        }
        // line 146
        echo "        ";
        $context["why_choose"] =         $this->renderBlock("why_choose", $context, $blocks);
        // line 147
        echo "        ";
        if ( !twig_test_empty(($context["why_choose"] ?? null))) {
            // line 148
            echo "            ";
            echo ($context["why_choose"] ?? null);
            echo "
        ";
        }
        // line 150
        echo "        ";
        $context["partners_thumbs"] =         $this->renderBlock("partners_thumbs", $context, $blocks);
        // line 151
        echo "        ";
        if ( !twig_test_empty(($context["partners_thumbs"] ?? null))) {
            // line 152
            echo "            ";
            echo ($context["partners_thumbs"] ?? null);
            echo "
        ";
        }
        // line 154
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 276
        echo "    </div>
    ";
        // line 277
        $this->displayBlock('sidebar_navigation', $context, $blocks);
        // line 284
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 297
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/aostyles.css"), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/title.styles.css"), "method");
        // line 23
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 10))) {
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 27
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 28
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 29
            echo "        ";
        }
        // line 30
        echo "    ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 38
        echo "    ";
    }

    // line 119
    public function block_header($context, array $blocks = array())
    {
        // line 120
        echo "        <header id=\"header\">
            <div id=\"navbar\">
                ";
        // line 122
        $this->displayBlock('header_extra', $context, $blocks);
        // line 123
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 124
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 124)->display($context);
            // line 125
            echo "                ";
        }
        // line 126
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 129
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 122
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 126
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 127
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 127)->display($context);
        // line 128
        echo "                ";
    }

    // line 134
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
        // line 137
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 138
        $this->displayBlock('content', $context, $blocks);
        // line 139
        echo "        </section>
        ";
    }

    // line 138
    public function block_content($context, array $blocks = array())
    {
    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        // line 155
        echo "        <footer id=\"footer\">
            <div class=\"wrapper\">
            <div class=\"editorElement layer-type-block ui-droppable block-9\">
                <div class=\"layout layout_center not-columned layout_23_id_23_id_27\">
                    <div class=\"layout columned columns-2 layout_23_id_27\">
                        <div class=\"layout column layout_27\">
                            <div class=\"editorElement layer-type-block ui-droppable block-10\">
                                <div class=\"address-30 widget-20 address-block contacts-block widget-type-contacts_address editorElement layer-type-widget\">
                                    <div class=\"inner\">
                                        <label class=\"cell-icon\" for=\"tg30\">
                                            <div class=\"icon\"></div>
                                        </label>
                                        <input id=\"tg30\" class=\"tgl-but\" type=\"checkbox\">
                                        <div class=\"block-body-drop\">
                                            <div class=\"cell-text\">
                                                <div class=\"title\"><div class=\"align-elem\">Адрес:</div></div>
                                                <div class=\"text_body\">
                                                    <div class=\"align-elem\">г. Алматы, <br>
                                                        ул. Маркова 61/1, <br>
                                                        БЦ \"Гарант\", офис 301</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"phones-29 widget-19 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget\">
                                    <div class=\"inner\">
                                        <label class=\"cell-icon\" for=\"tg-phones-29\">
                                            <div class=\"icon\"></div>
                                        </label>
                                        <input id=\"tg-phones-29\" class=\"tgl-but\" type=\"checkbox\">
                                        <div class=\"block-body-drop\">
                                            <div class=\"cell-text\">
                                                <div class=\"title\"><div class=\"align-elem\">Телефон:</div></div>
                                                <div class=\"text_body\">
                                                    <div class=\"align-elem\">
                                                        <div><a href=\"tel:+7 (727) 357 26 06\">+7 (727) 357 26 06</a></div>\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"site-counters widget-25 widget-type-site_counters editorElement layer-type-widget\">
                                    <!--LiveInternet counter--><script type=\"text/javascript\">
                                        document.write(\"<a href='//www.liveinternet.ru/click' \"+
                                            \"target=_blank><img src='//counter.yadro.ru/hit?t52.1;r\"+
                                            escape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
                                                \";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
                                                screen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
                                            \";\"+Math.random()+
                                            \"' alt='' title='LiveInternet: показано число просмотров и\"+
                                            \" посетителей за 24 часа' \"+
                                            \"border='0' width='88' height='31'><\\/a>\")
                                    </script><a href=\"//www.liveinternet.ru/click\" target=\"_blank\"><img src=\"//counter.yadro.ru/hit?t52.1;r;s1366*768*24;uhttp%3A//aincapital.com/;0.6655334647081175\" alt=\"\" title=\"LiveInternet: показано число просмотров и посетителей за 24 часа\" border=\"0\" width=\"88\" height=\"31\"></a><!--/LiveInternet--><!--cms statistics-->
                                    <script type=\"text/javascript\"><!--
                                        var megacounter_key=\"ae66cb5dad02060d2c790390ed41fb08\";
                                        (function(d){
                                            var s = d.createElement(\"script\");
                                            s.src = \"//counter.megagroup.ru/loader.js?\"+new Date().getTime();
                                            s.async = true;
                                            d.getElementsByTagName(\"head\")[0].appendChild(s);
                                        })(document);
                                        //--></script>
                                    <!--/cms statistics-->
                                    <!--__INFO2018-01-05 00:48:13INFO__-->

                                </div>
                            </div>
                        </div>
                        <div class=\"layout column layout_26\">




                            <div class=\"form-26 widget-17 vertical_mode widget-type-form_adaptive editorElement layer-type-widget\">
                                <div class=\"form__header\"><div class=\"align-elem\">ОСТАЛИСЬ ВОПРОСЫ? МЫ ВСЕГДА ГОТОВЫ ПОМОЧЬ</div></div>\t\t\t\t<div class=\"form__body\" data-api-type=\"form\" data-api-url=\"/my/s3/xapi/public/?method=form/postform&amp;param[form_id]=940405\">
                                    <form method=\"post\">
                                        <input type=\"hidden\" name=\"_form_item\" value=\"26\">
                                        <input type=\"hidden\" name=\"form_id\" value=\"940405\">
                                        <input type=\"hidden\" name=\"tpl\" value=\"db:title.tpl\">
                                        <div class=\"form-table\">
                                            <div class=\"form-tbody\">
                                                <div class=\"form-item-group group-text\">
                                                    <div class=\"form-item form-text name\"><div class=\"form-item__body\"><input class=\"wm-input-default\" placeholder=\"* Ваше имя: \" type=\"text\" size=\"1\" maxlength=\"100\" value=\"\" name=\"d[0]\" id=\"d[0]\" required=\"\"></div></div><div class=\"form-item form-text phone\"><div class=\"form-item__body\"><input class=\"wm-input-default\" placeholder=\"* Телефон: \" type=\"text\" size=\"1\" maxlength=\"100\" value=\"\" name=\"d[1]\" id=\"d[1]\" required=\"\"></div></div>
                                                </div>
                                                <div class=\"form-item-group group-textarea\">
                                                    <div class=\"form-item form-textarea comments\"><label class=\"form-item__body\"><textarea class=\"wm-input-default\" placeholder=\" Комментарии: \" cols=\"1\" rows=\"1\" name=\"d[2]\" id=\"d[2]\"></textarea></label></div>
                                                </div>
                                            </div>
                                            <div class=\"form-tfoot\">
                                                <div class=\"form-item-group group-button\">
                                                    <div class=\"form-submit\"><div class=\"form-item__body\"><button class=\"wm-input-default\" type=\"submit\"><span class=\"align-elem\">Заказать звонок</span></button></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <script src=\"/shared/misc/calendar.gen.js\" type=\"text/javascript\" language=\"javascript\" charset=\"utf-8\"></script>

                        </div>
                    </div>
                    <div class=\"layout layout_23_id_25\">
                        <div class=\"site-copyright widget-16 widget-type-site_copyright editorElement layer-type-widget\">

                            <div class=\"align-elem\">
                                Copyright © 2017 - 2018\t\t\t\t\t\t\t<br>
                                ТОО \"Ain Capital\"
                            </div>

                        </div>
                        <div class=\"mega-copyright widget-15 [param.main_params.logo_type.css_class] widget-type-mega_copyright editorElement layer-type-widget\">
                            <span style=\"font-size:10px;\" class=\"copyright\"><a target=\"_blank\" href=\"http://megagroup.kz/\" title=\"Создание сайтов Астана Казахстане\" class=\"copyright\">Создание сайтов Астана</a> - megagroup.kz</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        ";
    }

    // line 277
    public function block_sidebar_navigation($context, array $blocks = array())
    {
        // line 278
        echo "        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            ";
        // line 280
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 280)->display($context);
        // line 281
        echo "            </div>
        </div>
    ";
    }

    // line 284
    public function block_bottom($context, array $blocks = array())
    {
        // line 285
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
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
        return array (  528 => 285,  525 => 284,  519 => 281,  517 => 280,  513 => 278,  510 => 277,  386 => 155,  383 => 154,  378 => 138,  373 => 139,  371 => 138,  366 => 137,  363 => 136,  358 => 134,  354 => 128,  351 => 127,  348 => 126,  343 => 122,  336 => 129,  333 => 126,  330 => 125,  327 => 124,  324 => 123,  322 => 122,  318 => 120,  315 => 119,  311 => 38,  308 => 37,  305 => 36,  302 => 35,  299 => 34,  296 => 33,  292 => 30,  289 => 29,  286 => 28,  283 => 27,  280 => 26,  277 => 25,  274 => 24,  271 => 23,  268 => 22,  265 => 21,  262 => 20,  259 => 19,  256 => 18,  253 => 17,  250 => 16,  247 => 15,  244 => 14,  241 => 13,  233 => 39,  231 => 33,  225 => 31,  223 => 13,  218 => 11,  214 => 10,  211 => 9,  209 => 8,  201 => 7,  198 => 6,  195 => 5,  189 => 297,  186 => 284,  184 => 277,  181 => 276,  178 => 154,  172 => 152,  169 => 151,  166 => 150,  160 => 148,  157 => 147,  154 => 146,  148 => 144,  145 => 143,  143 => 142,  140 => 141,  138 => 136,  135 => 135,  133 => 134,  130 => 133,  128 => 119,  59 => 53,  46 => 43,  43 => 42,  41 => 5,  36 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}
        {% do assets.addCss('theme://css-compiled/nucleus.css', 102) %}
        {% do assets.addCss('theme://css-compiled/template.css', 101) %}
        {% do assets.addCss('theme://css/custom.css', 100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}
        {% do assets.addCss('theme://css/aostyles.css') %}
        {% do assets.addCss('theme://css/styles.css') %}
        {% do assets.addCss('theme://css/title.styles.css') %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/antimatter.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
<div class=\"wrapper\">
<div class=\"layout layout_center not-columned layout_center_2_id_2_id_5_0\">
    <div class=\"layout columned columns-2 layout_2_id_5\">
        <div class=\"layout column layout_5\">
            <div class=\"editorElement layer-type-block ui-droppable block-2\">
                <div class=\"site-name widget-2 widget-type-site_name editorElement layer-type-widget\">
                    <a href=\"http://aincapital.com\"> \t\t\t\t\t\t \t\t\t\t\t\t \t\t\t\t\t\t<div class=\"sn-wrap\">
                            <div class=\"sn-logo\">

                                <img src=\"{{ url('theme://images/logo-3.png') }}\" alt=\"\">

                            </div>

                        </div>
                    </a>
                </div>
                <div class=\"site-description widget-3 widget-type-site_description editorElement layer-type-widget\">

                    <div class=\"align-elem\">
                        Управляющая компания
                    </div>

                </div>
            </div>
        </div>
        <div class=\"layout column layout_18\">
            <div class=\"editorElement layer-type-block ui-droppable block-7\">
                <div class=\"layout column layout_8\">
                    <div class=\"editorElement layer-type-block ui-droppable block-3\">
                        <div class=\"phones-6 widget-4 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget\">
                            <div class=\"inner\">
                                <label class=\"cell-icon\" for=\"tg-phones-6\">
                                    <div class=\"icon\"></div>
                                </label>
                                <input id=\"tg-phones-6\" class=\"tgl-but\" type=\"checkbox\">
                                <div class=\"block-body-drop\">
                                    <div class=\"cell-text\">
                                        <div class=\"title\"><div class=\"align-elem\">Телефон:</div></div>
                                        <div class=\"text_body\">
                                            <div class=\"align-elem\">
                                                <div><a href=\"tel:+7 (727) 357 26 06\">+7 (727) 357 26 06</a></div>\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"email-36 widget-33 email-block contacts-block widget-type-contacts_email editorElement layer-type-widget\">
                            <div class=\"inner\">
                                <label class=\"cell-icon\" for=\"tg-email-36\">
                                    <div class=\"icon\"></div>
                                </label>
                                <input id=\"tg-email-36\" class=\"tgl-but\" type=\"checkbox\">
                                <div class=\"block-body-drop\">
                                    <div class=\"cell-text\">
                                        <div class=\"title\"><div class=\"align-elem\">Email:</div></div>
                                        <div class=\"text_body\">
                                            <div class=\"align-elem\"><a href=\"mailto:info@aincapital.com\">info@aincapital.com</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"layout column layout_9\">
                    <a class=\"button-9 widget-6 widget-type-button editorElement layer-type-widget\" href=\"#\" data-wr-class=\"popover-wrap-9\"><span>Контакты</span></a><!--widget-6-->

                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
            <div id=\"navbar\">
                {% block header_extra %}{% endblock %}
                {% if config.plugins.langswitcher.enabled %}
                {% include 'partials/langswitcher.html.twig' %}
                {% endif %}
                {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
                {% endblock %}
                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% set ideal_solution = block('ideal_solution') %}
        {% if ideal_solution is not empty %}
            {{ ideal_solution }}
        {% endif %}
        {% set why_choose = block('why_choose') %}
        {% if why_choose is not empty %}
            {{ why_choose }}
        {% endif %}
        {% set partners_thumbs = block('partners_thumbs') %}
        {% if partners_thumbs is not empty %}
            {{ partners_thumbs }}
        {% endif %}
        {% block footer %}
        <footer id=\"footer\">
            <div class=\"wrapper\">
            <div class=\"editorElement layer-type-block ui-droppable block-9\">
                <div class=\"layout layout_center not-columned layout_23_id_23_id_27\">
                    <div class=\"layout columned columns-2 layout_23_id_27\">
                        <div class=\"layout column layout_27\">
                            <div class=\"editorElement layer-type-block ui-droppable block-10\">
                                <div class=\"address-30 widget-20 address-block contacts-block widget-type-contacts_address editorElement layer-type-widget\">
                                    <div class=\"inner\">
                                        <label class=\"cell-icon\" for=\"tg30\">
                                            <div class=\"icon\"></div>
                                        </label>
                                        <input id=\"tg30\" class=\"tgl-but\" type=\"checkbox\">
                                        <div class=\"block-body-drop\">
                                            <div class=\"cell-text\">
                                                <div class=\"title\"><div class=\"align-elem\">Адрес:</div></div>
                                                <div class=\"text_body\">
                                                    <div class=\"align-elem\">г. Алматы, <br>
                                                        ул. Маркова 61/1, <br>
                                                        БЦ \"Гарант\", офис 301</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"phones-29 widget-19 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget\">
                                    <div class=\"inner\">
                                        <label class=\"cell-icon\" for=\"tg-phones-29\">
                                            <div class=\"icon\"></div>
                                        </label>
                                        <input id=\"tg-phones-29\" class=\"tgl-but\" type=\"checkbox\">
                                        <div class=\"block-body-drop\">
                                            <div class=\"cell-text\">
                                                <div class=\"title\"><div class=\"align-elem\">Телефон:</div></div>
                                                <div class=\"text_body\">
                                                    <div class=\"align-elem\">
                                                        <div><a href=\"tel:+7 (727) 357 26 06\">+7 (727) 357 26 06</a></div>\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"site-counters widget-25 widget-type-site_counters editorElement layer-type-widget\">
                                    <!--LiveInternet counter--><script type=\"text/javascript\">
                                        document.write(\"<a href='//www.liveinternet.ru/click' \"+
                                            \"target=_blank><img src='//counter.yadro.ru/hit?t52.1;r\"+
                                            escape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
                                                \";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
                                                screen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
                                            \";\"+Math.random()+
                                            \"' alt='' title='LiveInternet: показано число просмотров и\"+
                                            \" посетителей за 24 часа' \"+
                                            \"border='0' width='88' height='31'><\\/a>\")
                                    </script><a href=\"//www.liveinternet.ru/click\" target=\"_blank\"><img src=\"//counter.yadro.ru/hit?t52.1;r;s1366*768*24;uhttp%3A//aincapital.com/;0.6655334647081175\" alt=\"\" title=\"LiveInternet: показано число просмотров и посетителей за 24 часа\" border=\"0\" width=\"88\" height=\"31\"></a><!--/LiveInternet--><!--cms statistics-->
                                    <script type=\"text/javascript\"><!--
                                        var megacounter_key=\"ae66cb5dad02060d2c790390ed41fb08\";
                                        (function(d){
                                            var s = d.createElement(\"script\");
                                            s.src = \"//counter.megagroup.ru/loader.js?\"+new Date().getTime();
                                            s.async = true;
                                            d.getElementsByTagName(\"head\")[0].appendChild(s);
                                        })(document);
                                        //--></script>
                                    <!--/cms statistics-->
                                    <!--__INFO2018-01-05 00:48:13INFO__-->

                                </div>
                            </div>
                        </div>
                        <div class=\"layout column layout_26\">




                            <div class=\"form-26 widget-17 vertical_mode widget-type-form_adaptive editorElement layer-type-widget\">
                                <div class=\"form__header\"><div class=\"align-elem\">ОСТАЛИСЬ ВОПРОСЫ? МЫ ВСЕГДА ГОТОВЫ ПОМОЧЬ</div></div>\t\t\t\t<div class=\"form__body\" data-api-type=\"form\" data-api-url=\"/my/s3/xapi/public/?method=form/postform&amp;param[form_id]=940405\">
                                    <form method=\"post\">
                                        <input type=\"hidden\" name=\"_form_item\" value=\"26\">
                                        <input type=\"hidden\" name=\"form_id\" value=\"940405\">
                                        <input type=\"hidden\" name=\"tpl\" value=\"db:title.tpl\">
                                        <div class=\"form-table\">
                                            <div class=\"form-tbody\">
                                                <div class=\"form-item-group group-text\">
                                                    <div class=\"form-item form-text name\"><div class=\"form-item__body\"><input class=\"wm-input-default\" placeholder=\"* Ваше имя: \" type=\"text\" size=\"1\" maxlength=\"100\" value=\"\" name=\"d[0]\" id=\"d[0]\" required=\"\"></div></div><div class=\"form-item form-text phone\"><div class=\"form-item__body\"><input class=\"wm-input-default\" placeholder=\"* Телефон: \" type=\"text\" size=\"1\" maxlength=\"100\" value=\"\" name=\"d[1]\" id=\"d[1]\" required=\"\"></div></div>
                                                </div>
                                                <div class=\"form-item-group group-textarea\">
                                                    <div class=\"form-item form-textarea comments\"><label class=\"form-item__body\"><textarea class=\"wm-input-default\" placeholder=\" Комментарии: \" cols=\"1\" rows=\"1\" name=\"d[2]\" id=\"d[2]\"></textarea></label></div>
                                                </div>
                                            </div>
                                            <div class=\"form-tfoot\">
                                                <div class=\"form-item-group group-button\">
                                                    <div class=\"form-submit\"><div class=\"form-item__body\"><button class=\"wm-input-default\" type=\"submit\"><span class=\"align-elem\">Заказать звонок</span></button></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <script src=\"/shared/misc/calendar.gen.js\" type=\"text/javascript\" language=\"javascript\" charset=\"utf-8\"></script>

                        </div>
                    </div>
                    <div class=\"layout layout_23_id_25\">
                        <div class=\"site-copyright widget-16 widget-type-site_copyright editorElement layer-type-widget\">

                            <div class=\"align-elem\">
                                Copyright © 2017 - 2018\t\t\t\t\t\t\t<br>
                                ТОО \"Ain Capital\"
                            </div>

                        </div>
                        <div class=\"mega-copyright widget-15 [param.main_params.logo_type.css_class] widget-type-mega_copyright editorElement layer-type-widget\">
                            <span style=\"font-size:10px;\" class=\"copyright\"><a target=\"_blank\" href=\"http://megagroup.kz/\" title=\"Создание сайтов Астана Казахстане\" class=\"copyright\">Создание сайтов Астана</a> - megagroup.kz</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        {% endblock %}
    </div>
    {% block sidebar_navigation %}
        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            {% include 'partials/navigation.html.twig' %}
            </div>
        </div>
    {% endblock %}
    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "C:\\OpenServer\\domains\\grav\\grav-admin\\user\\themes\\antimatter\\templates\\partials\\base.html.twig");
    }
}
