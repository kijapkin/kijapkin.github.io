<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_2062ad1d6ffd0f27564bee0edd4fa56af9e9ed4dfd92724039cdc59bcc8d68e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'figure_before' => array($this, 'block_figure_before'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figure_after' => array($this, 'block_figure_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "type") != "none")) {
            // line 3
            echo "\t\tborder: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "width"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "type"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "color"), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius") . strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "x"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "y"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "blur"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "color"), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";
\tmargin: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "distance"), "html", null, true);
        echo "px;";
        // line 11
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) {
            // line 12
            echo "\t\theight:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 14
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "2")) {
            // line 15
            echo "\t\twidth:auto;
\t";
        } else {
            // line 17
            echo "\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
";
        // line 21
        ob_start();
        // line 22
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"))))) {
            // line 23
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"), "html", null, true);
            echo "
\t";
        } else {
            // line 25
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "\t";
        if (((((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link")))) && ((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "0"))) {
            // line 31
            echo "\t\tgg-colorbox
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if ((($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "0"))) {
            // line 35
            echo "\t\tgg-video
\t";
        }
        // line 37
        echo "
\t";
        // line 38
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2") && (((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link")))) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty(trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video")))))))) {
            // line 39
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
            // line 45
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))), "html", null, true);
            echo "
\t\t";
            // line 46
            $context["link"] = true;
            // line 47
            echo "\t";
        } else {
            // line 48
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "sizes"), "full"), "url"), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "
";
        // line 52
        ob_start();
        // line 53
        echo "\t";
        if (((isset($context["link"]) ? $context["link"] : null) && $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 54
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "rel"), "html", null, true);
            echo "
\t";
        }
        // line 56
        echo "\t";
        if ((((isset($context["link"]) ? $context["link"] : null) == false) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "enabled") == "false"))) {
            // line 57
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 84
        echo "
\t";
        // line 85
        ob_start();
        // line 86
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false")) {
            // line 87
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
                // line 88
                echo "\t\t\t\ticons
\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\tnone
\t\t\t";
            }
            // line 92
            echo "\t\t";
        } else {
            // line 93
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
                // line 94
                echo "\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "personal") == "true") && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "captionEffect"), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 95
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "captionEffect"), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 99
                echo "\t\t\t";
            } else {
                // line 100
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "personal") == "true")) {
                    // line 101
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "captionEffect"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 105
                echo "\t\t\t";
            }
            // line 106
            echo "\t\t";
        }
        // line 107
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 108
        echo "
\t\t<figure
\t\t\t";
        // line 110
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 130
        echo ">
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 132
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "shadow"), "overlay") == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 133
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 134
        echo "\"
\t\t\t\tstyle=\"
\t\t\t\t";
        // line 136
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "0") || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == "3"))) {
            // line 137
            echo "\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\theight:";
            // line 138
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height") . strtr($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\toverflow:hidden;
\t\t\t\t";
        }
        // line 140
        echo "\">

\t\t\t\t";
        // line 142
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 143
        echo "
\t\t\t\t";
        // line 144
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 0)) {
            // line 145
            echo "\t\t\t\t\t";
            $context["width"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width");
            // line 146
            echo "\t\t\t\t";
        } else {
            // line 147
            echo "\t\t\t\t\t";
            // line 148
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "width_unit") == 0)) {
                // line 149
                echo "\t\t\t\t\t\t";
                $context["width"] = round((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "width") / 100) * $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width")));
                // line 150
                echo "\t\t\t\t\t";
            } else {
                // line 151
                echo "\t\t\t\t\t\t";
                $context["width"] = null;
                // line 152
                echo "\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t";
        }
        // line 154
        echo "
\t\t\t\t";
        // line 155
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 0)) {
            // line 156
            echo "\t\t\t\t\t";
            $context["height"] = $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height");
            // line 157
            echo "\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t";
            // line 159
            echo "\t\t\t\t\t";
            $context["height"] = null;
            // line 160
            echo "\t\t\t\t\t";
            // line 161
            echo "\t\t\t\t\t\t";
            // line 162
            echo "\t\t\t\t\t";
            // line 163
            echo "\t\t\t\t\t\t";
            // line 164
            echo "\t\t\t\t\t";
            // line 165
            echo "\t\t\t\t";
        }
        // line 166
        echo "
\t\t\t\t";
        // line 167
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 0) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 3))) {
            // line 168
            echo "\t\t\t\t\t";
            $context["crop"] = 1;
            // line 169
            echo "\t\t\t\t";
        }
        // line 170
        echo "
