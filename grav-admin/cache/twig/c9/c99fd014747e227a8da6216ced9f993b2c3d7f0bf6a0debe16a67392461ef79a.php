<?php

/* default.html.twig */
class __TwigTemplate_d21d3af618b6ec8d08a23d634cb76ae9b6755c32f18bf9761323d2d6260f5445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'ideal_solution' => array($this, 'block_ideal_solution'),
            'why_choose' => array($this, 'block_why_choose'),
            'partners_thumbs' => array($this, 'block_partners_thumbs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 56
        $context["partners"] = $this->getAttribute(($context["page"] ?? null), "collection", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/title.styles.css"), "method");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

";
    }

    // line 10
    public function block_ideal_solution($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"layout layout_center not-columned layout_center_2_id_10_2\">


        <div class=\"editable_block-14 widget-10 editorElement layer-type-widget\">
            <div class=\"header\"><div class=\"align-elem\">Идеальное решение для бизнеса</div></div>\t\t<div class=\"body\">
                <div class=\"text\"><div class=\"align-elem\"><p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Известно, что деньги должны работать.&nbsp;Инвестирование – это работа, которой нужно заниматься профессионально.&nbsp;</span><br><span style=\"font-size: 12pt;\">Для этого необходимо глубокое знание рынка и опыт работы, которые приобретаются годами. Решив заняться инвестициями самостоятельно, Вам придется посвящать этому практически все свое время, иначе эффективность вложений будет крайне низкой, а риски потерять вложенные средства велики. Вы можете существенно снизить свои риски и сохранить свое время, передав свои средства в доверительное управление опытному профессиональному управляющему.</span></p>
                        <p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong>Компании по управлению активами</strong>&nbsp;– осуществляют деятельность по управлению, как ценными бумагами, так и другими активами, с целью получения прибыли для своих инвесторов.</span></p></div></div>

            </div>
        </div>


    </div>
";
    }

    // line 25
    public function block_why_choose($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"editorElement layer-type-block ui-droppable block-6\">
    <div class=\"layout layout_center not-columned layout_16_id_17\">
        <div class=\"blocklist blocklist-17 widget-11 horizontal_mode widget-type-block_list editorElement layer-type-widget\" data-slider=\"0,0,0,0,0\" data-swipe=\"0,0,0,0,0\" data-setting-mode=\"horizontal\" data-setting-pause=\"4000\" data-setting-auto=\"1\" data-setting-controls=\"1,1,1,1,1\" data-setting-pager=\"1,1,1,1,1\" data-setting-pager_selector=\".blocklist-17 .pager-wrap\" data-setting-prev_selector=\".blocklist-17 .prev\" data-setting-next_selector=\".blocklist-17 .next\" data-setting-count=\"3,3,3,3,3\" data-setting-columns=\"3,3,1,1,1\" data-setting-move=\"\" data-setting-prev_text=\"\" data-setting-next_text=\"\" data-setting-auto_controls_selector=\".blocklist-17 .auto_controls\" data-setting-auto_controls=\"0,0,0,0,0\" data-setting-autocontrolscombine=\"0\">

            <div class=\"header\">
                <div class=\"header_text\"><div class=\"align-elem\">Почему выбирают нас?</div></div>
            </div>
            <div class=\"body-outer\">
                <div class=\"body\">
                    <div class=\"swipe-shadow-left\" style=\"display: none;\"></div>
                    <div class=\"swipe-shadow-right\" style=\"display: none;\"></div>
                    <div class=\"list\"><div class=\"item-outer\"><div class=\"item\"><div class=\"image\"><span class=\"img-convert img-cover\"><img src=\"http://aincapital.com/thumb/t4uRcE8u8EhO8pSv6aXJaw/70r-/1718845/4.png\" alt=\"Возможности\" style=\"max-width: 100%; max-height: none; width: 34px; min-width: 0px; height: auto;\"></span></div><span class=\"title\"><span class=\"align-elem\">Возможности</span></span><div class=\"text\"><div class=\"align-elem\"><p><span style=\"font-size: 11pt;\">Доверительное управление активами&nbsp;дает широкие возможности по увеличению капитала, а также гарантирует защиту прав каждого инвестора в соответствии с законодательством Республики Казахстан</span></p></div></div></div></div><div class=\"item-outer\"><div class=\"item\"><div class=\"image\"><span class=\"img-convert img-cover\"><img src=\"http://aincapital.com/thumb/rrrSeQBDMlX1_pSrNz0n2A/70r-/1718845/5.png\" alt=\"Профессионализм\" style=\"max-width: 100%; max-height: none; width: 39px; min-width: 0px; height: auto;\"></span></div><span class=\"title\"><span class=\"align-elem\">Профессионализм</span></span><div class=\"text\"><div class=\"align-elem\"><p><span style=\"font-size: 11pt;\">Мы собрали в одной команде постоянно развивающихся специалистов.&nbsp;За качество своей работы мы несем ответственность, так как дорожим своей репутацией и именем.</span></p></div></div></div></div><div class=\"item-outer\"><div class=\"item\"><div class=\"image\"><span class=\"img-convert img-cover\"><img src=\"http://aincapital.com/thumb/FS271AuRbDohhZ1HMerbaQ/-r70/1718845/6.png\" alt=\"Результативность\" style=\"max-width: none; max-height: 100%; width: auto; min-width: 50px; height: 42px;\"></span></div><span class=\"title\"><span class=\"align-elem\">Результативность</span></span><div class=\"text\"><div class=\"align-elem\"><p><span style=\"font-size: 11pt;\">Корпоративное управление может помочь вам улучшить финансовые результаты компании, сделать свой бизнес более упорядоченным и системным, а коллектив более самостоятельным, ответственным и сплоченным.</span></p></div></div></div></div></div>
                </div>
            </div>
            <div class=\"controls\" style=\"display: none;\">
                <span class=\"prev\"></span>
                <span class=\"next\"></span>
            </div>

            <div class=\"bx-pager-wrap\" style=\"display: none;\">
                <div class=\"bx-auto_controls\">
                    <div class=\"auto_controls\"></div>

                    <div class=\"pager-wrap\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 58
    public function block_partners_thumbs($context, array $blocks = array())
    {
        // line 59
        echo "

            <div class=\"editorElement layer-type-block ui-droppable block-15\">
                <div class=\"layout layout_center not-columned layout_34_id_35\">





                    <div class=\"blocklist blocklist-35 widget-32 horizontal_mode widget-type-block_list editorElement layer-type-widget\" data-slider=\"0,0,0,0,0\" data-swipe=\"0,0,0,0,0\" data-setting-mode=\"horizontal\" data-setting-pause=\"4000\" data-setting-auto=\"1\" data-setting-controls=\"1,1,1,1,1\" data-setting-pager=\"1,1,1,1,1\" data-setting-pager_selector=\".blocklist-35 .pager-wrap\" data-setting-prev_selector=\".blocklist-35 .prev\" data-setting-next_selector=\".blocklist-35 .next\" data-setting-count=\"3,3,3,3,3\" data-setting-columns=\"5,4,3,2,2\" data-setting-move=\"\" data-setting-prev_text=\"\" data-setting-next_text=\"\" data-setting-auto_controls_selector=\".blocklist-35 .auto_controls\" data-setting-auto_controls=\"0,0,0,0,0\" data-setting-autocontrolscombine=\"0\">

                        <div class=\"header\">
                            <div class=\"header_text\"><div class=\"align-elem\">Наши партнеры</div></div>
                        </div>
                        <div class=\"body-outer\">
                            <div class=\"body\">
                                <div class=\"swipe-shadow-left\" style=\"display: none;\"></div>
                                <div class=\"swipe-shadow-right\" style=\"display: none;\"></div>
                                <div class=\"list\">
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 79
            echo "                                    <div class=\"item-outer\">
                                        <div class=\"item\"><div class=\"image\"><a href=\"http://www.alelagro.kz/\"><span class=\"img-convert img-contain\"><img src=\"";
            // line 80
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["partner"], "media", array()), "images", array())), "url", array());
            echo "\" alt=\"АО &amp;quot;Алель Агро&amp;quot;\" style=\"max-width: 100%; max-height: 100%;\"></span></a></div><span class=\"title\"><a href=\"http://www.alelagro.kz/\"><span class=\"align-elem\">АО \"Алель Агро\"</span></a></span></div>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"footer\">
                            <a class=\"all\" href=\"/nashi-partnery\"><span class=\"align-elem\"></span></a>\t\t</div>
                        <div class=\"controls\" style=\"display: none;\">
                            <span class=\"prev\"></span>
                            <span class=\"next\"></span>
                        </div>

                        <div class=\"bx-pager-wrap\" style=\"display: none;\">
                            <div class=\"bx-auto_controls\">
                                <div class=\"auto_controls\"></div>

                                <div class=\"pager-wrap\"></div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 83,  145 => 80,  142 => 79,  138 => 78,  117 => 59,  114 => 58,  81 => 26,  78 => 25,  61 => 11,  58 => 10,  50 => 7,  47 => 6,  43 => 4,  38 => 3,  35 => 2,  31 => 1,  29 => 56,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    {% do assets.addCss('theme://css/title.styles.css') %}
{% endblock %}
{% block content %}
\t{{ page.content }}

