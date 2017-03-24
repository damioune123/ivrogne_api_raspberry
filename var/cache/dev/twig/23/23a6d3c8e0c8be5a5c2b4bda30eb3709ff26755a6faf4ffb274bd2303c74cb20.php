<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b4873423b58ee7c7d392e3d704ee2e361d535f0658cbbcd7855f427470136e7c extends Twig_Template
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
        $__internal_c1ccd96d613d6754f8662cba272bf4391148eafbe51275e894b93bcebd4f5c9d = $this->env->getExtension("native_profiler");
        $__internal_c1ccd96d613d6754f8662cba272bf4391148eafbe51275e894b93bcebd4f5c9d->enter($__internal_c1ccd96d613d6754f8662cba272bf4391148eafbe51275e894b93bcebd4f5c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c1ccd96d613d6754f8662cba272bf4391148eafbe51275e894b93bcebd4f5c9d->leave($__internal_c1ccd96d613d6754f8662cba272bf4391148eafbe51275e894b93bcebd4f5c9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
