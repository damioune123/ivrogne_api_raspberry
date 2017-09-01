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
        $__internal_7850c850a838b673cd897935a0c648645bf8dd86681f0f1de5cad49c970e2df9 = $this->env->getExtension("native_profiler");
        $__internal_7850c850a838b673cd897935a0c648645bf8dd86681f0f1de5cad49c970e2df9->enter($__internal_7850c850a838b673cd897935a0c648645bf8dd86681f0f1de5cad49c970e2df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7850c850a838b673cd897935a0c648645bf8dd86681f0f1de5cad49c970e2df9->leave($__internal_7850c850a838b673cd897935a0c648645bf8dd86681f0f1de5cad49c970e2df9_prof);

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
