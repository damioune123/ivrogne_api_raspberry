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
        $__internal_2e6670c173e1415debd3f0998e6660f8361369145820d81df43c99db8acd7595 = $this->env->getExtension("native_profiler");
        $__internal_2e6670c173e1415debd3f0998e6660f8361369145820d81df43c99db8acd7595->enter($__internal_2e6670c173e1415debd3f0998e6660f8361369145820d81df43c99db8acd7595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_2e6670c173e1415debd3f0998e6660f8361369145820d81df43c99db8acd7595->leave($__internal_2e6670c173e1415debd3f0998e6660f8361369145820d81df43c99db8acd7595_prof);

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
