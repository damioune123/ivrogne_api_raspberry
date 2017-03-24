<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_039a6c5d2f2f3f9adf0ba313b6a6534cdd84d2fc3b0fcda53125524895ea8b18 extends Twig_Template
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
        $__internal_b26d65a32f4bce1f85adcf8753ddfb232922857cb48dfafc3a2edbc14abd690b = $this->env->getExtension("native_profiler");
        $__internal_b26d65a32f4bce1f85adcf8753ddfb232922857cb48dfafc3a2edbc14abd690b->enter($__internal_b26d65a32f4bce1f85adcf8753ddfb232922857cb48dfafc3a2edbc14abd690b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b26d65a32f4bce1f85adcf8753ddfb232922857cb48dfafc3a2edbc14abd690b->leave($__internal_b26d65a32f4bce1f85adcf8753ddfb232922857cb48dfafc3a2edbc14abd690b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
