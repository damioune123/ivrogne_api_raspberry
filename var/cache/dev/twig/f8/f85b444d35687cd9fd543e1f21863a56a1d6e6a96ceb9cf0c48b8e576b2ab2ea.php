<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3b3014e98d41e02e5d8ddffb82ab13500e0a75dfdc85d45703902932e9638307 extends Twig_Template
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
        $__internal_3caad8da3ef05f308d9e2aab0646cd09e15b5f38da70684d4be7c6d26e2475b7 = $this->env->getExtension("native_profiler");
        $__internal_3caad8da3ef05f308d9e2aab0646cd09e15b5f38da70684d4be7c6d26e2475b7->enter($__internal_3caad8da3ef05f308d9e2aab0646cd09e15b5f38da70684d4be7c6d26e2475b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3caad8da3ef05f308d9e2aab0646cd09e15b5f38da70684d4be7c6d26e2475b7->leave($__internal_3caad8da3ef05f308d9e2aab0646cd09e15b5f38da70684d4be7c6d26e2475b7_prof);

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