{% endblock %}
{% block ideal_solution %}
    <div class=\"layout layout_center not-columned layout_center_2_id_10_2\">


        <div class=\"editable_block-14 widget-10 editorElement layer-type-widget\">
            <div class=\"header\"><div class=\"align-elem\">Идеальное решение для бизнеса</div></div>\t\t<div class=\"body\">
                <div class=\"text\"><div class=\"align-elem\"><p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">Известно, что деньги должны работать.&nbsp;Инвестирование – это работа, которой нужно заниматься профессионально.&nbsp;</span><br><span style=\"font-size: 12pt;\">Для этого необходимо глубокое знание рынка и опыт работы, которые приобретаются годами. Решив заняться инвестициями самостоятельно, Вам придется посвящать этому практически все свое время, иначе эффективность вложений будет крайне низкой, а риски потерять вложенные средства велики. Вы можете существенно снизить свои риски и сохранить свое время, передав свои средства в доверительное управление опытному профессиональному управляющему.</span></p>
                        <p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong>Компании по управлению активами</strong>&nbsp;– осуществляют деятельность по управлению, как ценными бумагами, так и другими активами, с целью получения прибыли для своих инвесторов.</span></p></div></div>

            </div>
        </div>


    </div>
{% endblock %}
{% block why_choose %}
<div class=\"editorElement layer-type-block ui-droppable block-6\">
    <div class=\"layout layout_center not-columned layout_16_id_17\">
        <div class=\"blocklist blocklist-17 widget-11 horizontal_mode widget-type-block_list editorElement layer-type-widget\" data-slider=\"0,0,0,0,0\" data-swipe=\"0,0,0,0,0\" data-setting-mode=\"horizontal\" data-setting-pause=\"4000\" data-setting-auto=\"1\" data-setting-controls=\"1,1,1,1,1\" data-setting-pager=\"1,1,1,1,1\" data-setting-pager_selector=\".blocklist-17 .pager-wrap\" data-setting-prev_selector=\".blocklist-17 .prev\" data-setting-next_selector=\".blocklist-17 .next\" data-setting-count=\"3,3,3,3,3\" data-setting-columns=\"3,3,1,1,1\" data-setting-move=\"\" data-setting-prev_text=\"\" data-setting-next_text=\"\" data-setting-auto_controls_selector=\".blocklist-17 .auto_controls\" data-setting-auto_controls=\"0,0,0,0,0\" data-setting-autocontrolscombine=\"0\">

            <div class=\"header\">
                <div class=\"header_text\"><div class=\"align-elem\">Почему выбирают нас?</div></div>
            </div>
            <div class=\"body-outer\">
                <div class=\"body\">
                    <div class=\"swipe-shadow-left\" style=\"display: none;\"></div>
                    <div class=\"swipe-shadow-right\" style=\"display: none;\"></div>
                    <div class=\"list\"><div class=\"item-outer\"><div class=\"item\"><div class=\"image\"><span class=\"img-convert img-cover\"><img src=\"http://aincapital.com/thumb/t4uRcE8u8EhO8pSv6aXJaw/70r-/1718845/4.png\" alt=\"Возможности\" style=\"max-width: 100%; max-height: none; width: 34px; min-width: 0px; height: auto;\"></span></div><span class=\"title\"><span class=\"align-elem\">Возможности</span></span><div class=\"text\"><div class=\"align-elem\"><p><span style=\"font-size: 11pt;\">Доверительное управление активами&nbsp;дает широкие возможности по увеличению капитала, а также гарантирует защиту прав каждого инвестора в соответствии с законодательством Республики Казахстан</span></p></div></div></div></div><div class=\"item-outer\"><div class=\"item\"><div class=\"image\"><span class=\"img-convert img-cover\"><img src=\"http://aincapital.com/thumb/rrrSeQBDMlX1_pSrNz0n2A/70r-/1718845/5.png\" alt=\"Профессионализм\" style=\"max-width: 100%; max-height: none; width: 39px; min-width: 0px; height: auto;\"></span></div><span class=\"title\"><span class=\"align-elem\">Профессионализм</span></span><div class=\"text\"><div class=\"align-elem\"><p><span style=\"font-size: 11pt;\">Мы собрали в одной команде постоянно развивающихся специалистов.&nbsp;За качество своей работы мы несем ответственность, так как дорожим своей репутацией и именем.</span></p></div></div></div></div><div class=\"item-outer\"><div class=\"item\"><div class=\"image\"><span class=\"img-convert img-cover\"><img src=\"http://aincapital.com/thumb/FS271AuRbDohhZ1HMerbaQ/-r70/1718845/6.png\" alt=\"Результативность\" style=\"max-width: none; max-height: 100%; width: auto; min-width: 50px; height: 42px;\"></span></div><span class=\"title\"><span class=\"align-elem\">Результативность</span></span><div class=\"text\"><div class=\"align-elem\"><p><span style=\"font-size: 11pt;\">Корпоративное управление может помочь вам улучшить финансовые результаты компании, сделать свой бизнес более упорядоченным и системным, а коллектив более самостоятельным, ответственным и сплоченным.</span></p></div></div></div></div></div>
                </div>
            </div>
            <div class=\"controls\" style=\"display: none;\">
                <span class=\"prev\"></span>
                <span class=\"next\"></span>
            </div>

            <div class=\"bx-pager-wrap\" style=\"display: none;\">
                <div class=\"bx-auto_controls\">
                    <div class=\"auto_controls\"></div>

                    <div class=\"pager-wrap\"></div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% set partners = page.collection %}

