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
        $__internal_83de9d5407d246506683b569d7132c062b8b9e66dd126b6163ea20a6f1e4832a = $this->env->getExtension("native_profiler");
        $__internal_83de9d5407d246506683b569d7132c062b8b9e66dd126b6163ea20a6f1e4832a->enter($__internal_83de9d5407d246506683b569d7132c062b8b9e66dd126b6163ea20a6f1e4832a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_83de9d5407d246506683b569d7132c062b8b9e66dd126b6163ea20a6f1e4832a->leave($__internal_83de9d5407d246506683b569d7132c062b8b9e66dd126b6163ea20a6f1e4832a_prof);

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
