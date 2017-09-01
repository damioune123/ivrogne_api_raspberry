<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f3284b1d361de927c35a50197a59b71d4f0dd9cd41ab91b0c423c0513db144f1 extends Twig_Template
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
        $__internal_a94c929cc7d06baf5e8f948e1ffa0a9f3016f86cb588e6f4b8ce9593f72a2d17 = $this->env->getExtension("native_profiler");
        $__internal_a94c929cc7d06baf5e8f948e1ffa0a9f3016f86cb588e6f4b8ce9593f72a2d17->enter($__internal_a94c929cc7d06baf5e8f948e1ffa0a9f3016f86cb588e6f4b8ce9593f72a2d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_a94c929cc7d06baf5e8f948e1ffa0a9f3016f86cb588e6f4b8ce9593f72a2d17->leave($__internal_a94c929cc7d06baf5e8f948e1ffa0a9f3016f86cb588e6f4b8ce9593f72a2d17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
