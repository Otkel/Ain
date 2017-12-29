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
        // line 40
        echo "</head>
<body id=\"top\" class=\"";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
<div class=\"pre-header fullWidth flexCenter\">
    <div class=\"eightyWidth flex-between-center\">
        <div>
        <img src=\"";
        // line 45
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo-3.png");
        echo "\" alt=\"\">
            <p>УПРАВЛЯЮЩАЯ КОМПАНИЯ</p>
        </div>
        <div>
            <a href=\"tel:+7 (727) 357 26 06\">+7 (727) 357 26 06</a>
            <a href=\"mailto:info@aincapital.com\">info@aincapital.com</a>
        </div>
        <button class=\"button button2\">
            Контакты
        </button>
    </div>
</div>
    <div id=\"sb-site\">
        ";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
        ";
        // line 73
        $this->displayBlock('showcase', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
        ";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 117
        echo "    </div>
    ";
        // line 118
        $this->displayBlock('sidebar_navigation', $context, $blocks);
        // line 125
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 138
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
        // line 29
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
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
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 10))) {
            // line 22
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 23
            echo "        ";
        }
        // line 24
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 26
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 27
            echo "        ";
        }
        // line 28
        echo "    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 36
        echo "    ";
    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "        <header id=\"header\">
            <div id=\"navbar\">
                ";
        // line 61
        $this->displayBlock('header_extra', $context, $blocks);
        // line 62
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 63
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 63)->display($context);
            // line 64
            echo "                ";
        }
        // line 65
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 68
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 61
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 65
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 66
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 66)->display($context);
        // line 67
        echo "                ";
    }

    // line 73
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "        </section>
        ";
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        // line 82
        echo "        <footer id=\"footer\">
            <div class=\"eightyWidth fullHeight flexCenter\">
                <div class=\"fourtyWidth fullHeight\">
                    <div>
                        <p>АДРЕС:</p>
                        <p>г. Алматы, </p>
                        <p>ул. Маркова 61/1, </p>
                        <p>БЦ \"Гарант\", офис 301</p>
                    </div>
                    <div>
                        <p>ТЕЛЕФОН:</p>
                        <a href=\"tel:+7 (727) 357 26 06\">+7 (727) 357 26 06</a>
                    </div>
                </div>
                <div class=\"sixtyWidth fullHeight\">
                    <h4>ОСТАЛИСЬ ВОПРОСЫ? МЫ ВСЕГДА ГОТОВЫ ПОМОЧЬ</h4>
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
                </div>
            </div>
        </footer>
        ";
    }

    // line 118
    public function block_sidebar_navigation($context, array $blocks = array())
    {
        // line 119
        echo "        <div class=\"sb-slidebar sb-left sb-width-thin\">
            <div id=\"panel\">
            ";
        // line 121
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 121)->display($context);
        // line 122
        echo "            </div>
        </div>
    ";
    }

    // line 125
    public function block_bottom($context, array $blocks = array())
    {
        // line 126
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
        return array (  341 => 126,  338 => 125,  332 => 122,  330 => 121,  326 => 119,  323 => 118,  285 => 82,  282 => 81,  277 => 77,  272 => 78,  270 => 77,  265 => 76,  262 => 75,  257 => 73,  253 => 67,  250 => 66,  247 => 65,  242 => 61,  235 => 68,  232 => 65,  229 => 64,  226 => 63,  223 => 62,  221 => 61,  217 => 59,  214 => 58,  210 => 36,  207 => 35,  204 => 34,  201 => 33,  198 => 32,  195 => 31,  191 => 28,  188 => 27,  185 => 26,  182 => 25,  179 => 24,  176 => 23,  173 => 22,  170 => 21,  167 => 20,  164 => 19,  161 => 18,  158 => 17,  155 => 16,  152 => 15,  149 => 14,  146 => 13,  138 => 37,  136 => 31,  130 => 29,  128 => 13,  123 => 11,  119 => 10,  116 => 9,  114 => 8,  106 => 7,  103 => 6,  100 => 5,  94 => 138,  91 => 125,  89 => 118,  86 => 117,  84 => 81,  81 => 80,  79 => 75,  76 => 74,  74 => 73,  71 => 72,  69 => 58,  53 => 45,  46 => 41,  43 => 40,  41 => 5,  36 => 3,  33 => 2,  31 => 1,);
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
<div class=\"pre-header fullWidth flexCenter\">
    <div class=\"eightyWidth flex-between-center\">
        <div>
        <img src=\"{{ url('theme://images/logo-3.png') }}\" alt=\"\">
            <p>УПРАВЛЯЮЩАЯ КОМПАНИЯ</p>
        </div>
        <div>
            <a href=\"tel:+7 (727) 357 26 06\">+7 (727) 357 26 06</a>
            <a href=\"mailto:info@aincapital.com\">info@aincapital.com</a>
        </div>
        <button class=\"button button2\">
            Контакты
        </button>
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

        {% block footer %}
        <footer id=\"footer\">
            <div class=\"eightyWidth fullHeight flexCenter\">
                <div class=\"fourtyWidth fullHeight\">
                    <div>
                        <p>АДРЕС:</p>
                        <p>г. Алматы, </p>
                        <p>ул. Маркова 61/1, </p>
                        <p>БЦ \"Гарант\", офис 301</p>
                    </div>
                    <div>
                        <p>ТЕЛЕФОН:</p>
                        <a href=\"tel:+7 (727) 357 26 06\">+7 (727) 357 26 06</a>
                    </div>
                </div>
                <div class=\"sixtyWidth fullHeight\">
                    <h4>ОСТАЛИСЬ ВОПРОСЫ? МЫ ВСЕГДА ГОТОВЫ ПОМОЧЬ</h4>
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
