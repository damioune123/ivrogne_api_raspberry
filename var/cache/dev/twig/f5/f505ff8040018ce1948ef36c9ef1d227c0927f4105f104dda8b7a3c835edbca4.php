<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_16522842e9872d229d49db41ab07493f9ee841ee9d6d98f3374b9afd94fec411 extends Twig_Template
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
        $__internal_50fdef946c53eba90cad6a3a2247d0ecb29b477f12487116440b36fa6065fe0a = $this->env->getExtension("native_profiler");
        $__internal_50fdef946c53eba90cad6a3a2247d0ecb29b477f12487116440b36fa6065fe0a->enter($__internal_50fdef946c53eba90cad6a3a2247d0ecb29b477f12487116440b36fa6065fe0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_50fdef946c53eba90cad6a3a2247d0ecb29b477f12487116440b36fa6065fe0a->leave($__internal_50fdef946c53eba90cad6a3a2247d0ecb29b477f12487116440b36fa6065fe0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
