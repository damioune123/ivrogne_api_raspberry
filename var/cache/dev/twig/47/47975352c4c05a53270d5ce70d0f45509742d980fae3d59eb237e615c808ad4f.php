<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_67372d84881a0205f70592c0c5798b5200b4fe0cbe04a2400611003228262e89 extends Twig_Template
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
        $__internal_1b9c6b0c2d778d100e18af27ad8af307961d91ffa323f5e69b8fdb1463a22bcc = $this->env->getExtension("native_profiler");
        $__internal_1b9c6b0c2d778d100e18af27ad8af307961d91ffa323f5e69b8fdb1463a22bcc->enter($__internal_1b9c6b0c2d778d100e18af27ad8af307961d91ffa323f5e69b8fdb1463a22bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1b9c6b0c2d778d100e18af27ad8af307961d91ffa323f5e69b8fdb1463a22bcc->leave($__internal_1b9c6b0c2d778d100e18af27ad8af307961d91ffa323f5e69b8fdb1463a22bcc_prof);

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