\t\t\t\t";
        // line 171
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 1)) {
            // line 172
            echo "\t\t\t\t\t";
            $context["height"] = null;
            // line 173
            echo "\t\t\t\t";
        }
        // line 174
        echo "
\t\t\t\t";
        // line 175
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "grid") == 2)) {
            // line 176
            echo "\t\t\t\t\t";
            $context["width"] = null;
            // line 177
            echo "\t\t\t\t";
        }
        // line 178
        echo "

\t\t\t\t<img 
\t\t\t\t\t";
        // line 181
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 195
        echo "\t\t\t\t/>
\t\t\t</div>

\t\t\t";
        // line 198
        ob_start();
        // line 199
        echo "\t\t\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 222
        echo "\t\t\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 223
        echo "
\t\t\t<figcaption
\t\t\t\t";
        // line 225
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 231
        echo ">

\t\t\t\t<div
\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 236
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 237
            echo "\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";
\t\t\t\t\t";
        }
        // line 238
        echo "\">

\t\t\t\t\t";
        // line 240
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 312
        echo "\t\t\t\t</div>
\t\t\t</figcaption>

\t\t\t";
        // line 315
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 355
        echo "\t\t</figure>

\t";
        // line 357
        $this->displayBlock('figure_after', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_figure_before($context, array $blocks = array())
    {
        // line 63
        echo "\t\t";
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 64
            echo "\t\t\t<a
\t\t\t\t";
            // line 65
            $this->displayBlock('a_attributes', $context, $blocks);
            // line 81
            echo "\t\t\t>
\t\t";
        }
        // line 83
        echo "\t";
    }

    // line 65
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t\tid=\"gg-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : null), "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id"), "html", null, true);
        echo "\"
\t\t\t\t\tclass=\"gg-link ";
        // line 67
        echo twig_escape_filter($this->env, trim((isset($context["aClass"]) ? $context["aClass"] : null)), "html", null, true);
        echo " ";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto") == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t\t\thref=\"";
        // line 68
        echo twig_escape_filter($this->env, htmlspecialchars_decode(trim((isset($context["aHref"]) ? $context["aHref"] : null))), "html", null, true);
        echo "\"
\t\t\t\t\ttarget=\"";
        // line 69
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target"), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 70
        echo twig_escape_filter($this->env, trim((isset($context["aTitle"]) ? $context["aTitle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t\t";
        // line 71
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
            // line 72
            echo "\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\trel=\"";
            echo twig_escape_filter($this->env, (isset($context["aRel"]) ? $context["aRel"] : null), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t";
        if (((isset($context["link"]) ? $context["link"] : null) == true)) {
            // line 77
            echo "\t\t\t\t\t\tdata-type=\"link\"
\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\tstyle=\"border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius") . strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "border"), "radius_unit"), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t\t\t";
    }

    // line 110
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 111
        echo "\t\t\t\tclass=\"grid-gallery-caption
\t\t\t\t";
        // line 112
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "displayFirstPhoto") == "on") && ((isset($context["index"]) ? $context["index"] : null) > 0))) {
            echo " hidden-item ";
        }
        // line 113
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "1") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 114
            echo "\t\t\t\t\tshadow-show
\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mouse_shadow") == "2") && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "use_shadow") == "1"))) {
            // line 117
            echo "\t\t\t\t shadow-hide
\t\t\t\t";
        }
        // line 118
        echo "\"
\t\t\t\tdata-grid-gallery-type=\"";
        // line 119
        echo twig_escape_filter($this->env, trim((isset($context["galleryType"]) ? $context["galleryType"] : null)), "html", null, true);
        echo "\"
\t\t\t\tstyle=\"display:none;";
        // line 120
        echo twig_escape_filter($this->env, trim((isset($context["figureStyle"]) ? $context["figureStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 121
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true")) {
            // line 122
            echo "\t\t\t\t\t";
            ob_start();
            // line 123
            echo "\t\t\t\t\t\t";
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) {
                // line 124
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 126
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 129
            echo "\t\t\t\t";
        }
        // line 130
        echo "\t\t\t";
    }

    // line 181
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 182
        echo "\t\t\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "id"), (isset($context["width"]) ? $context["width"] : null), (isset($context["height"]) ? $context["height"] : null), $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "cropPosition"), (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail", array(), "any", false, true), "cropQuality"), "100")) : ("100")))), "html", null, true);
        echo "\"
