<?php

/* @core/form.twig */
class __TwigTemplate_f12d0b2a55b2ee9b84f468f8e36934beb92c550c229b4458f0e0744b0094772d extends Twig_Template
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
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 20
        echo "
";
        // line 51
        echo "
";
        // line 74
        echo "
";
        // line 86
        echo "
";
        // line 92
        echo "
";
        // line 98
        echo "
";
        // line 108
        echo "
";
        // line 114
        echo "
";
        // line 120
        echo "
";
        // line 126
        echo "
";
        // line 132
        echo "
";
        // line 138
        echo "
";
        // line 148
        echo "
";
        // line 156
        echo "
";
        // line 164
        echo "
";
        // line 170
        echo "
";
        // line 174
        echo "
";
    }

    // line 1
    public function getopen($_method = null, $_action = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $_method,
            "action" => $_action,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form method=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null)), "html", null, true);
            echo "\" ";
            if ((!twig_test_empty((isset($context["action"]) ? $context["action"] : null)))) {
                echo "action=\"";
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
                echo "\"";
            }
            // line 3
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    </form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshow_tooltip($_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            $context["title"] = $this->getAttribute((isset($context["tooltips"]) ? $context["tooltips"] : null), (isset($context["id"]) ? $context["id"] : null), array(), "array");
            // line 13
            echo "
    ";
            // line 14
            if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
                // line 15
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "icon"), "question")) : ("question")), "html", null, true);
                echo " supsystic-tooltip\"
           title=\"";
                // line 16
                echo (isset($context["title"]) ? $context["title"] : null);
                echo "\"
           style=\"";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tooltips_icon"]) ? $context["tooltips_icon"] : null), "style"));
                foreach ($context['_seq'] as $context["property"] => $context["value"]) {
                    echo twig_escape_filter($this->env, trim((isset($context["property"]) ? $context["property"] : null)), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, trim((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                    echo ";";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['property'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getrow($_label = null, $_element = null, $_id = null, $_titleRow = null, $_row_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "element" => $_element,
            "id" => $_id,
            "titleRow" => $_titleRow,
            "row_id" => $_row_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            $context["form"] = $this;
            // line 23
            echo "    
    ";
            // line 24
            if ((!twig_test_empty((isset($context["row_id"]) ? $context["row_id"] : null)))) {
                // line 25
                echo "    <tr id=\"";
                echo twig_escape_filter($this->env, (isset($context["row_id"]) ? $context["row_id"] : null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 27
                echo "    <tr>
    ";
            }
            // line 29
            echo "        <th scope=\"row\">
            ";
            // line 30
            if ((!twig_test_empty((isset($context["titleRow"]) ? $context["titleRow"] : null)))) {
                // line 31
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 33
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </h3>
            ";
            } else {
                // line 36
                echo "                <label ";
                if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 38
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </label>
            ";
            }
            // line 41
            echo "        </th>
        ";
            // line 42
            if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                // line 43
                echo "        <td id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\">
        ";
            } else {
                // line 45
                echo "        <td>
        ";
            }
            // line 47
            echo "            ";
            echo (isset($context["element"]) ? $context["element"] : null);
            echo "
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getrowpro($_label = null, $_link = null, $_id = null, $_element = null, $_titleRow = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "link" => $_link,
            "id" => $_id,
            "element" => $_element,
            "titleRow" => $_titleRow,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["form"] = $this;
            // line 54
            echo "    
    <tr>
        <th scope=\"row\">
            ";
            // line 57
            if ((!twig_test_empty((isset($context["titleRow"]) ? $context["titleRow"] : null)))) {
                // line 58
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 60
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </h3>
            ";
            } else {
                // line 63
                echo "                <label ";
                if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : null)))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "
                    ";
                // line 65
                echo $context["form"]->getshow_tooltip((isset($context["id"]) ? $context["id"] : null));
                echo "
                </label>
            ";
            }
            // line 68
            echo "            <br>
            <label><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array((isset($context["link"]) ? $context["link"] : null))), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
        </th>
        <td>";
            // line 71
            echo (isset($context["element"]) ? $context["element"] : null);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function getinput($_type = "text", $_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
    ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 78
                echo "        ";
                if (twig_test_iterable((isset($context["val"]) ? $context["val"] : null))) {
                    // line 79
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["val"]) ? $context["val"] : null));
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : null), "html", null, true);
                        echo ":";
                        echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : null), "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
        ";
                } else {
                    // line 81
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                    echo "\"
        ";
                }
                // line 83
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function gettext($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    ";
            $context["form"] = $this;
            // line 89
            echo "
    ";
            // line 90
            echo $context["form"]->getinput("text", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getpassword($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "    ";
            $context["form"] = $this;
            // line 95
            echo "
    ";
            // line 96
            echo $context["form"]->getinput("password", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getbutton($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    ";
            $context["form"] = $this;
            // line 101
            echo "
    ";
            // line 102
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
                // line 103
                echo "        ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class") . " button button-primary")));
                // line 104
                echo "    ";
            }
            // line 105
            echo "
    ";
            // line 106
            echo $context["form"]->getinput("button", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getcheckbox($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            $context["form"] = $this;
            // line 111
            echo "
    ";
            // line 112
            echo $context["form"]->getinput("checkbox", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 115
    public function getfile($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 116
            echo "    ";
            $context["form"] = $this;
            // line 117
            echo "
    ";
            // line 118
            echo $context["form"]->getinput("file", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function gethidden($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            $context["form"] = $this;
            // line 123
            echo "
    ";
            // line 124
            echo $context["form"]->getinput("hidden", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getradio($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "    ";
            $context["form"] = $this;
            // line 129
            echo "
    ";
            // line 130
            echo $context["form"]->getinput("radio", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getcolor($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["form"] = $this;
            // line 135
            echo "
    ";
            // line 136
            echo $context["form"]->getinput("color", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function getsubmit($_name = null, $_value = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "value" => $_value,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 140
            echo "    ";
            $context["form"] = $this;
            // line 141
            echo "
    ";
            // line 142
            if ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "any", true, true)) {
                // line 143
                echo "        ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class") . " button button-primary")));
                // line 144
                echo "    ";
            }
            // line 145
            echo "
    ";
            // line 146
            echo $context["form"]->getinput("submit", (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["attributes"]) ? $context["attributes"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getselect($_name = null, $_options = null, $_selected = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 151
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 152
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function getselectv($_name = null, $_options = null, $_selected = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 158
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 160
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["text"]) ? $context["text"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getspan($_name = null, $_text = null, $_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "text" => $_text,
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    <span name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, (isset($context["attribute"]) ? $context["attribute"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 167
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), "html", null, true);
            echo "
    </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function getselected($_actual = null, $_expected = null)
    {
        $context = $this->env->mergeGlobals(array(
            "actual" => $_actual,
            "expected" => $_expected,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "    ";
            if (((isset($context["actual"]) ? $context["actual"] : null) == (isset($context["expected"]) ? $context["expected"] : null))) {
                echo "selected=\"selected\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getlabel($_label = null, $_for = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "for" => $_for,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 176
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["for"]) ? $context["for"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@core/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  965 => 175,  951 => 172,  939 => 171,  925 => 167,  908 => 166,  866 => 160,  845 => 158,  831 => 157,  819 => 154,  798 => 151,  781 => 150,  767 => 149,  751 => 145,  748 => 144,  743 => 142,  740 => 141,  737 => 140,  711 => 136,  708 => 135,  692 => 133,  679 => 130,  676 => 129,  673 => 128,  660 => 127,  647 => 124,  644 => 123,  641 => 122,  628 => 121,  615 => 118,  612 => 117,  609 => 116,  596 => 115,  583 => 112,  564 => 109,  545 => 104,  542 => 103,  540 => 102,  521 => 99,  508 => 96,  505 => 95,  489 => 93,  476 => 90,  473 => 89,  470 => 88,  457 => 87,  445 => 84,  431 => 81,  413 => 79,  410 => 78,  406 => 77,  397 => 76,  369 => 71,  364 => 69,  355 => 65,  351 => 64,  340 => 63,  334 => 60,  330 => 59,  327 => 58,  325 => 57,  320 => 54,  317 => 53,  302 => 52,  286 => 47,  282 => 45,  276 => 43,  261 => 37,  250 => 36,  244 => 33,  235 => 30,  228 => 27,  222 => 25,  220 => 24,  217 => 23,  214 => 22,  199 => 21,  175 => 17,  171 => 16,  166 => 15,  161 => 13,  158 => 12,  156 => 11,  133 => 7,  124 => 6,  100 => 3,  91 => 2,  73 => 174,  67 => 164,  64 => 156,  46 => 114,  43 => 108,  40 => 98,  37 => 92,  34 => 86,  31 => 74,  28 => 51,  25 => 20,  22 => 9,  19 => 5,  78 => 1,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  61 => 148,  58 => 138,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  39 => 4,  36 => 3,  33 => 2,  21 => 1,  2270 => 4,  2258 => 3,  2250 => 1660,  2246 => 1659,  2240 => 1656,  2236 => 1655,  2230 => 1652,  2226 => 1651,  2220 => 1648,  2216 => 1647,  2211 => 1644,  2200 => 1641,  2191 => 1640,  2186 => 1639,  2184 => 1622,  2179 => 1620,  2176 => 1619,  2172 => 1474,  2162 => 1470,  2153 => 1464,  2149 => 1463,  2144 => 1461,  2135 => 1455,  2131 => 1454,  2126 => 1453,  2121 => 1452,  2118 => 1451,  2114 => 1315,  2111 => 1314,  2102 => 1306,  2098 => 1305,  2091 => 1301,  2085 => 1298,  2082 => 1297,  2079 => 1296,  2074 => 1311,  2072 => 1296,  2066 => 1293,  2062 => 1292,  2055 => 1288,  2049 => 1285,  2045 => 1283,  2042 => 1282,  2031 => 1273,  2027 => 1272,  2023 => 1271,  2019 => 1270,  2015 => 1269,  2008 => 1268,  2004 => 1267,  2000 => 1266,  1996 => 1265,  1992 => 1264,  1988 => 1263,  1980 => 1258,  1971 => 1252,  1964 => 1248,  1953 => 1240,  1949 => 1239,  1944 => 1237,  1940 => 1236,  1932 => 1231,  1923 => 1225,  1916 => 1221,  1907 => 1215,  1900 => 1211,  1891 => 1205,  1884 => 1201,  1875 => 1195,  1868 => 1191,  1859 => 1185,  1852 => 1181,  1843 => 1175,  1836 => 1171,  1830 => 1167,  1828 => 1164,  1823 => 1161,  1820 => 1157,  1818 => 1156,  1814 => 1154,  1811 => 1153,  1802 => 905,  1798 => 904,  1790 => 899,  1784 => 896,  1780 => 894,  1777 => 893,  1772 => 889,  1764 => 884,  1760 => 883,  1753 => 879,  1748 => 877,  1742 => 873,  1732 => 863,  1726 => 860,  1719 => 856,  1714 => 854,  1708 => 850,  1706 => 849,  1702 => 847,  1699 => 843,  1697 => 842,  1693 => 840,  1690 => 839,  1685 => 832,  1682 => 819,  1678 => 816,  1675 => 807,  1671 => 804,  1669 => 803,  1666 => 802,  1659 => 834,  1656 => 802,  1652 => 799,  1649 => 783,  1645 => 780,  1642 => 772,  1638 => 769,  1635 => 760,  1631 => 757,  1628 => 749,  1624 => 746,  1621 => 738,  1617 => 735,  1614 => 716,  1610 => 713,  1607 => 706,  1603 => 703,  1600 => 696,  1596 => 693,  1593 => 681,  1589 => 678,  1586 => 671,  1582 => 668,  1579 => 653,  1574 => 649,  1571 => 630,  1568 => 629,  1564 => 626,  1561 => 625,  1553 => 619,  1551 => 618,  1547 => 616,  1545 => 615,  1541 => 613,  1539 => 612,  1535 => 610,  1533 => 609,  1529 => 607,  1527 => 606,  1518 => 600,  1512 => 599,  1507 => 597,  1501 => 596,  1496 => 594,  1490 => 593,  1483 => 589,  1473 => 582,  1466 => 578,  1456 => 571,  1450 => 570,  1446 => 569,  1440 => 568,  1433 => 564,  1426 => 559,  1423 => 558,  1415 => 552,  1413 => 550,  1409 => 548,  1407 => 547,  1403 => 545,  1401 => 543,  1398 => 542,  1395 => 526,  1393 => 515,  1389 => 513,  1386 => 512,  1382 => 482,  1379 => 481,  1372 => 483,  1370 => 481,  1366 => 479,  1364 => 463,  1360 => 461,  1358 => 460,  1353 => 457,  1350 => 453,  1348 => 452,  1344 => 450,  1341 => 449,  1334 => 444,  1326 => 439,  1322 => 438,  1318 => 437,  1313 => 435,  1309 => 433,  1306 => 432,  1299 => 428,  1295 => 427,  1289 => 424,  1285 => 422,  1280 => 419,  1278 => 410,  1274 => 408,  1272 => 399,  1268 => 397,  1266 => 387,  1262 => 385,  1259 => 384,  1257 => 383,  1253 => 381,  1251 => 380,  1247 => 378,  1245 => 369,  1241 => 367,  1239 => 358,  1235 => 356,  1233 => 346,  1229 => 344,  1226 => 343,  1224 => 342,  1220 => 340,  1218 => 339,  1214 => 337,  1212 => 328,  1208 => 326,  1206 => 325,  1202 => 323,  1200 => 318,  1196 => 316,  1193 => 315,  1191 => 314,  1186 => 311,  1184 => 307,  1180 => 305,  1177 => 304,  1173 => 298,  1170 => 297,  1165 => 293,  1162 => 288,  1159 => 287,  1152 => 299,  1150 => 297,  1146 => 295,  1144 => 287,  1140 => 285,  1138 => 284,  1134 => 282,  1131 => 275,  1128 => 263,  1124 => 260,  1122 => 258,  1118 => 256,  1116 => 254,  1111 => 251,  1109 => 249,  1106 => 248,  1102 => 241,  1100 => 240,  1096 => 238,  1093 => 231,  1089 => 228,  1087 => 226,  1083 => 224,  1081 => 222,  1076 => 219,  1074 => 218,  1070 => 216,  1068 => 214,  1065 => 213,  1061 => 209,  1059 => 200,  1052 => 196,  1043 => 190,  1039 => 189,  1032 => 184,  1030 => 183,  1026 => 181,  1023 => 180,  1019 => 1619,  1009 => 1612,  1004 => 1610,  998 => 1607,  994 => 1606,  990 => 1605,  984 => 1602,  979 => 1601,  977 => 176,  970 => 1596,  963 => 1592,  938 => 1569,  928 => 1565,  922 => 1562,  912 => 1561,  902 => 1560,  899 => 1559,  895 => 165,  891 => 1556,  889 => 1484,  883 => 162,  878 => 1479,  872 => 1475,  870 => 1451,  865 => 1449,  862 => 159,  856 => 1447,  849 => 1443,  838 => 1438,  832 => 1435,  828 => 1434,  823 => 1433,  816 => 1429,  807 => 1423,  802 => 152,  797 => 1419,  782 => 1408,  775 => 1404,  769 => 1401,  757 => 1393,  754 => 146,  750 => 1391,  745 => 143,  739 => 1385,  729 => 1381,  724 => 139,  718 => 1378,  712 => 1377,  709 => 1376,  705 => 134,  702 => 1374,  699 => 1373,  696 => 1372,  694 => 1371,  691 => 1370,  689 => 1361,  683 => 1358,  678 => 1356,  670 => 1351,  663 => 1347,  653 => 1340,  648 => 1338,  642 => 1335,  637 => 1333,  632 => 1331,  625 => 1327,  621 => 1326,  614 => 1322,  608 => 1319,  603 => 1317,  600 => 1316,  598 => 1314,  595 => 1313,  593 => 1282,  589 => 1280,  587 => 1153,  580 => 111,  577 => 110,  573 => 1138,  570 => 1130,  565 => 1126,  562 => 1118,  558 => 1115,  555 => 1107,  551 => 106,  548 => 105,  544 => 1093,  541 => 1079,  537 => 101,  534 => 100,  530 => 1065,  527 => 1058,  523 => 1055,  520 => 1048,  516 => 1045,  513 => 1037,  509 => 1034,  506 => 1026,  502 => 94,  499 => 1015,  495 => 1012,  492 => 1004,  488 => 1001,  485 => 993,  481 => 990,  478 => 978,  474 => 975,  471 => 955,  468 => 953,  465 => 952,  462 => 951,  459 => 944,  456 => 915,  450 => 910,  448 => 893,  444 => 891,  442 => 839,  439 => 83,  437 => 625,  434 => 624,  432 => 558,  429 => 557,  427 => 512,  419 => 506,  417 => 505,  405 => 496,  401 => 495,  393 => 492,  388 => 490,  383 => 75,  381 => 449,  378 => 448,  376 => 304,  373 => 303,  371 => 180,  365 => 177,  361 => 68,  357 => 175,  353 => 174,  350 => 173,  347 => 172,  344 => 171,  341 => 170,  333 => 165,  321 => 158,  313 => 157,  307 => 153,  300 => 149,  296 => 147,  283 => 137,  274 => 42,  271 => 41,  268 => 134,  265 => 38,  262 => 132,  260 => 131,  257 => 130,  254 => 129,  251 => 128,  248 => 127,  245 => 126,  243 => 125,  240 => 32,  237 => 31,  234 => 122,  232 => 29,  229 => 120,  226 => 119,  223 => 118,  221 => 117,  218 => 116,  216 => 115,  209 => 110,  203 => 108,  201 => 107,  198 => 106,  196 => 105,  188 => 100,  178 => 93,  173 => 91,  164 => 14,  159 => 83,  150 => 77,  145 => 10,  141 => 74,  138 => 73,  132 => 62,  129 => 61,  126 => 60,  123 => 59,  118 => 55,  113 => 56,  111 => 55,  105 => 52,  97 => 47,  89 => 42,  81 => 37,  70 => 170,  63 => 13,  55 => 132,  52 => 126,  49 => 120,);
    }
}
