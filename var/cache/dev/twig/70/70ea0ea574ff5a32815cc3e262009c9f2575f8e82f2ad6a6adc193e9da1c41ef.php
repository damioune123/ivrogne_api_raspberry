<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f6b8787e1c9ecd2188c86f794eb6727e618baa362c7c0b1e98f736e5f2fede14 extends Twig_Template
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
        $__internal_fffc36b3fb78d9631e9926593e3a09e225c3fcb9e07ee8b002cbd9c7cfa51e5f = $this->env->getExtension("native_profiler");
        $__internal_fffc36b3fb78d9631e9926593e3a09e225c3fcb9e07ee8b002cbd9c7cfa51e5f->enter($__internal_fffc36b3fb78d9631e9926593e3a09e225c3fcb9e07ee8b002cbd9c7cfa51e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fffc36b3fb78d9631e9926593e3a09e225c3fcb9e07ee8b002cbd9c7cfa51e5f->leave($__internal_fffc36b3fb78d9631e9926593e3a09e225c3fcb9e07ee8b002cbd9c7cfa51e5f_prof);

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
