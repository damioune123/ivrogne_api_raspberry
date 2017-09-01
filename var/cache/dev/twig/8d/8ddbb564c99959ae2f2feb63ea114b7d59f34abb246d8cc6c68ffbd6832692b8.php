<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bcf63a47eb06bde4ea5f2e060bf803e0ce4f274cffe538eb7bf39d36be818e87 extends Twig_Template
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
        $__internal_62a18b26e49ead4ba8f325d0a67a2bcba24c4460986707391c06b6ca91d451ed = $this->env->getExtension("native_profiler");
        $__internal_62a18b26e49ead4ba8f325d0a67a2bcba24c4460986707391c06b6ca91d451ed->enter($__internal_62a18b26e49ead4ba8f325d0a67a2bcba24c4460986707391c06b6ca91d451ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_62a18b26e49ead4ba8f325d0a67a2bcba24c4460986707391c06b6ca91d451ed->leave($__internal_62a18b26e49ead4ba8f325d0a67a2bcba24c4460986707391c06b6ca91d451ed_prof);

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
