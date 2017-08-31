<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_115aa2f7833842554f5a9497e78e022644718fed79d1bd655843d9c5a2f9132f extends Twig_Template
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
        $__internal_01a1463fbcc8dbed2961936ce404b5064e93551651153ff5b17f39eeee90c769 = $this->env->getExtension("native_profiler");
        $__internal_01a1463fbcc8dbed2961936ce404b5064e93551651153ff5b17f39eeee90c769->enter($__internal_01a1463fbcc8dbed2961936ce404b5064e93551651153ff5b17f39eeee90c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_01a1463fbcc8dbed2961936ce404b5064e93551651153ff5b17f39eeee90c769->leave($__internal_01a1463fbcc8dbed2961936ce404b5064e93551651153ff5b17f39eeee90c769_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
