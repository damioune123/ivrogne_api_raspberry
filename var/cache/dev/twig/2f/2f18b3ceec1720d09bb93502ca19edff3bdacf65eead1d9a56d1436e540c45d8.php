<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_514fc457ebda1ef5747647c6c549e9defa055eb5464898486ba840920375042d extends Twig_Template
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
        $__internal_87d99a36578de28ed60ff3095163805ac5da01682fffd331e91ec23e8397882a = $this->env->getExtension("native_profiler");
        $__internal_87d99a36578de28ed60ff3095163805ac5da01682fffd331e91ec23e8397882a->enter($__internal_87d99a36578de28ed60ff3095163805ac5da01682fffd331e91ec23e8397882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_87d99a36578de28ed60ff3095163805ac5da01682fffd331e91ec23e8397882a->leave($__internal_87d99a36578de28ed60ff3095163805ac5da01682fffd331e91ec23e8397882a_prof);

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
