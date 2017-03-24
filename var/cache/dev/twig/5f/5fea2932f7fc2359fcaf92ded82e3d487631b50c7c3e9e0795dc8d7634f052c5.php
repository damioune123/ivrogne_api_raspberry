<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_372b6f9b6736a69c90619a74ee83c1c874248a9f908a6ee33c71b067ba94088d extends Twig_Template
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
        $__internal_5bb839e753e86ebc9b22b007db9d8a2312185adca2e16356a98469346acc2159 = $this->env->getExtension("native_profiler");
        $__internal_5bb839e753e86ebc9b22b007db9d8a2312185adca2e16356a98469346acc2159->enter($__internal_5bb839e753e86ebc9b22b007db9d8a2312185adca2e16356a98469346acc2159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5bb839e753e86ebc9b22b007db9d8a2312185adca2e16356a98469346acc2159->leave($__internal_5bb839e753e86ebc9b22b007db9d8a2312185adca2e16356a98469346acc2159_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
