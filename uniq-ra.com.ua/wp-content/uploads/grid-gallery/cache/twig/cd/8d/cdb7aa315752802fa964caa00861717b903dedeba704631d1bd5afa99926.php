<?php

/* @galleries/shortcode/style.twig */
class __TwigTemplate_cd8dcdb7aa315752802fa964caa00861717b903dedeba704631d1bd5afa99926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getprop($_prop = null, $_value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "prop" => $_prop,
            "value" => $_value,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo ";";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 2
    public function getobject($_values = null)
    {
        $context = $this->env->mergeGlobals(array(
            "values" => $_values,
        ));

        $blocks = array();

        ob_start();
        try {
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["prop"]) ? $context["prop"] : null), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo ";";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['prop'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/style.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  21 => 1,  685 => 113,  682 => 112,  679 => 110,  676 => 109,  673 => 108,  670 => 107,  667 => 106,  654 => 105,  650 => 236,  647 => 235,  643 => 227,  637 => 226,  634 => 225,  631 => 224,  626 => 223,  623 => 222,  620 => 221,  612 => 217,  609 => 216,  605 => 205,  602 => 204,  591 => 180,  586 => 177,  583 => 176,  579 => 174,  576 => 173,  572 => 171,  570 => 170,  564 => 169,  560 => 168,  556 => 167,  552 => 165,  548 => 163,  546 => 162,  543 => 161,  539 => 159,  537 => 158,  534 => 157,  530 => 155,  528 => 154,  525 => 153,  521 => 151,  519 => 150,  516 => 149,  512 => 147,  508 => 145,  506 => 144,  499 => 141,  497 => 116,  494 => 115,  491 => 104,  488 => 103,  485 => 101,  482 => 100,  479 => 99,  476 => 98,  473 => 97,  471 => 96,  468 => 95,  462 => 93,  460 => 92,  455 => 91,  449 => 89,  446 => 88,  441 => 86,  437 => 85,  432 => 84,  430 => 83,  426 => 82,  422 => 81,  418 => 80,  414 => 79,  410 => 78,  406 => 77,  402 => 76,  398 => 75,  394 => 74,  390 => 73,  384 => 71,  382 => 70,  379 => 69,  374 => 67,  371 => 66,  365 => 64,  362 => 63,  357 => 61,  354 => 60,  348 => 58,  343 => 56,  340 => 55,  336 => 53,  333 => 52,  327 => 50,  324 => 49,  320 => 47,  317 => 46,  313 => 44,  310 => 43,  305 => 41,  302 => 40,  299 => 39,  293 => 37,  289 => 35,  287 => 34,  279 => 33,  271 => 32,  267 => 31,  260 => 30,  253 => 29,  249 => 28,  244 => 27,  235 => 25,  231 => 23,  229 => 22,  225 => 21,  221 => 20,  217 => 19,  213 => 18,  208 => 17,  205 => 16,  201 => 13,  191 => 10,  183 => 9,  173 => 8,  163 => 7,  160 => 6,  157 => 5,  154 => 4,  142 => 243,  134 => 237,  132 => 235,  123 => 228,  121 => 221,  117 => 219,  115 => 216,  110 => 213,  106 => 211,  102 => 209,  99 => 208,  97 => 207,  94 => 206,  92 => 204,  89 => 203,  86 => 202,  81 => 199,  74 => 197,  70 => 196,  64 => 195,  61 => 194,  50 => 185,  47 => 184,  45 => 183,  41 => 181,  39 => 16,  35 => 14,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }
}
