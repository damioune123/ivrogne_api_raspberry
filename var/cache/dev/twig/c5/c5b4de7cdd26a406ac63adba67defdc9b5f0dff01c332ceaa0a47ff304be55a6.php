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
        $__internal_739babfc621cd1bec70e7f3cf95f69de5f12ee0016eb98bb69d9ed892a3aeaef = $this->env->getExtension("native_profiler");
        $__internal_739babfc621cd1bec70e7f3cf95f69de5f12ee0016eb98bb69d9ed892a3aeaef->enter($__internal_739babfc621cd1bec70e7f3cf95f69de5f12ee0016eb98bb69d9ed892a3aeaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_739babfc621cd1bec70e7f3cf95f69de5f12ee0016eb98bb69d9ed892a3aeaef->leave($__internal_739babfc621cd1bec70e7f3cf95f69de5f12ee0016eb98bb69d9ed892a3aeaef_prof);

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
