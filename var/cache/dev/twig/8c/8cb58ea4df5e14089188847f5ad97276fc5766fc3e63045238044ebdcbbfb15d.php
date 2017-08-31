<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ed089594d024dfef7404203df1452136fc1da0a6c8edd75b0d98625bd3b7c4db extends Twig_Template
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
        $__internal_7c34a3d7cfc3a7149bd9fe309296538d2dc4c8a16c6953f64376dbd5fc22ff11 = $this->env->getExtension("native_profiler");
        $__internal_7c34a3d7cfc3a7149bd9fe309296538d2dc4c8a16c6953f64376dbd5fc22ff11->enter($__internal_7c34a3d7cfc3a7149bd9fe309296538d2dc4c8a16c6953f64376dbd5fc22ff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7c34a3d7cfc3a7149bd9fe309296538d2dc4c8a16c6953f64376dbd5fc22ff11->leave($__internal_7c34a3d7cfc3a7149bd9fe309296538d2dc4c8a16c6953f64376dbd5fc22ff11_prof);

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
