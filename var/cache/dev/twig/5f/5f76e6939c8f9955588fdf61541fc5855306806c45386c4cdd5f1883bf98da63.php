<?php

/* NelmioApiDocBundle::method.html.twig */
class __TwigTemplate_9c7ff8d07d9eb24c81c0fcb1618165aa536cca47c4bc5f01a2d1eedce6df85c4 extends Twig_Template
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
        $__internal_c4cb31b1723951a023c27e0a5beaef04b17fb4adde2fc5f42f7ab55f596699be = $this->env->getExtension("native_profiler");
        $__internal_c4cb31b1723951a023c27e0a5beaef04b17fb4adde2fc5f42f7ab55f596699be->enter($__internal_c4cb31b1723951a023c27e0a5beaef04b17fb4adde2fc5f42f7ab55f596699be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::method.html.twig"));

        // line 1
        echo "<li class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method", array())), "html", null, true);
        echo " operation\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
        echo "\">
    <div class=\"heading toggler";
        // line 2
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "deprecated", array())) {
            echo " deprecated";
        }
        echo "\" data-href=\"#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
        echo "\">
        <h3>
            <span class=\"http_method\">
                <i>";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method", array())), "html", null, true);
        echo "</i>
            </span>

            ";
        // line 8
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "deprecated", array())) {
            // line 9
            echo "            <span class=\"deprecated\">
                <i>DEPRECATED</i>
            </span>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())) {
            // line 15
            echo "                <span class=\"icon lock\" title=\"HTTPS\"></span>
            ";
        }
        // line 17
        echo "            ";
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "authentication", array())) {
            // line 18
            echo "                <span class=\"icon keys\" title=\"Needs ";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "authenticationRoles", array())) > 0)) ? (twig_join_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "authenticationRoles", array()), ", ")) : ("authentication")), "html", null, true);
            echo "\"></span>
            ";
        }
        // line 20
        echo "
            <span class=\"path\">
                ";
        // line 22
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "host", array(), "any", true, true)) {
            // line 23
            echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())) ? ("https://") : ("http://"));
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "host", array()), "html", null, true);
        }
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "uri", array()), "html", null, true);
        echo "
            </span>
           ";
        // line 28
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tags", array(), "any", true, true)) {
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tags", array()));
            foreach ($context['_seq'] as $context["tag"] => $context["color_code"]) {
                // line 30
                echo "                    <span class=\"tag\" ";
                if ((array_key_exists("color_code", $context) &&  !twig_test_empty($context["color_code"]))) {
                    echo "style=\"background-color:";
                    echo twig_escape_filter($this->env, $context["color_code"], "html", null, true);
                    echo ";\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tag'], $context['color_code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "        </h3>
        <ul class=\"options\">
            ";
        // line 35
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "description", array(), "any", true, true)) {
            // line 36
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "description", array()), "html", null, true);
            echo "</li>
            ";
        }
        // line 38
        echo "        </ul>
    </div>

    <div class=\"content\" style=\"display: ";
        // line 41
        if ((array_key_exists("displayContent", $context) && ((isset($context["displayContent"]) ? $context["displayContent"] : $this->getContext($context, "displayContent")) == true))) {
            echo "display";
        } else {
            echo "none";
        }
        echo ";\">
        <ul class=\"tabs\">
            ";
        // line 43
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 44
            echo "                <li class=\"selected\" data-pane=\"content\">Documentation</li>
                <li data-pane=\"sandbox\">Sandbox</li>
            ";
        }
        // line 47
        echo "        </ul>

        <div class=\"panes\">
            <div class=\"pane content selected\">
            ";
        // line 51
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "documentation", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "documentation", array())))) {
            // line 52
            echo "                <h4>Documentation</h4>
                <div>";
            // line 53
            echo $this->env->getExtension('nelmio_api_doc')->markdown($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "documentation", array()));
            echo "</div>
            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "link", array())))) {
            // line 57
            echo "                <h4>Link</h4>
                <div><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "link", array()), "html", null, true);
            echo "</a></div>
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements", array())))) {
            // line 62
            echo "                <h4>Requirements</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Requirement</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements", array()));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 74
                echo "                            <tr>
                                <td>";
                // line 75
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                                <td>";
                // line 76
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "requirement", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "requirement", array())) : ("")), "html", null, true);
                echo "</td>
                                <td>";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "dataType", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "dataType", array())) : ("")), "html", null, true);
                echo "</td>
                                <td>";
                // line 78
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "description", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "description", array())) : ("")), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </tbody>
                </table>
            ";
        }
        // line 84
        echo "
            ";
        // line 85
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filters", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters", array())))) {
            // line 86
            echo "                <h4>Filters</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters", array()));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 96
                echo "                        <tr>
                            <td>";
                // line 97
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                            <td>
                                <table>
                                ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["infos"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 101
                    echo "                                    <tr>
                                        <td>";
                    // line 102
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["key"]), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 103
                    echo twig_escape_filter($this->env, trim(twig_replace_filter(twig_jsonencode_filter($context["value"], twig_constant("JSON_UNESCAPED_UNICODE")), array("\\\\" => "\\")), "\""), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                                </table>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </tbody>
                </table>
            ";
        }
        // line 113
        echo "
            ";
        // line 114
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parameters", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters", array())))) {
            // line 115
            echo "                <h4>Parameters</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Required?</th>
                            <th>Format</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters", array()));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 128
                echo "                            ";
                if ( !$this->getAttribute($context["infos"], "readonly", array())) {
                    // line 129
                    echo "                                <tr>
                                    <td>";
                    // line 130
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 131
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "dataType", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "dataType", array())) : ("")), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 132
                    echo (($this->getAttribute($context["infos"], "required", array())) ? ("true") : ("false"));
                    echo "</td>
                                    <td class=\"format\">";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "format", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 134
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "description", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["infos"], "description", array()))) : ("")), "html", null, true);
                    echo "</td>
                                </tr>
                            ";
                }
                // line 137
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                    </tbody>
                </table>
            ";
        }
        // line 141
        echo "

            ";
        // line 143
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headers", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "headers", array())))) {
            // line 144
            echo "                <h4>Headers</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Required?</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "headers", array()));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 155
                echo "                        <tr>
                            <td>";
                // line 156
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                            <td>";
                // line 157
                echo ((($this->getAttribute($context["infos"], "required", array(), "any", true, true) && ($this->getAttribute($context["infos"], "required", array()) == "true"))) ? ("true") : ("false"));
                echo "</td>
                            <td>";
                // line 158
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "description", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["infos"], "description", array()))) : ("")), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                    </tbody>
                </table>
            ";
        }
        // line 164
        echo "
            ";
        // line 165
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parsedResponseMap", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parsedResponseMap", array())))) {
            // line 166
            echo "                <h4>Return</h4>
                <table class='fullwidth'>
                    <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Versions</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parsedResponseMap", array()));
            foreach ($context['_seq'] as $context["status_code"] => $context["response"]) {
                // line 177
                echo "                    <tbody>
                        <tr>
                            <td>
                                <h4>
                                    ";
                // line 181
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "
                                    ";
                // line 182
                if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "statusCodes", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "statusCodes", array(), "any", false, true), $context["status_code"], array(), "array", true, true))) {
                    // line 183
                    echo "                                        - ";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "statusCodes", array()), $context["status_code"], array(), "array"), ", "), "html", null, true);
                    echo "
                                    ";
                }
                // line 185
                echo "                                </h4>
                            </td>
                        </tr>
                    ";
                // line 188
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["response"], "model", array()));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 189
                    echo "                        <tr>
                            <td>";
                    // line 190
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</td>
                            <td>";
                    // line 191
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 192
                    $this->loadTemplate("NelmioApiDocBundle:Components:version.html.twig", "NelmioApiDocBundle::method.html.twig", 192)->display(array("sinceVersion" => $this->getAttribute($context["infos"], "sinceVersion", array()), "untilVersion" => $this->getAttribute($context["infos"], "untilVersion", array())));
                    echo "</td>
                            <td>";
                    // line 193
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", array()), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "                    </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                </table>
            ";
        }
        // line 200
        echo "
            ";
        // line 201
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "statusCodes", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "statusCodes", array())))) {
            // line 202
            echo "                <h4>Status Codes</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "statusCodes", array()));
            foreach ($context['_seq'] as $context["status_code"] => $context["descriptions"]) {
                // line 212
                echo "                        <tr>
                            <td><a href=\"http://en.wikipedia.org/wiki/HTTP_";
                // line 213
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "</a></td>
                            <td>
                                <ul>
                                    ";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["descriptions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
                    // line 217
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                                </ul>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['descriptions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                    </tbody>
                </table>
            ";
        }
        // line 226
        echo "
            ";
        // line 227
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "cache", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "cache", array())))) {
            // line 228
            echo "                <h4>Cache</h4>
                <div>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "cache", array()), "html", null, true);
            echo "s</div>
            ";
        }
        // line 231
        echo "
            </div>

            ";
        // line 234
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 235
            echo "                <div class=\"pane sandbox\">
                    ";
            // line 236
            if ((( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())) && $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "secure", array()) != $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())))) {
                // line 237
                echo "                    Please reload the documentation using the scheme ";
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())) {
                    echo "HTTPS";
                } else {
                    echo "HTTP";
                }
                echo " if you want to use the sandbox.
                    ";
            } else {
                // line 239
                echo "                        <form method=\"\" action=\"";
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "host", array(), "any", true, true)) {
                    echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())) ? ("https://") : ("http://"));
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "host", array()), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "uri", array()), "html", null, true);
                echo "\">
                            <fieldset class=\"parameters\">
                                <legend>Input</legend>
                                ";
                // line 242
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements", array(), "any", true, true)) {
                    // line 243
                    echo "                                    <h4>Requirements</h4>
                                    ";
                    // line 244
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements", array()));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 245
                        echo "                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 246
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 248
                        if ($this->getAttribute($context["infos"], "description", array(), "any", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", array()), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if ($this->getAttribute($context["infos"], "default", array(), "any", true, true)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", array()), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 251
                    echo "                                ";
                }
                // line 252
                echo "                                ";
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filters", array(), "any", true, true)) {
                    // line 253
                    echo "                                    <h4>Filters</h4>
                                    ";
                    // line 254
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters", array()));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 255
                        echo "                                        <p class=\"tuple filter\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 256
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 258
                        if ($this->getAttribute($context["infos"], "description", array(), "any", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", array()), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if ($this->getAttribute($context["infos"], "default", array(), "any", true, true)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", array()), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 261
                    echo "                                ";
                }
                // line 262
                echo "                                ";
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parameters", array(), "any", true, true)) {
                    // line 263
                    echo "                                    <h4>Parameters</h4>
                                    ";
                    // line 264
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters", array()));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 265
                        echo "                                    ";
                        if ( !$this->getAttribute($context["infos"], "readonly", array())) {
                            // line 266
                            echo "                                        <p class=\"tuple\" data-dataType=\"";
                            if ($this->getAttribute($context["infos"], "dataType", array())) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", array()), "html", null, true);
                            }
                            echo "\" data-format=\"";
                            if ($this->getAttribute($context["infos"], "format", array())) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "format", array()), "html", null, true);
                                echo " ";
                            }
                            echo "\" data-description=\"";
                            if ($this->getAttribute($context["infos"], "description", array())) {
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["infos"], "description", array())), "html", null, true);
                            }
                            echo "\">
                                            <input type=\"text\" class=\"key\" value=\"";
                            // line 267
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                            // line 276
                            if ($this->getAttribute($context["infos"], "dataType", array())) {
                                echo "[";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", array()), "html", null, true);
                                echo "] ";
                            }
                            if ($this->getAttribute($context["infos"], "format", array())) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "format", array()), "html", null, true);
                            }
                            if ($this->getAttribute($context["infos"], "description", array())) {
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["infos"], "description", array())), "html", null, true);
                            } else {
                                echo "Value";
                            }
                            echo "\" ";
                            if ($this->getAttribute($context["infos"], "default", array(), "any", true, true)) {
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", array()), "html", null, true);
                                echo "\" ";
                            }
                            echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                        }
                        // line 279
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo "                                    <button type=\"button\" class=\"add_parameter\">New parameter</button>
                                ";
                }
                // line 282
                echo "
                            </fieldset>

                            <fieldset class=\"headers\">
                                ";
                // line 286
                $context["methods"] = twig_split_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method", array())), "|");
                // line 287
                echo "                                ";
                if ((twig_length_filter($this->env, (isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods"))) > 1)) {
                    // line 288
                    echo "                                    <legend>Method</legend>
                                    <select name=\"header_method\">
                                    ";
                    // line 290
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods")));
                    foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                        // line 291
                        echo "                                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                        echo "</option>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 293
                    echo "                                    </select>
                                ";
                } else {
                    // line 295
                    echo "                                    <input type=\"hidden\" name=\"header_method\" value=\"";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["methods"]) ? $context["methods"] : $this->getContext($context, "methods"))), "html", null, true);
                    echo "\" />
                                ";
                }
                // line 297
                echo "
                                <legend>Headers</legend>

                                ";
                // line 300
                if ((isset($context["acceptType"]) ? $context["acceptType"] : $this->getContext($context, "acceptType"))) {
                    // line 301
                    echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"Accept\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" value=\"";
                    // line 304
                    echo twig_escape_filter($this->env, (isset($context["acceptType"]) ? $context["acceptType"] : $this->getContext($context, "acceptType")), "html", null, true);
                    echo "\" /> <span class=\"remove\">-</span>
                                    </p>
                                ";
                }
                // line 307
                echo "
                                ";
                // line 308
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "headers", array(), "any", true, true)) {
                    // line 309
                    echo "
                                    ";
                    // line 310
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "headers", array()));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 311
                        echo "                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 312
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" value=\"";
                        // line 314
                        if ($this->getAttribute($context["infos"], "default", array(), "any", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", array()), "html", null, true);
                        }
                        echo "\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 317
                    echo "
                                ";
                }
                // line 319
                echo "
                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                </p>

                                <button type=\"button\" class=\"add_header\">New header</button>
                            </fieldset>

                            <fieldset class=\"request-content\">
                                <legend>Content</legend>

                                <textarea class=\"content\" placeholder=\"Content set here will override the parameters that do not match the url\"></textarea>

                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key content-type\" value=\"Content-Type\" disabled=\"disabled\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" />
                                    <button  type=\"button\" class=\"set-content-type\">Set header</button> <small>Replaces header if set</small>
                                </p>
                            </fieldset>

                            <div class=\"buttons\">
                                <input type=\"submit\" value=\"Try!\" />
                            </div>
                        </form>

                        <script type=\"text/x-tmpl\" class=\"parameters_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>

                        <script type=\"text/x-tmpl\" class=\"headers_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>


                        <div class=\"result\">
                            <h4>Request URL</h4>
                            <pre class=\"url\"></pre>

                            <h4 class=\"request-body-header\">Request body</h4>
                            <pre class=\"request-body\"></pre>

                            <h4>Response Headers&nbsp;<small>[<a href=\"\" class=\"to-expand\">Expand</a>]</small>&nbsp;<small class=\"profiler\">[<a href=\"\" class=\"profiler-link\" target=\"_blank\">Profiler</a>]</small></h4>
                            <pre class=\"headers to-expand\"></pre>

                            <h4>Response Body&nbsp;<small>[<a href=\"\" class=\"to-raw\">Raw</a>]</small></h4>
                            <pre class=\"response prettyprint\"></pre>

                            <h4>Curl Command Line</h4>
                            <pre class=\"curl-command\"></pre>
                        </div>
                    ";
            }
            // line 388
            echo "                </div>
            ";
        }
        // line 390
        echo "        </div>
    </div>
