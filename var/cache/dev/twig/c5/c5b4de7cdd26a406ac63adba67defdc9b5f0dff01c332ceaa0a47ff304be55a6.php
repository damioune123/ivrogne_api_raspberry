<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_de1e0a4050edd54ebeda66521dccb58d609ac75482469aa10e98641031196523 extends Twig_Template
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
        $__internal_e0f7df40329b82efb299ab3317541eaf1aca910d3883528243e3c87b8e01fdfc = $this->env->getExtension("native_profiler");
        $__internal_e0f7df40329b82efb299ab3317541eaf1aca910d3883528243e3c87b8e01fdfc->enter($__internal_e0f7df40329b82efb299ab3317541eaf1aca910d3883528243e3c87b8e01fdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e0f7df40329b82efb299ab3317541eaf1aca910d3883528243e3c87b8e01fdfc->leave($__internal_e0f7df40329b82efb299ab3317541eaf1aca910d3883528243e3c87b8e01fdfc_prof);

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
