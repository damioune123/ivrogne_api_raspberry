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
        $__internal_c42e8630209733293ff7c0605997133f6e063441395ac1fa84563c23d392b395 = $this->env->getExtension("native_profiler");
        $__internal_c42e8630209733293ff7c0605997133f6e063441395ac1fa84563c23d392b395->enter($__internal_c42e8630209733293ff7c0605997133f6e063441395ac1fa84563c23d392b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c42e8630209733293ff7c0605997133f6e063441395ac1fa84563c23d392b395->leave($__internal_c42e8630209733293ff7c0605997133f6e063441395ac1fa84563c23d392b395_prof);

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
