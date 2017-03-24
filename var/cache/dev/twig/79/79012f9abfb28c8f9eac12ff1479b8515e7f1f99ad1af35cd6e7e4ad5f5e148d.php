<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_60806442e202873b3983730a1a8ac0e8c2212029d114fed84479b99fb7aac826 extends Twig_Template
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
        $__internal_8dfae69a41f05eab49b13ee56062bca2d71689ddf1922eb07f65218753421549 = $this->env->getExtension("native_profiler");
        $__internal_8dfae69a41f05eab49b13ee56062bca2d71689ddf1922eb07f65218753421549->enter($__internal_8dfae69a41f05eab49b13ee56062bca2d71689ddf1922eb07f65218753421549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_8dfae69a41f05eab49b13ee56062bca2d71689ddf1922eb07f65218753421549->leave($__internal_8dfae69a41f05eab49b13ee56062bca2d71689ddf1922eb07f65218753421549_prof);

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