{% block partners_thumbs %}


            <div class=\"editorElement layer-type-block ui-droppable block-15\">
                <div class=\"layout layout_center not-columned layout_34_id_35\">





                    <div class=\"blocklist blocklist-35 widget-32 horizontal_mode widget-type-block_list editorElement layer-type-widget\" data-slider=\"0,0,0,0,0\" data-swipe=\"0,0,0,0,0\" data-setting-mode=\"horizontal\" data-setting-pause=\"4000\" data-setting-auto=\"1\" data-setting-controls=\"1,1,1,1,1\" data-setting-pager=\"1,1,1,1,1\" data-setting-pager_selector=\".blocklist-35 .pager-wrap\" data-setting-prev_selector=\".blocklist-35 .prev\" data-setting-next_selector=\".blocklist-35 .next\" data-setting-count=\"3,3,3,3,3\" data-setting-columns=\"5,4,3,2,2\" data-setting-move=\"\" data-setting-prev_text=\"\" data-setting-next_text=\"\" data-setting-auto_controls_selector=\".blocklist-35 .auto_controls\" data-setting-auto_controls=\"0,0,0,0,0\" data-setting-autocontrolscombine=\"0\">

                        <div class=\"header\">
                            <div class=\"header_text\"><div class=\"align-elem\">Наши партнеры</div></div>
                        </div>
                        <div class=\"body-outer\">
                            <div class=\"body\">
                                <div class=\"swipe-shadow-left\" style=\"display: none;\"></div>
                                <div class=\"swipe-shadow-right\" style=\"display: none;\"></div>
                                <div class=\"list\">
                                    {% for partner in partners %}
                                    <div class=\"item-outer\">
                                        <div class=\"item\"><div class=\"image\"><a href=\"http://www.alelagro.kz/\"><span class=\"img-convert img-contain\"><img src=\"{{ (partner.media.images|first).url }}\" alt=\"АО &amp;quot;Алель Агро&amp;quot;\" style=\"max-width: 100%; max-height: 100%;\"></span></a></div><span class=\"title\"><a href=\"http://www.alelagro.kz/\"><span class=\"align-elem\">АО \"Алель Агро\"</span></a></span></div>
                                    </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        <div class=\"footer\">
                            <a class=\"all\" href=\"/nashi-partnery\"><span class=\"align-elem\"></span></a>\t\t</div>
                        <div class=\"controls\" style=\"display: none;\">
                            <span class=\"prev\"></span>
                            <span class=\"next\"></span>
                        </div>

                        <div class=\"bx-pager-wrap\" style=\"display: none;\">
                            <div class=\"bx-auto_controls\">
                                <div class=\"auto_controls\"></div>

                                <div class=\"pager-wrap\"></div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
{% endblock %}
", "default.html.twig", "C:\\OpenServer\\domains\\grav\\grav-admin\\user\\themes\\antimatter\\templates\\default.html.twig");
    }
}
