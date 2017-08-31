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
        $__internal_2a218e18a5d17d79a01cfb640595a6c54f161209a66cdb33cde2a3108c317914 = $this->env->getExtension("native_profiler");
        $__internal_2a218e18a5d17d79a01cfb640595a6c54f161209a66cdb33cde2a3108c317914->enter($__internal_2a218e18a5d17d79a01cfb640595a6c54f161209a66cdb33cde2a3108c317914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2a218e18a5d17d79a01cfb640595a6c54f161209a66cdb33cde2a3108c317914->leave($__internal_2a218e18a5d17d79a01cfb640595a6c54f161209a66cdb33cde2a3108c317914_prof);

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
