<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_421c60f5f7457175cbf9f5a88f8b7afedb7367c2ad66897a6699d8202a995587 extends Twig_Template
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
        $__internal_5f6762defdd5a116b9daa03ba81882f97786578b1507c5270e6f959479473894 = $this->env->getExtension("native_profiler");
        $__internal_5f6762defdd5a116b9daa03ba81882f97786578b1507c5270e6f959479473894->enter($__internal_5f6762defdd5a116b9daa03ba81882f97786578b1507c5270e6f959479473894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f6762defdd5a116b9daa03ba81882f97786578b1507c5270e6f959479473894->leave($__internal_5f6762defdd5a116b9daa03ba81882f97786578b1507c5270e6f959479473894_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
