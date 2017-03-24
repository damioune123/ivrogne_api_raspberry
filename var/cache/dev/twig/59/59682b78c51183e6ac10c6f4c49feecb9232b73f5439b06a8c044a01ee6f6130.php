<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d5d807d2f058aa5c0c9ee4b7107487b1c8056e2469a7cb505d37c82ed913d6e5 extends Twig_Template
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
        $__internal_61c4c4bd2d784806a3b4d9c38be1c357f1206f168c5e830628f783da984598ef = $this->env->getExtension("native_profiler");
        $__internal_61c4c4bd2d784806a3b4d9c38be1c357f1206f168c5e830628f783da984598ef->enter($__internal_61c4c4bd2d784806a3b4d9c38be1c357f1206f168c5e830628f783da984598ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_61c4c4bd2d784806a3b4d9c38be1c357f1206f168c5e830628f783da984598ef->leave($__internal_61c4c4bd2d784806a3b4d9c38be1c357f1206f168c5e830628f783da984598ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