\t\t\t\t\talt=\"";
        // line 183
        if ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "alt")) || ($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "alt") == " "))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "alt"), "html", null, true);
        }
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 184
        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "description"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        }
        echo "\"
\t\t\t\t\tdata-title=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 187
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width_unit") == 0) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"))))) {
            // line 188
            echo "\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_width"), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height_unit") == 0) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"))))) {
            // line 191
            echo "\t\t\t\t\theight:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "area"), "photo_height"), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t\t\"
\t\t\t\t\t";
    }

    // line 199
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 200
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 201
            echo "\t\t\t\t\t\tfont-family:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 202
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "overlay_enabled") == "true")) {
                // line 203
                echo "\t\t\t\t\t\t\tbackground-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_color"), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\t";
                // line 206
                echo "\t\t\t\t\t\t";
            } else {
                // line 207
                echo "\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t";
            }
            // line 210
            echo "\t\t\t\t\t";
        } else {
            // line 211
            echo "\t\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\ttext-align:";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 216
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false"))) {
                // line 217
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 220
            echo "\t\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t";
    }

    // line 225
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 226
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 227
            echo "\t\t\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, trim((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "overlay_transparency"), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 229
        echo "\t\t\t\t\tdata-alpha=\"";
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "transparency")), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"";
        // line 230
        echo twig_escape_filter($this->env, trim((isset($context["figcaptionStyle"]) ? $context["figcaptionStyle"] : null)), "html", null, true);
        echo "\"
\t\t\t\t";
    }

    // line 240
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 241
        echo "\t\t\t\t\t\t";
        // line 242
        echo "\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true"))) {
            // line 243
            echo "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 244
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), 0, ((isset($context["length"]) ? $context["length"] : null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "effect"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\tdata-margin=\"";
            // line 245
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t";
            // line 247
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))))) {
                // line 248
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 249
                ob_start();
                // line 250
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) {
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"), (isset($context["youtube"]) ? $context["youtube"] : null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 252
                    $context["videoSource"] = "youtube";
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) {
                    // line 254
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"), (isset($context["vimeoPattern"]) ? $context["vimeoPattern"] : null), (isset($context["vimeoReplace"]) ? $context["vimeoReplace"] : null))) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 255
                    $context["videoSource"] = "vimeo";
                    // line 256
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 257
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video")), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 259
                echo "\t\t\t\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 260
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 261
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "video"))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 262
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 263
                ob_start();
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\tmargin-left:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t\tmargin-right:";
                // line 265
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", false, true), "margin"), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 267
                echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 268
                echo twig_escape_filter($this->env, trim((isset($context["videoUrl"]) ? $context["videoUrl"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"hi-icon gg-video ";
                // line 269
                echo twig_escape_filter($this->env, (isset($context["videoIcon"]) ? $context["videoIcon"] : null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 270
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2")) {
                    echo " pbox";
                }
                // line 271
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\tstyle=\"";
                // line 272
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tdata-video-source=\"";
                // line 273
                echo twig_escape_filter($this->env, (isset($context["videoSource"]) ? $context["videoSource"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t";
                // line 275
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1")) {
                    // line 276
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 279
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t\t";
                    // line 281
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 282
                echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t";
                // line 284
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 286
            echo "
\t\t\t\t\t\t\t\t";
            // line 287
            if (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
                // line 288
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "target"), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link\" style=\"";
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t";
            }
            // line 290
            echo "
\t\t\t\t\t\t\t\t";
            // line 291
            if (((!array_key_exists("videoUrl", $context)) && ((!$this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true)) || twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "external_link"))))) {
                // line 292
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "sizes"), "full"), "url"), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "2") && (!array_key_exists("link", $context)))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, trim((isset($context["iconStyle"]) ? $context["iconStyle"] : null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 293
                if ((($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "box"), "type") == "1") && ((isset($context["link"]) ? $context["link"] : null) == false))) {
                    // line 294
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t";
                }
                // line 295
                echo ">Open in pop-up window</a>
\t\t\t\t\t\t\t\t";
            }
            // line 297
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 299
        echo "
