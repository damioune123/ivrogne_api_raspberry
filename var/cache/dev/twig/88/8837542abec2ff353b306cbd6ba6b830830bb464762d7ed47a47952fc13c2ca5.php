<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3da520a58d12d0551e27ccb96b487f0b72fc4ad199fe92ffe95cd0252b79546c extends Twig_Template
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
        $__internal_420ad4e9099fdd35d67a9279e51565bce065e7b6e18cb4edea49146177864d37 = $this->env->getExtension("native_profiler");
        $__internal_420ad4e9099fdd35d67a9279e51565bce065e7b6e18cb4edea49146177864d37->enter($__internal_420ad4e9099fdd35d67a9279e51565bce065e7b6e18cb4edea49146177864d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_420ad4e9099fdd35d67a9279e51565bce065e7b6e18cb4edea49146177864d37->leave($__internal_420ad4e9099fdd35d67a9279e51565bce065e7b6e18cb4edea49146177864d37_prof);

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
