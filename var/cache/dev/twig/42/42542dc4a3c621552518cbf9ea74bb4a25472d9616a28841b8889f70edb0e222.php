<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6c61d811e67ee5fccc80a68bc1aeefe2f4dac27ff0f848f7f856acd1ef0eea48 extends Twig_Template
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
        $__internal_e04f7af60131c1a91ac6dff62976e6c00654ff01b81f82e5a3f392bd523f1a71 = $this->env->getExtension("native_profiler");
        $__internal_e04f7af60131c1a91ac6dff62976e6c00654ff01b81f82e5a3f392bd523f1a71->enter($__internal_e04f7af60131c1a91ac6dff62976e6c00654ff01b81f82e5a3f392bd523f1a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e04f7af60131c1a91ac6dff62976e6c00654ff01b81f82e5a3f392bd523f1a71->leave($__internal_e04f7af60131c1a91ac6dff62976e6c00654ff01b81f82e5a3f392bd523f1a71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