\t\t\t\t\t\t";
        // line 300
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 301
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "true")) {
                // line 302
                echo "\t\t\t\t\t\t\t\t";
                if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption")))) {
                    // line 303
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"gg-image-caption\" style=\"font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t\t<object type=\"none\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 305
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 309
                echo "\t\t\t\t\t\t\t";
            }
            // line 310
            echo "\t\t\t\t\t\t";
        }
        // line 311
        echo "\t\t\t\t\t";
    }

    // line 315
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 316
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "true"))) {
            // line 317
            echo "
\t\t\t\t\t";
            // line 318
            ob_start();
            // line 319
            echo "\t\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "foreground"), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "background"), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 321
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "font_family"), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 323
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align") != 3)) {
                // line 324
                echo "\t\t\t\t\t\t\ttext-align:";
                echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_align"), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t\t";
            }
            // line 326
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect") == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "enabled") == "false"))) {
                // line 327
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 330
            echo "\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
            echo ";
\t\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 332
            echo "
\t\t\t\t\t";
            // line 333
            if (((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption"))) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "tooltip") == "false"))) {
                // line 334
                echo "\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"caption-with-";
                // line 335
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "effect"), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\tstyle=\"";
                // line 336
                echo twig_escape_filter($this->env, (isset($context["captionStyle"]) ? $context["captionStyle"] : null), "html", null, true);
                echo "\"
\t\t\t\t\t\tdata-alpha=\"";
                // line 337
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "transparency")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 339
                if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption")))) {
                    // line 340
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo "; font-weight: 800;
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 341
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 342
                    echo $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "caption");
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 345
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "text_size_unit"), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 346
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "thumbnail"), "overlay"), "position"), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 347
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "attachment"), "title"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 350
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 353
            echo "\t\t\t\t";
        }
        // line 354
        echo "\t\t\t";
    }

    // line 357
    public function block_figure_after($context, array $blocks = array())
    {
        // line 358
        echo "\t\t";
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons", array(), "any", true, true)) || ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icons"), "enabled") == "false"))) {
            // line 359
            echo "\t\t\t</a>
\t\t";
        }
        // line 361
        echo "\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1079 => 361,  1075 => 359,  1072 => 358,  1069 => 357,  1065 => 354,  1062 => 353,  1057 => 350,  1051 => 347,  1047 => 346,  1041 => 345,  1035 => 342,  1031 => 341,  1025 => 340,  1023 => 339,  1018 => 337,  1014 => 336,  1006 => 335,  1003 => 334,  1001 => 333,  998 => 332,  992 => 330,  987 => 327,  984 => 326,  978 => 324,  976 => 323,  972 => 322,  967 => 321,  963 => 320,  958 => 319,  956 => 318,  953 => 317,  950 => 316,  947 => 315,  943 => 311,  940 => 310,  937 => 309,  930 => 305,  923 => 303,  920 => 302,  917 => 301,  915 => 300,  912 => 299,  908 => 297,  904 => 295,  900 => 294,  898 => 293,  887 => 292,  885 => 291,  882 => 290,  872 => 288,  870 => 287,  867 => 286,  863 => 284,  860 => 282,  857 => 281,  854 => 279,  852 => 278,  848 => 276,  845 => 275,  841 => 273,  837 => 272,  834 => 271,  830 => 270,  826 => 269,  822 => 268,  819 => 267,  814 => 265,  809 => 264,  807 => 263,  804 => 262,  802 => 261,  799 => 260,  796 => 259,  790 => 257,  787 => 256,  785 => 255,  780 => 254,  777 => 253,  775 => 252,  770 => 251,  767 => 250,  765 => 249,  762 => 248,  760 => 247,  755 => 245,  749 => 244,  746 => 243,  743 => 242,  741 => 241,  738 => 240,  732 => 230,  727 => 229,  721 => 227,  718 => 226,  715 => 225,  711 => 221,  708 => 220,  703 => 217,  701 => 216,  697 => 215,  693 => 214,  688 => 213,  684 => 212,  671 => 207,  668 => 206,  662 => 203,  660 => 202,  655 => 201,  652 => 200,  649 => 199,  644 => 193,  638 => 191,  635 => 190,  629 => 188,  627 => 187,  622 => 185,  614 => 184,  606 => 183,  601 => 182,  598 => 181,  594 => 130,  588 => 128,  584 => 126,  578 => 124,  575 => 123,  566 => 120,  562 => 119,  559 => 118,  555 => 117,  545 => 113,  541 => 112,  538 => 111,  535 => 110,  524 => 77,  515 => 74,  511 => 72,  509 => 71,  505 => 70,  501 => 69,  489 => 67,  475 => 83,  469 => 65,  466 => 64,  463 => 63,  451 => 355,  444 => 312,  442 => 240,  438 => 238,  423 => 231,  421 => 225,  417 => 223,  411 => 199,  409 => 198,  404 => 195,  397 => 178,  391 => 176,  389 => 175,  386 => 174,  383 => 173,  380 => 172,  378 => 171,  375 => 170,  372 => 169,  369 => 168,  367 => 167,  364 => 166,  361 => 165,  359 => 164,  355 => 162,  353 => 161,  351 => 160,  346 => 158,  338 => 155,  335 => 154,  332 => 153,  329 => 152,  326 => 151,  323 => 150,  315 => 147,  312 => 146,  309 => 145,  307 => 144,  304 => 143,  298 => 140,  292 => 138,  285 => 136,  281 => 134,  277 => 133,  275 => 132,  269 => 110,  265 => 108,  262 => 107,  259 => 106,  256 => 105,  250 => 103,  241 => 100,  238 => 99,  232 => 97,  226 => 95,  223 => 94,  220 => 93,  209 => 88,  206 => 87,  203 => 86,  198 => 84,  195 => 62,  193 => 61,  190 => 60,  185 => 57,  182 => 56,  176 => 54,  171 => 52,  168 => 51,  161 => 48,  158 => 47,  156 => 46,  151 => 45,  148 => 44,  146 => 43,  143 => 42,  138 => 39,  136 => 38,  133 => 37,  129 => 35,  127 => 34,  124 => 33,  120 => 31,  112 => 28,  105 => 25,  96 => 22,  91 => 20,  84 => 17,  80 => 15,  77 => 14,  71 => 12,  68 => 11,  65 => 9,  62 => 8,  48 => 6,  43 => 5,  33 => 3,  28 => 1,  46 => 2,  21 => 1,  685 => 113,  682 => 112,  679 => 211,  676 => 210,  673 => 108,  670 => 107,  667 => 106,  654 => 105,  650 => 236,  647 => 235,  643 => 227,  637 => 226,  634 => 225,  631 => 224,  626 => 223,  623 => 222,  620 => 221,  612 => 217,  609 => 216,  605 => 205,  602 => 204,  591 => 129,  586 => 177,  583 => 176,  579 => 174,  576 => 173,  572 => 122,  570 => 121,  564 => 169,  560 => 168,  556 => 167,  552 => 116,  548 => 114,  546 => 162,  543 => 161,  539 => 159,  537 => 158,  534 => 157,  530 => 155,  528 => 79,  525 => 153,  521 => 76,  519 => 150,  516 => 149,  512 => 147,  508 => 145,  506 => 144,  499 => 141,  497 => 68,  494 => 115,  491 => 104,  488 => 103,  485 => 101,  482 => 66,  479 => 65,  476 => 98,  473 => 97,  471 => 81,  468 => 95,  462 => 93,  460 => 62,  455 => 357,  449 => 315,  446 => 88,  441 => 86,  437 => 85,  432 => 237,  430 => 236,  426 => 82,  422 => 81,  418 => 80,  414 => 222,  410 => 78,  406 => 77,  402 => 181,  398 => 75,  394 => 177,  390 => 73,  384 => 71,  382 => 70,  379 => 69,  374 => 67,  371 => 66,  365 => 64,  362 => 63,  357 => 163,  354 => 60,  348 => 159,  343 => 157,  340 => 156,  336 => 53,  333 => 52,  327 => 50,  324 => 49,  320 => 149,  317 => 148,  313 => 44,  310 => 43,  305 => 41,  302 => 142,  299 => 39,  293 => 37,  289 => 35,  287 => 137,  279 => 33,  271 => 130,  267 => 31,  260 => 30,  253 => 29,  249 => 28,  244 => 101,  235 => 25,  231 => 23,  229 => 22,  225 => 21,  221 => 20,  217 => 92,  213 => 90,  208 => 17,  205 => 16,  201 => 85,  191 => 10,  183 => 9,  173 => 53,  163 => 7,  160 => 6,  157 => 5,  154 => 4,  142 => 243,  134 => 237,  132 => 235,  123 => 228,  121 => 221,  117 => 30,  115 => 29,  110 => 213,  106 => 211,  102 => 209,  99 => 23,  97 => 207,  94 => 21,  92 => 204,  89 => 203,  86 => 202,  81 => 199,  74 => 197,  70 => 196,  64 => 195,  61 => 194,  50 => 7,  47 => 184,  45 => 183,  41 => 181,  39 => 16,  35 => 14,  32 => 4,  30 => 2,  27 => 2,  25 => 1,);
    }
}
