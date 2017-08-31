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
        $__internal_bf601e7585751997cd507cc715e9aa65bda8f49ca917f4ce58f167c7a14a0fbc = $this->env->getExtension("native_profiler");
        $__internal_bf601e7585751997cd507cc715e9aa65bda8f49ca917f4ce58f167c7a14a0fbc->enter($__internal_bf601e7585751997cd507cc715e9aa65bda8f49ca917f4ce58f167c7a14a0fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bf601e7585751997cd507cc715e9aa65bda8f49ca917f4ce58f167c7a14a0fbc->leave($__internal_bf601e7585751997cd507cc715e9aa65bda8f49ca917f4ce58f167c7a14a0fbc_prof);

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
