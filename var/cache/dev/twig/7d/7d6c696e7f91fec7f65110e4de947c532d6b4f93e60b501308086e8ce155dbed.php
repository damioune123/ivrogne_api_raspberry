<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_97b4500e0acec5e0573886ec2641418511dcfb232561051a26b1e2fa6ba7d04b extends Twig_Template
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
        $__internal_4d094203462a6c5bdddc1b7ad0e4c2c88a18af9e4af1e49c772c1f4625174ade = $this->env->getExtension("native_profiler");
        $__internal_4d094203462a6c5bdddc1b7ad0e4c2c88a18af9e4af1e49c772c1f4625174ade->enter($__internal_4d094203462a6c5bdddc1b7ad0e4c2c88a18af9e4af1e49c772c1f4625174ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4d094203462a6c5bdddc1b7ad0e4c2c88a18af9e4af1e49c772c1f4625174ade->leave($__internal_4d094203462a6c5bdddc1b7ad0e4c2c88a18af9e4af1e49c772c1f4625174ade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
