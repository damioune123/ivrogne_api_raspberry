<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_616167ad4766db230ab2de361664d427fd7e705a441ba6682740aa42291a5660 extends Twig_Template
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
        $__internal_5e51802f2e231e1b567d2a53402f990fc41694a5d2d587fe7c6f8514a00571fd = $this->env->getExtension("native_profiler");
        $__internal_5e51802f2e231e1b567d2a53402f990fc41694a5d2d587fe7c6f8514a00571fd->enter($__internal_5e51802f2e231e1b567d2a53402f990fc41694a5d2d587fe7c6f8514a00571fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5e51802f2e231e1b567d2a53402f990fc41694a5d2d587fe7c6f8514a00571fd->leave($__internal_5e51802f2e231e1b567d2a53402f990fc41694a5d2d587fe7c6f8514a00571fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
