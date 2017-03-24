<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6d91846c968e6feca469a63dd1e6e466e5497931c459a01af01f057ebc5e6205 extends Twig_Template
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
        $__internal_86fdc001774c5ef6eec099fca7c6b956307b913a7606e64dbdde77ff206626af = $this->env->getExtension("native_profiler");
        $__internal_86fdc001774c5ef6eec099fca7c6b956307b913a7606e64dbdde77ff206626af->enter($__internal_86fdc001774c5ef6eec099fca7c6b956307b913a7606e64dbdde77ff206626af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_86fdc001774c5ef6eec099fca7c6b956307b913a7606e64dbdde77ff206626af->leave($__internal_86fdc001774c5ef6eec099fca7c6b956307b913a7606e64dbdde77ff206626af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
