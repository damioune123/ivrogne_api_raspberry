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
        $__internal_343eb646ff22949e16f534c693067b4394f57dc4b6f15d3865a11ea1495268bd = $this->env->getExtension("native_profiler");
        $__internal_343eb646ff22949e16f534c693067b4394f57dc4b6f15d3865a11ea1495268bd->enter($__internal_343eb646ff22949e16f534c693067b4394f57dc4b6f15d3865a11ea1495268bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_343eb646ff22949e16f534c693067b4394f57dc4b6f15d3865a11ea1495268bd->leave($__internal_343eb646ff22949e16f534c693067b4394f57dc4b6f15d3865a11ea1495268bd_prof);

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
