<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_38b8cbefdeafa8418c15c297d512aa58bd145981d64a7023e81fa4517b69c37e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feafeeccec6543190a183e41aee13dfa99d1ac9a8453f8a95a7462e8e30e5637 = $this->env->getExtension("native_profiler");
        $__internal_feafeeccec6543190a183e41aee13dfa99d1ac9a8453f8a95a7462e8e30e5637->enter($__internal_feafeeccec6543190a183e41aee13dfa99d1ac9a8453f8a95a7462e8e30e5637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feafeeccec6543190a183e41aee13dfa99d1ac9a8453f8a95a7462e8e30e5637->leave($__internal_feafeeccec6543190a183e41aee13dfa99d1ac9a8453f8a95a7462e8e30e5637_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f089e240c407dce31ee670b2b5309cfad382b3213c7408689698fb839bca5e54 = $this->env->getExtension("native_profiler");
        $__internal_f089e240c407dce31ee670b2b5309cfad382b3213c7408689698fb839bca5e54->enter($__internal_f089e240c407dce31ee670b2b5309cfad382b3213c7408689698fb839bca5e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f089e240c407dce31ee670b2b5309cfad382b3213c7408689698fb839bca5e54->leave($__internal_f089e240c407dce31ee670b2b5309cfad382b3213c7408689698fb839bca5e54_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecdd0d6f8cfacbb14e7ab44c6d626a919054202751b4bd4582b6a2de410f5a65 = $this->env->getExtension("native_profiler");
        $__internal_ecdd0d6f8cfacbb14e7ab44c6d626a919054202751b4bd4582b6a2de410f5a65->enter($__internal_ecdd0d6f8cfacbb14e7ab44c6d626a919054202751b4bd4582b6a2de410f5a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ecdd0d6f8cfacbb14e7ab44c6d626a919054202751b4bd4582b6a2de410f5a65->leave($__internal_ecdd0d6f8cfacbb14e7ab44c6d626a919054202751b4bd4582b6a2de410f5a65_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2baa90ec698331e21db19e49f679e8fb001a2f9e5aa68fc94a76b33bcceb0fa = $this->env->getExtension("native_profiler");
        $__internal_f2baa90ec698331e21db19e49f679e8fb001a2f9e5aa68fc94a76b33bcceb0fa->enter($__internal_f2baa90ec698331e21db19e49f679e8fb001a2f9e5aa68fc94a76b33bcceb0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f2baa90ec698331e21db19e49f679e8fb001a2f9e5aa68fc94a76b33bcceb0fa->leave($__internal_f2baa90ec698331e21db19e49f679e8fb001a2f9e5aa68fc94a76b33bcceb0fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