</li>
";
        
        $__internal_c4cb31b1723951a023c27e0a5beaef04b17fb4adde2fc5f42f7ab55f596699be->leave($__internal_c4cb31b1723951a023c27e0a5beaef04b17fb4adde2fc5f42f7ab55f596699be_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  908 => 390,  904 => 388,  833 => 319,  829 => 317,  818 => 314,  813 => 312,  810 => 311,  806 => 310,  803 => 309,  801 => 308,  798 => 307,  792 => 304,  787 => 301,  785 => 300,  780 => 297,  774 => 295,  770 => 293,  759 => 291,  755 => 290,  751 => 288,  748 => 287,  746 => 286,  740 => 282,  736 => 280,  730 => 279,  706 => 276,  694 => 267,  678 => 266,  675 => 265,  671 => 264,  668 => 263,  665 => 262,  662 => 261,  643 => 258,  638 => 256,  635 => 255,  631 => 254,  628 => 253,  625 => 252,  622 => 251,  603 => 248,  598 => 246,  595 => 245,  591 => 244,  588 => 243,  586 => 242,  575 => 239,  565 => 237,  563 => 236,  560 => 235,  558 => 234,  553 => 231,  548 => 229,  545 => 228,  543 => 227,  540 => 226,  535 => 223,  526 => 219,  517 => 217,  513 => 216,  505 => 213,  502 => 212,  498 => 211,  487 => 202,  485 => 201,  482 => 200,  478 => 198,  471 => 196,  462 => 193,  458 => 192,  454 => 191,  450 => 190,  447 => 189,  443 => 188,  438 => 185,  432 => 183,  430 => 182,  426 => 181,  420 => 177,  416 => 176,  404 => 166,  402 => 165,  399 => 164,  394 => 161,  385 => 158,  381 => 157,  377 => 156,  374 => 155,  370 => 154,  358 => 144,  356 => 143,  352 => 141,  347 => 138,  341 => 137,  335 => 134,  331 => 133,  327 => 132,  323 => 131,  319 => 130,  316 => 129,  313 => 128,  309 => 127,  295 => 115,  293 => 114,  290 => 113,  285 => 110,  276 => 106,  267 => 103,  263 => 102,  260 => 101,  256 => 100,  250 => 97,  247 => 96,  243 => 95,  232 => 86,  230 => 85,  227 => 84,  222 => 81,  213 => 78,  209 => 77,  205 => 76,  201 => 75,  198 => 74,  194 => 73,  181 => 62,  179 => 61,  176 => 60,  169 => 58,  166 => 57,  164 => 56,  161 => 55,  156 => 53,  153 => 52,  151 => 51,  145 => 47,  140 => 44,  138 => 43,  129 => 41,  124 => 38,  118 => 36,  116 => 35,  112 => 33,  109 => 32,  94 => 30,  89 => 29,  87 => 28,  82 => 26,  79 => 24,  77 => 23,  75 => 22,  71 => 20,  65 => 18,  62 => 17,  58 => 15,  56 => 14,  53 => 13,  47 => 9,  45 => 8,  39 => 5,  29 => 2,  22 => 1,);
    }
}
/* <li class="{{ data.method|lower }} operation" id="{{ data.id }}">*/
/*     <div class="heading toggler{% if data.deprecated %} deprecated{% endif %}" data-href="#{{ data.id }}">*/
/*         <h3>*/
/*             <span class="http_method">*/
/*                 <i>{{ data.method|upper }}</i>*/
/*             </span>*/
/* */
/*             {% if data.deprecated %}*/
/*             <span class="deprecated">*/
/*                 <i>DEPRECATED</i>*/
/*             </span>*/
/*             {% endif %}*/
/* */
/*             {% if data.https %}*/
/*                 <span class="icon lock" title="HTTPS"></span>*/
/*             {% endif %}*/
/*             {% if data.authentication %}*/
/*                 <span class="icon keys" title="Needs {{ data.authenticationRoles|length > 0 ? data.authenticationRoles|join(', ') : 'authentication' }}"></span>*/
/*             {% endif %}*/
/* */
/*             <span class="path">*/
/*                 {% if data.host is defined -%}*/
/*                     {{ data.https ? 'https://' : 'http://' -}}*/
/*                     {{ data.host -}}*/
/*                 {% endif -%}*/
/*                 {{ data.uri }}*/
/*             </span>*/
/*            {% if data.tags is defined %}*/
/*                 {% for tag, color_code in data.tags %}*/
/*                     <span class="tag" {% if color_code is defined and color_code is not empty %}style="background-color:{{ color_code }};"{% endif %}>{{ tag }}</span>*/
/*                 {% endfor %}*/
/*             {%  endif %}*/
/*         </h3>*/
/*         <ul class="options">*/
/*             {% if data.description is defined %}*/
/*                 <li>{{ data.description }}</li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="content" style="display: {% if displayContent is defined and displayContent == true %}display{% else %}none{% endif %};">*/
/*         <ul class="tabs">*/
/*             {% if enableSandbox %}*/
/*                 <li class="selected" data-pane="content">Documentation</li>*/
/*                 <li data-pane="sandbox">Sandbox</li>*/
/*             {% endif %}*/
/*         </ul>*/
/* */
/*         <div class="panes">*/
/*             <div class="pane content selected">*/
/*             {% if data.documentation is defined and data.documentation is not empty %}*/
/*                 <h4>Documentation</h4>*/
/*                 <div>{{ data.documentation|extra_markdown }}</div>*/
/*             {% endif %}*/
/* */
/*             {% if data.link is defined and data.link is not empty %}*/
/*                 <h4>Link</h4>*/
/*                 <div><a href="{{ data.link }}" target="_blank">{{ data.link }}</a></div>*/
/*             {% endif %}*/
/* */
/*             {% if data.requirements is defined and data.requirements is not empty %}*/
/*                 <h4>Requirements</h4>*/
/*                 <table class="fullwidth">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Name</th>*/
/*                             <th>Requirement</th>*/
/*                             <th>Type</th>*/
/*                             <th>Description</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for name, infos in data.requirements %}*/
/*                             <tr>*/
/*                                 <td>{{ name }}</td>*/
/*                                 <td>{{ infos.requirement is defined ? infos.requirement : ''}}</td>*/
/*                                 <td>{{ infos.dataType is defined ? infos.dataType : ''}}</td>*/
/*                                 <td>{{ infos.description is defined ? infos.description : ''}}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.filters is defined and data.filters is not empty %}*/
/*                 <h4>Filters</h4>*/
/*                 <table class="fullwidth">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Name</th>*/
/*                             <th>Information</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for name, infos in data.filters %}*/
/*                         <tr>*/
/*                             <td>{{ name }}</td>*/
/*                             <td>*/
/*                                 <table>*/
/*                                 {% for key, value in infos %}*/
/*                                     <tr>*/
/*                                         <td>{{ key|title }}</td>*/
/*                                         <td>{{ value|json_encode(constant('JSON_UNESCAPED_UNICODE'))|replace({'\\\\': '\\'})|trim('"') }}</td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </table>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.parameters is defined and data.parameters is not empty %}*/
/*                 <h4>Parameters</h4>*/
/*                 <table class='fullwidth'>*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Parameter</th>*/
/*                             <th>Type</th>*/
/*                             <th>Required?</th>*/
/*                             <th>Format</th>*/
/*                             <th>Description</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for name, infos in data.parameters %}*/
/*                             {% if not infos.readonly %}*/
/*                                 <tr>*/
/*                                     <td>{{ name }}</td>*/
/*                                     <td>{{ infos.dataType is defined ? infos.dataType : '' }}</td>*/
/*                                     <td>{{ infos.required ? 'true' : 'false' }}</td>*/
/*                                     <td class="format">{{ infos.format }}</td>*/
/*                                     <td>{{ infos.description is defined ? infos.description|trans : ''  }}</td>*/
/*                                 </tr>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/* */
/*             {% if data.headers is defined and data.headers is not empty %}*/
/*                 <h4>Headers</h4>*/
/*                 <table class="fullwidth">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Name</th>*/
/*                         <th>Required?</th>*/
/*                         <th>Description</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for name, infos in data.headers %}*/
/*                         <tr>*/
/*                             <td>{{ name }}</td>*/
/*                             <td>{{ infos.required is defined and infos.required == 'true' ? 'true' : 'false'}}</td>*/
/*                             <td>{{ infos.description is defined ? infos.description|trans : ''}}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.parsedResponseMap is defined and data.parsedResponseMap is not empty %}*/
/*                 <h4>Return</h4>*/
/*                 <table class='fullwidth'>*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Parameter</th>*/
/*                         <th>Type</th>*/
/*                         <th>Versions</th>*/
/*                         <th>Description</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                 {% for status_code, response in data.parsedResponseMap %}*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <h4>*/
/*                                     {{ status_code }}*/
/*                                     {% if data.statusCodes is defined and data.statusCodes[status_code] is defined %}*/
/*                                         - {{ data.statusCodes[status_code]|join(', ') }}*/
/*                                     {% endif %}*/
/*                                 </h4>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% for name, infos in response.model %}*/
/*                         <tr>*/
/*                             <td>{{ name }}</td>*/
/*                             <td>{{ infos.dataType }}</td>*/
/*                             <td>{% include 'NelmioApiDocBundle:Components:version.html.twig' with {'sinceVersion': infos.sinceVersion, 'untilVersion': infos.untilVersion} only %}</td>*/
/*                             <td>{{ infos.description }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 {% endfor %}*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.statusCodes is defined and data.statusCodes is not empty %}*/
/*                 <h4>Status Codes</h4>*/
/*                 <table class="fullwidth">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Status Code</th>*/
/*                         <th>Description</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for status_code, descriptions in data.statusCodes %}*/
/*                         <tr>*/
/*                             <td><a href="http://en.wikipedia.org/wiki/HTTP_{{ status_code }}" target="_blank">{{ status_code }}</a></td>*/
/*                             <td>*/
/*                                 <ul>*/
/*                                     {% for description in descriptions %}*/
/*                                         <li>{{ description }}</li>*/
/*                                     {%  endfor %}*/
/*                                 </ul>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.cache is defined and data.cache is not empty %}*/
/*                 <h4>Cache</h4>*/
/*                 <div>{{ data.cache }}s</div>*/
/*             {% endif %}*/
/* */
/*             </div>*/
/* */
/*             {% if enableSandbox %}*/
/*                 <div class="pane sandbox">*/
/*                     {% if app.request is not null and data.https and app.request.secure != data.https %}*/
/*                     Please reload the documentation using the scheme {% if data.https %}HTTPS{% else %}HTTP{% endif %} if you want to use the sandbox.*/
/*                     {% else %}*/
/*                         <form method="" action="{% if data.host is defined %}{{ data.https ? 'https://' : 'http://' }}{{ data.host }}{% endif %}{{ data.uri }}">*/
/*                             <fieldset class="parameters">*/
/*                                 <legend>Input</legend>*/
/*                                 {% if data.requirements is defined %}*/
/*                                     <h4>Requirements</h4>*/
/*                                     {% for name, infos in data.requirements %}*/
/*                                         <p class="tuple">*/
/*                                             <input type="text" class="key" value="{{ name }}" placeholder="Key" />*/
/*                                             <span>=</span>*/
/*                                             <input type="text" class="value" placeholder="{% if infos.description is defined %}{{ infos.description }}{% else %}Value{% endif %}" {% if infos.default is defined %} value="{{ infos.default }}" {% endif %}/> <span class="remove">-</span>*/
/*                                         </p>*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                                 {% if data.filters is defined %}*/
/*                                     <h4>Filters</h4>*/
/*                                     {% for name, infos in data.filters %}*/
/*                                         <p class="tuple filter">*/
/*                                             <input type="text" class="key" value="{{ name }}" placeholder="Key" />*/
/*                                             <span>=</span>*/
/*                                             <input type="text" class="value" placeholder="{% if infos.description is defined %}{{ infos.description }}{% else %}Value{% endif %}" {% if infos.default is defined %} value="{{ infos.default }}" {% endif %}/> <span class="remove">-</span>*/
/*                                         </p>*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                                 {% if data.parameters is defined %}*/
/*                                     <h4>Parameters</h4>*/
/*                                     {% for name, infos in data.parameters %}*/
/*                                     {% if not infos.readonly %}*/
/*                                         <p class="tuple" data-dataType="{% if infos.dataType %}{{ infos.dataType }}{% endif %}" data-format="{% if infos.format %}{{ infos.format }} {% endif %}" data-description="{% if infos.description %}{{ infos.description|trans }}{% endif %}">*/
/*                                             <input type="text" class="key" value="{{ name }}" placeholder="Key" />*/
/*                                             <span>=</span>*/
/*                                             <select class="tuple_type">*/
/*                                                 <option value="">Type</option>*/
/*                                                 <option value="string">String</option>*/
/*                                                 <option value="boolean">Boolean</option>*/
/*                                                 <option value="file">File</option>*/
/*                                                 <option value="textarea">Textarea</option>*/
/*                                             </select>*/
/*                                             <input type="text" class="value" placeholder="{% if infos.dataType %}[{{ infos.dataType }}] {% endif %}{% if infos.format %}{{ infos.format }}{% endif %}{% if infos.description %}{{ infos.description|trans }}{% else %}Value{% endif %}" {% if infos.default is defined %} value="{{ infos.default }}" {% endif %}/> <span class="remove">-</span>*/
/*                                         </p>*/
/*                                     {% endif %}*/
/*                                     {% endfor %}*/
/*                                     <button type="button" class="add_parameter">New parameter</button>*/
/*                                 {% endif %}*/
/* */
/*                             </fieldset>*/
/* */
/*                             <fieldset class="headers">*/
/*                                 {% set methods = data.method|upper|split('|') %}*/
/*                                 {% if methods|length > 1 %}*/
/*                                     <legend>Method</legend>*/
/*                                     <select name="header_method">*/
/*                                     {% for method in methods %}*/
/*                                         <option value="{{ method }}">{{ method }}</option>*/
/*                                     {% endfor %}*/
/*                                     </select>*/
/*                                 {% else %}*/
/*                                     <input type="hidden" name="header_method" value="{{ methods|join }}" />*/
/*                                 {% endif %}*/
/* */
/*                                 <legend>Headers</legend>*/
/* */
/*                                 {% if acceptType %}*/
/*                                     <p class="tuple">*/
/*                                         <input type="text" class="key" value="Accept" />*/
/*                                         <span>=</span>*/
/*                                         <input type="text" class="value" value="{{ acceptType }}" /> <span class="remove">-</span>*/
/*                                     </p>*/
/*                                 {% endif %}*/
/* */
/*                                 {% if data.headers is defined %}*/
/* */
/*                                     {% for name, infos in data.headers %}*/
/*                                         <p class="tuple">*/
/*                                             <input type="text" class="key" value="{{ name }}" />*/
/*                                             <span>=</span>*/
/*                                             <input type="text" class="value" value="{% if infos.default is defined %}{{ infos.default }}{% endif %}" placeholder="Value" /> <span class="remove">-</span>*/
/*                                         </p>*/
/*                                     {% endfor %}*/
/* */
/*                                 {% endif %}*/
/* */
/*                                 <p class="tuple">*/
/*                                     <input type="text" class="key" placeholder="Key" />*/
/*                                     <span>=</span>*/
/*                                     <input type="text" class="value" placeholder="Value" /> <span class="remove">-</span>*/
/*                                 </p>*/
/* */
/*                                 <button type="button" class="add_header">New header</button>*/
/*                             </fieldset>*/
/* */
/*                             <fieldset class="request-content">*/
/*                                 <legend>Content</legend>*/
/* */
/*                                 <textarea class="content" placeholder="Content set here will override the parameters that do not match the url"></textarea>*/
/* */
/*                                 <p class="tuple">*/
/*                                     <input type="text" class="key content-type" value="Content-Type" disabled="disabled" />*/
/*                                     <span>=</span>*/
/*                                     <input type="text" class="value" placeholder="Value" />*/
/*                                     <button  type="button" class="set-content-type">Set header</button> <small>Replaces header if set</small>*/
/*                                 </p>*/
/*                             </fieldset>*/
/* */
/*                             <div class="buttons">*/
/*                                 <input type="submit" value="Try!" />*/
/*                             </div>*/
/*                         </form>*/
/* */
/*                         <script type="text/x-tmpl" class="parameters_tuple_template">*/
/*                         <p class="tuple">*/
/*                             <input type="text" class="key" placeholder="Key" />*/
/*                             <span>=</span>*/
/*                             <select class="tuple_type">*/
/*                                                 <option value="">Type</option>*/
/*                                                 <option value="string">String</option>*/
/*                                                 <option value="boolean">Boolean</option>*/
/*                                                 <option value="file">File</option>*/
/*                                                 <option value="textarea">Textarea</option>*/
/*                                             </select>*/
/*                             <input type="text" class="value" placeholder="Value" /> <span class="remove">-</span>*/
/*                         </p>*/
/*                         </script>*/
/* */
/*                         <script type="text/x-tmpl" class="headers_tuple_template">*/
/*                         <p class="tuple">*/
/*                             <input type="text" class="key" placeholder="Key" />*/
/*                             <span>=</span>*/
/*                             <input type="text" class="value" placeholder="Value" /> <span class="remove">-</span>*/
/*                         </p>*/
/*                         </script>*/
/* */
/* */
/*                         <div class="result">*/
/*                             <h4>Request URL</h4>*/
/*                             <pre class="url"></pre>*/
/* */
/*                             <h4 class="request-body-header">Request body</h4>*/
/*                             <pre class="request-body"></pre>*/
/* */
/*                             <h4>Response Headers&nbsp;<small>[<a href="" class="to-expand">Expand</a>]</small>&nbsp;<small class="profiler">[<a href="" class="profiler-link" target="_blank">Profiler</a>]</small></h4>*/
/*                             <pre class="headers to-expand"></pre>*/
/* */
/*                             <h4>Response Body&nbsp;<small>[<a href="" class="to-raw">Raw</a>]</small></h4>*/
/*                             <pre class="response prettyprint"></pre>*/
/* */
/*                             <h4>Curl Command Line</h4>*/
/*                             <pre class="curl-command"></pre>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </li>*/
/* */
