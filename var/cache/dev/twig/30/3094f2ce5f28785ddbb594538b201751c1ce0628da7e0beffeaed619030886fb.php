<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a18b234899cf2484c9c90676025051d8429c8a0ce612c8103eef30b640480a67 extends Twig_Template
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
        $__internal_223ceb9440534ed1cac6179356c3c0c402915f267f88a375bc2fc47d698c3904 = $this->env->getExtension("native_profiler");
        $__internal_223ceb9440534ed1cac6179356c3c0c402915f267f88a375bc2fc47d698c3904->enter($__internal_223ceb9440534ed1cac6179356c3c0c402915f267f88a375bc2fc47d698c3904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_223ceb9440534ed1cac6179356c3c0c402915f267f88a375bc2fc47d698c3904->leave($__internal_223ceb9440534ed1cac6179356c3c0c402915f267f88a375bc2fc47d698c3904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
