<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fe165a3b427ce6492cbb5ee0ed4b24e8c33a31bc1222286230a4b0541e5ebfab extends Twig_Template
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
        $__internal_3127b66e746c5b345f201106c1c46855f7bbbc975fa3d961d3e6295941e77af9 = $this->env->getExtension("native_profiler");
        $__internal_3127b66e746c5b345f201106c1c46855f7bbbc975fa3d961d3e6295941e77af9->enter($__internal_3127b66e746c5b345f201106c1c46855f7bbbc975fa3d961d3e6295941e77af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3127b66e746c5b345f201106c1c46855f7bbbc975fa3d961d3e6295941e77af9->leave($__internal_3127b66e746c5b345f201106c1c46855f7bbbc975fa3d961d3e6295941e77af9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
